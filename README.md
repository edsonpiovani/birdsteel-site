# BIRDSTEEL — Template Base HTML/PHP

Pacote técnico base para implementar o site institucional/comercial da BIRDSTEEL em HTML puro + PHP.

## Como usar

1. Envie todo o conteúdo deste pacote para a raiz do domínio `birdsteel.com.br`.
2. Ajuste `includes/config.php` com e-mail comercial real e dados validados.
3. Substitua imagens placeholder por fotos reais otimizadas em `.webp`.
4. Monte as páginas finais a partir dos templates e das copies aprovadas.
5. Teste o formulário em ambiente real.
6. Atualize `sitemap.xml` após publicar as páginas.
7. Envie o sitemap no Google Search Console.

## Arquivos principais

- `includes/config.php`: constantes, WhatsApp, URL base, CSRF e helpers.
- `includes/head.php`: metadados, canonical, Open Graph e schemas globais.
- `includes/header.php`: menu principal e CTA.
- `includes/footer.php`: rodapé com links internos.
- `forms/orcamento.php`: processamento do formulário com CSRF, honeypot e validação.
- `assets/css/style.css`: estilo responsivo base.
- `assets/js/main.js`: menu mobile e filtros do portfólio.
- `templates/`: modelos reutilizáveis para páginas comerciais e artigos.

## Pontos críticos antes de publicar

- Validar e-mail de destino do formulário.
- Validar endereço completo antes de usar schema LocalBusiness definitivo.
- Não publicar promessas técnicas sem validação.
- Usar fotos reais da BIRDSTEEL.
- Testar mobile e formulário.
- Validar links internos.

## WhatsApp

Número configurado: `+55 15 99753-0187`.

## Observação

Este pacote é uma base técnica. As páginas finais devem receber o conteúdo completo das copies já criadas no projeto.


## Instalação em /sitenovo/

Este pacote foi corrigido para funcionar tanto na raiz do domínio quanto em subpasta.

Para publicar em `https://birdsteel.com.br/sitenovo/`:

1. Abra o cPanel.
2. Entre em `public_html/sitenovo/`.
3. Apague os arquivos antigos de teste, se houver.
4. Envie o ZIP corrigido.
5. Extraia o ZIP diretamente dentro de `sitenovo/`.
6. A estrutura correta deve ficar assim:

```text
public_html/sitenovo/
├── index.php
├── includes/
├── assets/
├── forms/
├── contato/
├── projetos/
├── rack-para-data-center/
├── blog/
├── robots.txt
└── sitemap.xml
```

Atenção: não deixe os arquivos dentro de uma pasta extra como:

```text
public_html/sitenovo/birdsteel-template-base-html-php/
```

Se isso acontecer, o endereço correto passaria a ser `/sitenovo/birdsteel-template-base-html-php/`, e não `/sitenovo/`.

## Correção aplicada nesta versão

- Removido o uso rígido de `$_SERVER['DOCUMENT_ROOT']` para includes.
- Adicionado `PROJECT_ROOT` em `includes/config.php`.
- Adicionada detecção automática de subpasta pública, como `/sitenovo`.
- Links internos, assets e formulário passam a funcionar dentro da subpasta.
- Redirecionamentos do formulário respeitam a subpasta.


## Atualização v3

- Logo oficial aplicado no header e footer.
- Botão lateral do WhatsApp substituído por SVG oficial.
- Páginas internas principais criadas: Empresarial, Residencial, Sob Medida, Empresa e Blog.
- Páginas de produtos criadas para evitar links quebrados.
- Artigos adicionais criados em versão base.
- Sitemap atualizado com todas as URLs.

## Atualização v6

- Blog incluído no menu principal.
- Links do header e footer ajustados para usar `site_path()`, funcionando tanto na raiz quanto em `/sitenovo/`.
- Menu do Blog fica ativo nas páginas `/blog/` e nos artigos internos.
