# Deploy WordPress — Santa Clara Engenharia

Tema próprio, gerado a partir do site estático em `Site/`. Sem page builder, sem
plugin obrigatório, sem dependência externa além das fontes do Google.

## Instalação

1. Compacte a pasta do tema em um `.zip`:

   ```bash
   cd deploy-wordpress
   zip -r santa-clara-engenharia.zip santa-clara-engenharia
   ```

2. No painel: **Aparência → Temas → Adicionar novo → Enviar tema**, escolha o `.zip`
   e ative.

3. Crie duas páginas e escolha o modelo de cada uma em **Atributos da página → Modelo**:

   | Página que você cria | Slug obrigatório | Modelo a escolher |
   |---|---|---|
   | Política de Privacidade | `privacidade` | Politica de Privacidade |
   | Fornecedores e Trabalhe Conosco | `fornecedores` | Fornecedores e Trabalhe Conosco |

   Os slugs precisam ser exatamente esses: os links do rodapé e do banner de cookies
   apontam para `/privacidade/` e `/fornecedores/`.

4. Crie uma página vazia chamada **Home** e defina em **Configurações → Leitura →
   Sua página inicial exibe → Uma página estática → Página inicial: Home**.
   O `front-page.php` assume a home automaticamente; o conteúdo da página não é usado.

5. Em **Configurações → Links permanentes**, escolha **Nome do post** e salve
   (necessário para os slugs funcionarem).

## Formulário de fornecedores

O formulário envia por `admin-ajax.php` (ação `santa_clara_contato`) e dispara
`wp_mail()` para o e-mail do administrador do site.

- Para mandar para outro endereço, adicione ao `functions.php` do tema filho ou a um
  plugin de site:

  ```php
  add_filter( 'santa_clara_email_destino', function () {
      return 'engsantaclara@gmail.com';
  } );
  ```

- **Recomendado:** instale um plugin de SMTP (WP Mail SMTP, Post SMTP). O `wp_mail()`
  do PHP puro costuma cair em spam ou ser bloqueado pela hospedagem.
- Se o envio falhar, o front-end mostra um link de e-mail com os dados preenchidos,
  para o candidato não perder o cadastro.

## O que o tema já resolve

- `title-tag` nativo (o WordPress monta o `<title>`), Open Graph e JSON-LD de
  `GeneralContractor` no `header.php`.
- CSS e JS enfileirados com versão (`SANTA_CLARA_VERSION`), fontes com `preconnect`.
- `wp_head()` e `wp_footer()` presentes, então plugins de analytics e de cache funcionam.
- Emoji script, generator e RSD removidos do `<head>`.
- Menus registrados (`principal` e `rodape`) caso o cliente queira editar a navegação
  pelo painel no futuro. Hoje a navegação está fixa no template, porque é uma
  one-page com âncoras.

## Atualizar o tema depois de mexer no site

O tema é **gerado**, não editado à mão. Ao alterar `Site/`, rode de novo:

```bash
python _raw/build-wordpress.py
```

Isso recria `header.php`, `front-page.php`, `footer.php`, os templates de página,
`style.css` e os assets. O `functions.php` e este arquivo **não** são sobrescritos.

## Verificação feita antes da entrega

- `php -l` limpo em todos os arquivos do tema.
- Tema renderizado fora do WordPress com um shim das funções: home, privacidade e
  fornecedores retornam 200, sem erro de PHP, sem erro de console, sem 404 de asset.
- Zero overflow horizontal a 320px e a 1440px na saída do tema.
