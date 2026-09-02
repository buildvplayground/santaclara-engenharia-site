# Deploy Vercel — Santa Clara Engenharia

HTML estático, CSS e JS vanilla. Sem build, sem framework, sem dependência de runtime.

## Publicar

**Pela interface (recomendado):**

1. Importe o repositório `dev-buildv/santaclara-engenharia-site` no Vercel.
2. **Root Directory:** `deploy-vercel`
3. **Framework Preset:** `Other`
4. Build Command e Output Directory: deixe vazios.
5. Deploy.

**Pela CLI:**

```bash
cd deploy-vercel
vercel --prod
```

## Domínio

Em **Settings → Domains**, adicione o domínio do cliente e aponte o DNS conforme o
Vercel indicar. Depois, troque a URL em três lugares deste projeto:

- `index.html`: `<link rel="canonical">` e `og:image`
- `robots.txt`: linha `Sitemap:`
- `sitemap.xml`: as três `<loc>`

Hoje esses arquivos usam `https://santaclaraengenharia.com.br/` como placeholder.

## O que o `vercel.json` já faz

- `cleanUrls`: `/fornecedores` funciona sem o `.html`.
- Cabeçalhos de segurança: `X-Content-Type-Options`, `X-Frame-Options`,
  `Referrer-Policy`, `Permissions-Policy`.
- Cache imutável de um ano em `/assets/*` (imagens e logos com nome estável) e cache
  de um dia com revalidação em `/css/*` e `/js/*`.

## Formulário de fornecedores nesta hospedagem

O Vercel serve arquivos estáticos, então **não existe PHP aqui** e a pasta `api/`
foi removida de propósito. O `app.js` detecta a falha do envio e mostra um link de
e-mail já preenchido com os dados do formulário, para o cadastro não se perder.

Se quiser envio real no Vercel, o caminho é uma Serverless Function
(`api/contato.js` em Node) usando Resend ou SendGrid. Não foi feito porque depende de
uma chave de API que o cliente precisa fornecer.

## Atualizar

`deploy-vercel/` é uma cópia de `Site/` (sem `api/`) mais o `vercel.json` e este
arquivo. Depois de mexer em `Site/`, sincronize:

```bash
rm -rf deploy-vercel/assets deploy-vercel/css deploy-vercel/js
cp -r Site/assets Site/css Site/js deploy-vercel/
cp Site/*.html Site/favicon.png Site/robots.txt Site/sitemap.xml deploy-vercel/
```

## Verificação feita antes da entrega

- Zero overflow horizontal de 320px a 1920px, em três páginas.
- Sem erro de console, sem 404 de asset.
- Hero com pin ativo em desktop e sem pin em mobile, lightbox, menu off-canvas,
  âncoras e contadores testados por medição.
