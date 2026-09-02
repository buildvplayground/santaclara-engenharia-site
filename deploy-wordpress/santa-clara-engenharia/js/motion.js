/* =============================================================================
   Motor de movimento — Santa Clara / F2L Engenharia
   Implementa a especificacao de gerar-frontend/sistema-de-movimento.md.
   Zero dependencia externa. Calibragem da casa: deslocamento curto (24px),
   easing longo, parallax <= .12, sem bounce.
   ========================================================================== */
(function () {
  'use strict';

  var docEl  = document.documentElement;
  var REDUCE = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Rede de seguranca: se algo estourar, o gate cai e tudo fica visivel. */
  var failsafe = setTimeout(function () { docEl.removeAttribute('data-motion'); }, 4000);

  if (REDUCE) {
    docEl.removeAttribute('data-motion');
    clearTimeout(failsafe);
  }

  /* ---------------------------------------------------------------------
     1. Titulos palavra por palavra
        So em elementos [data-split] cujo conteudo e texto puro.
     --------------------------------------------------------------------- */
  function splitWords(el) {
    if (el.querySelector('*') || !el.textContent.trim()) return false;
    var words = el.textContent.trim().split(/\s+/);
    el.textContent = '';
    words.forEach(function (word, i) {
      var s = document.createElement('span');
      s.className = 'w';
      var it = document.createElement('i');
      it.textContent = word;
      it.style.transitionDelay = (i * 42) + 'ms';
      s.appendChild(it);
      el.appendChild(s);
      if (i < words.length - 1) el.appendChild(document.createTextNode(' '));
    });
    return true;
  }

  if (!REDUCE) {
    [].forEach.call(document.querySelectorAll('[data-split]'), function (el) {
      if (!splitWords(el)) {
        el.removeAttribute('data-split');
        if (!el.hasAttribute('data-reveal')) el.setAttribute('data-reveal', '');
      }
    });
  }

  /* ---------------------------------------------------------------------
     2. Reveals — stagger automatico entre irmaos diretos
     --------------------------------------------------------------------- */
  var groups = new Map();
  var reveals = [].slice.call(document.querySelectorAll('[data-reveal]'));
  reveals.forEach(function (el) {
    var p = el.parentNode;
    if (!groups.has(p)) groups.set(p, 0);
    var i = groups.get(p);
    groups.set(p, i + 1);
    if (i > 0) el.style.transitionDelay = Math.min(i, 6) * 80 + 'ms';
  });

  var animated = [].slice.call(document.querySelectorAll('[data-reveal],[data-split],[data-seq]'));

  function turnOn(el, instant) {
    if (el.hasAttribute('data-on')) return;
    if (instant) {
      el.style.transitionDelay = '0ms';
      [].forEach.call(el.querySelectorAll('.w i'), function (i) { i.style.transitionDelay = '0ms'; });
    }
    el.setAttribute('data-on', 'true');
  }

  var io = null;
  if ('IntersectionObserver' in window) {
    io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { turnOn(e.target); io.unobserve(e.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -7% 0px' });
    animated.forEach(function (el) { io.observe(el); });
  } else {
    animated.forEach(function (el) { turnOn(el, true); });
  }

  /* Camada 1: primeira tela entra por timer (IO nao dispara em aba oculta). */
  function firstScreen() {
    var vh = window.innerHeight;
    animated.forEach(function (el) {
      var r = el.getBoundingClientRect();
      if (r.top < vh * 0.92 && r.bottom > 0) { turnOn(el); if (io) io.unobserve(el); }
    });
  }
  requestAnimationFrame(firstScreen);
  setTimeout(firstScreen, 140);

  /* Camada 3: saltos de scroll (ancora, hash, arrastar a barra). */
  function flushPassed() {
    var limit = window.innerHeight * 0.3;
    animated.forEach(function (el) {
      if (el.hasAttribute('data-on')) return;
      if (el.getBoundingClientRect().bottom < limit) { turnOn(el, true); if (io) io.unobserve(el); }
    });
  }

  /* ---------------------------------------------------------------------
     3. Header: solido ao rolar, esconde ao descer
     --------------------------------------------------------------------- */
  var head = document.querySelector('[data-head]');
  var lastY = 0;

  function onHead(y) {
    if (!head) return;
    head.setAttribute('data-solid', y > 40 ? 'true' : 'false');
    if (document.body.classList.contains('menu-open')) { head.setAttribute('data-hide', 'false'); }
    else if (y > 260 && y > lastY + 4)  head.setAttribute('data-hide', 'true');
    else if (y < lastY - 4 || y <= 260) head.setAttribute('data-hide', 'false');
  }

  /* ---------------------------------------------------------------------
     4. Cena do hero: pin + scrub (so desktop). Sem estilo inline de position.
     --------------------------------------------------------------------- */
  var hero    = document.querySelector('[data-hero]');
  var heroFx  = document.querySelector('[data-hero-fx]');
  var heroMed = document.querySelector('[data-hero-media]');
  var heroIn  = document.querySelector('[data-hero-in]');
  var HERO_VH = 1.62;
  var heroLen = 0;

  function layoutHero() {
    if (!hero) return;
    var canPin = !REDUCE && window.innerWidth >= 900 && window.innerHeight >= 560;
    if (canPin) {
      hero.setAttribute('data-pin', 'on');
      hero.style.height = Math.round(window.innerHeight * HERO_VH) + 'px';
      heroLen = window.innerHeight * (HERO_VH - 1);
    } else {
      hero.removeAttribute('data-pin');
      hero.style.height = '';
      heroLen = 0;
    }
  }

  function scrubHero(y) {
    if (!hero || !heroLen) {
      if (heroMed) heroMed.style.transform = '';
      if (heroFx)  heroFx.style.opacity = '';
      if (heroIn)  { heroIn.style.transform = ''; heroIn.style.opacity = ''; }
      return;
    }
    var p = Math.min(Math.max(y / heroLen, 0), 1);
    if (heroMed) heroMed.style.transform = 'scale(' + (1 + p * 0.085).toFixed(4) + ')';
    if (heroFx)  heroFx.style.opacity = (p * p * 0.44).toFixed(3);
    if (heroIn) {
      heroIn.style.transform = 'translateY(' + (-72 * p).toFixed(1) + 'px)';
      heroIn.style.opacity = Math.max(0, 1 - p * 1.25).toFixed(3);
    }
  }

  /* ---------------------------------------------------------------------
     5. Parallax das faixas de imagem (intensidade <= .12)
     --------------------------------------------------------------------- */
  var paras = [].slice.call(document.querySelectorAll('[data-parallax]'));

  function parallax() {
    if (REDUCE) return;
    var vh = window.innerHeight;
    paras.forEach(function (el) {
      var host = el.parentNode.getBoundingClientRect();
      if (host.bottom < -80 || host.top > vh + 80) return;
      var amt = parseFloat(el.getAttribute('data-parallax')) || 0.1;
      var mid = host.top + host.height / 2 - vh / 2;
      el.style.transform = 'translate3d(0,' + (-mid * amt).toFixed(1) + 'px,0)';
    });
  }

  /* ---------------------------------------------------------------------
     6. Sequencias: timeline e passos (linha que desenha + itens em cascata)
     --------------------------------------------------------------------- */
  var seqs = [].slice.call(document.querySelectorAll('[data-seq]'));
  if ('IntersectionObserver' in window) {
    var seqIo = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        var host = e.target;
        host.setAttribute('data-on', 'true');
        var items = [].slice.call(host.querySelectorAll('[data-seq-item]'));
        items.forEach(function (it, i) {
          setTimeout(function () { it.setAttribute('data-on', 'true'); }, REDUCE ? 0 : 180 + i * 150);
        });
        seqIo.unobserve(host);
      });
    }, { threshold: 0.2 });
    seqs.forEach(function (s) { seqIo.observe(s); });
  } else {
    seqs.forEach(function (s) {
      s.setAttribute('data-on', 'true');
      [].forEach.call(s.querySelectorAll('[data-seq-item]'), function (i) { i.setAttribute('data-on', 'true'); });
    });
  }

  /* ---------------------------------------------------------------------
     7. Contadores
     --------------------------------------------------------------------- */
  var counters = [].slice.call(document.querySelectorAll('[data-count]'));
  function runCount(el, delay) {
    var end = parseFloat(el.getAttribute('data-count'));
    if (isNaN(end)) return;
    if (REDUCE) { el.textContent = String(end); el.setAttribute('data-done','1'); return; }
    var t0 = null, dur = 1600;
    setTimeout(function () {
      function step(t) {
        if (t0 === null) t0 = t;
        var k = Math.min((t - t0) / dur, 1);
        var e = 1 - Math.pow(1 - k, 3);
        el.textContent = String(Math.round(end * e));
        if (k < 1) requestAnimationFrame(step);
        else el.setAttribute('data-done', '1');
      }
      requestAnimationFrame(step);
    }, delay);
  }
  var cIo = null;
  if (counters.length && 'IntersectionObserver' in window) {
    cIo = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        var idx = counters.indexOf(e.target);
        runCount(e.target, Math.max(0, idx) * 180);
        cIo.unobserve(e.target);
      });
    }, { threshold: 0.5 });
    counters.forEach(function (c) { c.textContent = '0'; cIo.observe(c); });
  }

  /* Se o usuario pular a secao (salto de scroll), fica o valor final. */
  function flushCounters() {
    var limit = window.innerHeight * 0.3;
    counters.forEach(function (c) {
      if (c.getAttribute('data-done')) return;
      var r = c.getBoundingClientRect();
      if (r.bottom < limit || r.top > window.innerHeight * 3) {
        c.setAttribute('data-done', '1');
        c.textContent = c.getAttribute('data-count');
        if (cIo) cIo.unobserve(c);
      }
    });
  }

  /* ---------------------------------------------------------------------
     8. Loop de scroll unico
     --------------------------------------------------------------------- */
  var ticking = false;
  function onScroll() {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(function () {
      var y = window.pageYOffset || docEl.scrollTop;
      onHead(y);
      scrubHero(y);
      parallax();
      flushPassed();
      flushCounters();
      lastY = y;
      ticking = false;
    });
  }
  window.addEventListener('scroll', onScroll, { passive: true });

  var rt;
  window.addEventListener('resize', function () {
    clearTimeout(rt);
    rt = setTimeout(function () { layoutHero(); onScroll(); }, 120);
  });

  layoutHero();
  onScroll();
  clearTimeout(failsafe);
  setTimeout(function () { docEl.setAttribute('data-motion-ready', 'true'); }, 60);

  /* ---------------------------------------------------------------------
     9. Scroll suave proprio (lerp) — so ponteiro fino, sem lib
        Nunca sequestra o scroll com overlay aberto ou area rolavel sob o cursor.
     --------------------------------------------------------------------- */
  var fine = window.matchMedia('(hover:hover) and (pointer:fine)').matches;
  var lerpOn = fine && !REDUCE;
  var target = window.pageYOffset, current = target, running = false;

  function maxScroll() { return Math.max(0, document.body.scrollHeight - window.innerHeight); }

  function overlayOpen() {
    return document.body.style.overflow === 'hidden' ||
           document.body.classList.contains('menu-open');
  }

  function scrollableUnder(node) {
    for (var i = 0; node && i < 8; i++, node = node.parentElement) {
      if (node === document.body || node === docEl) break;
      var st = getComputedStyle(node);
      if (/(auto|scroll)/.test(st.overflowY) && node.scrollHeight > node.clientHeight + 4) return true;
    }
    return false;
  }

  function loop() {
    current += (target - current) * 0.105;
    if (Math.abs(target - current) < 0.4) { current = target; running = false; }
    window.scrollTo(0, Math.round(current));
    if (running) requestAnimationFrame(loop);
  }

  function push(delta) {
    if (!running) { current = window.pageYOffset; target = current; }
    target = Math.min(Math.max(target + delta, 0), maxScroll());
    if (!running) { running = true; requestAnimationFrame(loop); }
  }

  if (lerpOn) {
    window.addEventListener('wheel', function (e) {
      if (e.ctrlKey || overlayOpen() || scrollableUnder(e.target)) return;
      e.preventDefault();
      push(e.deltaMode === 1 ? e.deltaY * 18 : e.deltaY);
    }, { passive: false });

    window.addEventListener('keydown', function (e) {
      var t = e.target;
      if (t && /INPUT|TEXTAREA|SELECT/.test(t.tagName)) return;
      if (overlayOpen()) return;
      var vh = window.innerHeight, d = null;
      if (e.key === 'PageDown' || (e.key === ' ' && !e.shiftKey)) d = vh * 0.86;
      else if (e.key === 'PageUp' || (e.key === ' ' && e.shiftKey)) d = -vh * 0.86;
      else if (e.key === 'ArrowDown') d = 110;
      else if (e.key === 'ArrowUp') d = -110;
      else if (e.key === 'Home') { e.preventDefault(); ssTo(0); return; }
      else if (e.key === 'End')  { e.preventDefault(); ssTo(maxScroll()); return; }
      if (d !== null) { e.preventDefault(); push(d); }
    });
  }

  /* Ancoras: o motor conduz, descontando a altura do header. */
  function ssTo(y, cb) {
    y = Math.min(Math.max(y, 0), maxScroll());
    if (!lerpOn) {
      window.scrollTo({ top: y, behavior: REDUCE ? 'auto' : 'smooth' });
      if (cb) setTimeout(cb, REDUCE ? 0 : 520);
      return;
    }
    current = window.pageYOffset; target = y;
    if (!running) { running = true; requestAnimationFrame(loop); }
    if (cb) setTimeout(cb, 520);
  }

  var HEAD_OFF = 76;
  document.addEventListener('click', function (e) {
    var a = e.target.closest && e.target.closest('a[href^="#"]');
    if (!a) return;
    var id = a.getAttribute('href');
    if (!id || id === '#') return;
    var dest = document.querySelector(id);
    if (!dest) return;
    e.preventDefault();
    var fromMenu = !!a.closest('[data-drawer]');
    if (fromMenu && window.closeMenu) window.closeMenu();
    setTimeout(function () {
      var y = dest.getBoundingClientRect().top + window.pageYOffset - HEAD_OFF;
      ssTo(y, flushPassed);
      history.replaceState(null, '', id);
    }, fromMenu ? 420 : 80);
  });

  window.scMotion = { ssTo: ssTo, flush: flushPassed, reduce: REDUCE };
})();
