# Santa Clara / F2L Engenharia — site institucional

Obras comerciais para redes franqueadas em shoppings, galerias e centros urbanos.
Pipeline BuildV `criar-site`, executado em 02/09/2026.

- **Drive:** <https://drive.google.com/drive/folders/19RkiyMthZa_TS-UILouj4pdtAs999rmG>
- **Repositório:** `dev-buildv/santaclara-engenharia-site` (privado)
- **Preview local:** <http://localhost:8814> (`node _raw/preview-server.js`)
- **Preview do tema WP:** <http://127.0.0.1:8815> (`php -S 127.0.0.1:8815 _raw/wp-router.php`)
- **Hospedagem:** duas pastas prontas, `deploy-vercel/` e `deploy-wordpress/`. Domínio pendente.

---

## Etapas

| # | Etapa | Status | Observação |
|---|---|---|---|
| 1 | Extrair do Drive | ✅ done | 81 arquivos, 137 MB, via rclone. As subpastas `02. Criativos`, `03.01 Site (Copy + Backup)` e `03.02 Revisões` estavam **vazias** no Drive. |
| 2 | Organizar pastas | ✅ done | Árvore BuildV, `.gitignore` seguro, arquivos com acento renomeados para ASCII. |
| 2b | Repositório GitHub | ✅ done | `dev-buildv/santaclara-engenharia-site`, privado. Versiona só as pastas de deploy + estado. |
| 3 | Design system | ✅ done | `design-system/design-system.md`. Paleta e tipografia amostradas do logotipo e do PDF institucional. |
| 4 | Copy | ✅ done | `Copys/fonte-institucional.md` (verbatim) e `Copys/copy-site.md` (estruturada). Sem travessão. |
| 5 | Front-end | ✅ done | `Site/`, HTML + CSS + JS vanilla. Motor de movimento próprio. Auditado. |
| 6 | Ajustes finais | ✅ done | 36 fotos + 6 de composição em `.webp`. Overflow zero de 320px a 1920px. |
| 7 | Tags e módulos | ⚠️ parcial | LGPD completo (banner, política, fornecedores, backend PHP). GTM/GA4/Pixel/Merlin **pendentes**: faltam os IDs. |
| 8 | Revisão humana | ⏳ pendente | Site servido localmente, aguardando o olhar do cliente. |
| 9 | Deploy | 🚫 blocked | Pastas prontas. Falta domínio e importar no Vercel / instalar o tema no WordPress. |

---

## O que o site tem

Ritmo de seções sem dois blocos iguais em sequência:

1. **Hero** full-bleed com foto real, cena travada no scroll (pin + scrub) em desktop
2. **Marquee** tipográfico com as 29 marcas atendidas
3. **Sobre**, split foto + texto
4. **Faixa full-bleed** com parallax
5. **Diferenciais técnicos**, grid editorial numerado assimétrico (sem card, sem ícone genérico)
6. **Banda de números** em fundo escuro, contadores animados
7. **Método**, split invertido
8. **Processo**, timeline de 5 etapas com linha que desenha no scroll
9. **Faixa full-bleed** com parallax
10. **Obras**, grade 3/2/1 com lightbox de galeria por projeto
11. **Depoimentos**, bloco escuro com fotografia dessaturada ao fundo
12. **CTA**, passo a passo animado de 3 etapas + botão de WhatsApp (nunca formulário)
13. **Rodapé** institucional

Páginas internas: `privacidade.html`, `fornecedores.html`.

### Portfólio (6 projetos, 36 fotos)

| Projeto | Setor | Fotos |
|---|---|---|
| Bom Beef Burguers | Hamburgueria, SP e GO | 10 |
| DryWash | Estética automotiva, SP | 8 |
| Davvero Gelateria | Gelateria, shoppings SP | 4 |
| Fichips | Fast food, SP e RJ | 4 |
| Vino | Adega e restaurante, SP | 5 |
| Varejo e bem-estar | Chat Noir, Academia da Face, Costume | 5 |

---

## Pendências do cliente

Consolidadas em `state.json` → `pendencias`. Ver o report final.

---

## Como rodar de novo

```bash
python _raw/build-imgs.py        # trata as fotos (webp) e regenera o portfólio
python _raw/make-logo.py         # regenera os logotipos transparentes e o SVG da marca
python _raw/build-wordpress.py   # regenera o tema WordPress a partir de Site/
python _raw/auditar.py           # auditoria por medição (precisa do preview em pé)
node _raw/preview-server.js      # preview estático em :8814
php -S 127.0.0.1:8815 _raw/wp-router.php   # preview do tema WordPress
```
