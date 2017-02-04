# Criando Temas Customizados com WordPress

Repositório de arquivos para o curso "Criando Temas Customizados com WordPress".

## Conteúdo do Curso

### Seção 1 - Introdução
#### Aula 1 - Apresentação
Aula de introdução do curso. Aqui apenas apresentamos o conteúdo a ser trabalhado no curso.

### Seção 2 - A estrutura básica de um tema WordPress
#### Aula 2 - A anatomia de um tema WordPress
Mostramos como são constituídos os temas, quais são os arquivos básicos para a criação de um tema e conceituamos a Hierarquia de Temas do WordPress.
Fontes usadas:

* [Codex - Theme Development] - Página do Codex WordPress sobre desenvolvimento de temas
* [Codex - Required Theme Files] - Instruções sobre como enviar temas para o repositório do WordPress
* [Theme Anatomy] - Folha de referência sobre a anatomia de um tema WordPress

#### Aula 3 - Criando e ativando nosso tema
Criação dos arquivos básicos do tema (index.php, styles.css e screenshot.png) e ativação na área administrativa do WordPress.

Fontes usadas: 
* [Temas WordPress] - Repositório de temas do WordPress

#### Aula 4 - Os blocos básicos de construção do tema
Dividir para conquistar! Nesta aula, dividimos nosso `index.php` em três partes e mostramos como chamar as funções `get_header()` e `get_footer()`. Além disso, mostrando basicamente como aplicar nosso conhecimento usando um tema HTML puro baixado da internet.

#### Aula 5 - Introdução ao arquivo functions.php (Enfileirando folhas de estilo)
Nesta aual entedemos a "função" do aquivo `functions.php`, carregando nossas folhas de estilo personalizadas. Aprendemos também a função `wp_head()`.

#### Aula 6 - Introdução ao arquivo functions.php (Enfileirando scripts)
Aqui aprendemos a enfileiras scripts. O destaque desta aula é a explicação de como integrar o framework Bootstrap ao nosso tema, tornando-o responsivo. 

#### Aula 7 - Adicionando menus
Aprendemos a registrar, criar e chamar nossos menus na plataforma WordPress desde o zero.

### Seção 3 - Funções avançadas para criação do tema WordPress 

#### Aula 8 - O loop WordPress
Nesta aula, aprenderemos a estrutura básica do loop WordPress, o bloco básico de manipulação dos posts dentro da plataforma. Nesta aula, também ensinamos como criar uma página específica para nosso blogroll e para a home.

#### Aula 9 - Templates de páginas
Aprenderemos como criar páginas diferenciadas do template padrão (index.php) de duas formas. A primeira criando um arquivo específico "page-nomedapagina" e a segunda através de um modelo de página reutilizável. 

#### Aula 10 - Adicionando theme_support ao tema (parte 1)
Nesta aula, aprendemos sobre o hook (ou função) `add_theme_support()`, com a qual podemos adicionar áreas customizáveis na administração do site para inserção dinâmica de cabeçalhos, suporte a fundos personalizados, tags html5, miniaturas e muitas outras funcionalidades.

#### Aula 11 - Adicionando theme_support ao tema (parte 2)
Na aula 11, aprendemos a como utilizar e inserir miniaturas em nossas páginas através do hook `add_theme_support()`.

#### Aula 12 - Trabalhando com post formats
Nesta aula, mostraremos como diferenciar nossas chamadas de posts através dos formatos de posts (post formats). Aprenderemos também a utilidade da função `get_template_part()`.

#### Aula 13 - Sidebars (parte 1)
Falaremos sobre as barras laterais, ou sidebars. Aprenderemos a registrá-las e a chamá-las dentro de um arquivo específico. Também veremos como administrar essas barras dentro do editor de widgets do WordPress. 

#### Aula 14 - Sidebars (parte 2)
Continuação da aula sobre sidebars. 

#### Aula 15 - O poder da classe WP_Query (parte 1)
Começaremos a falar sobre a classe `WP_Query`, responsável por modificar da forma mais recomendada a consulta padrão do WordPress. 

#### Aula 16 - O poder da classe WP_Query (parte 2)
Nesta aula, continuamos a falar sobre WP_Query, complementando o exemplo modificado da página home iniciado na aula 14.

#### Aula 17 - O poder da classe WP_Query (Exemplo avançado)
Esta aula não é essencial ao entendimento do curso, mas mostra uma forma um pouco mais avançada de aproveitarmos todo o poder da classe WP_Query. Utilizamos um pouco de lógica de programação básica para modificar ainda mais nossa consulta padrão. 

#### Aula 18 - O arquivo single.php
Nesta aula criaremos as páginas de templates para posts (single.php) e também aprenderemos como chamar os links para essas páginas e habilitar o formulário de comentários para cada post.

#### Aula 19 - Trabalhando com pesquisa
Nesta aula criaremos nosso formulário de pesquisa e também nossa página personalizada para apresentação de resultados de pesquisa.

#### Aula 20 - Compreendendo a paginação
Nesta aula aprenderemos duas formas de gerar paginação em nosso tema, tanto para a página de blog como para a nossa página de resultados de pesquisas.

#### Aula 21 - Resolvendo problemas com paginação
Compreenderemos como evitar problemas de paginação quando trabalharmos com loops personalizados, tanto usando WP_Query quanto usando a nada recomendada função query_posts().

#### Aula 22 - Criando páginas de arquivos, categorias e tags
Criaremos o arquivo `archive.php`, o qual servirá para oferecer uma visualização personalizada para páginas de arquivos (conteúdo classificado por mês), categorias e tags. 

#### Aula 23 - Criando páginas de erro 404
Aprenderemos aqui a criar páginas personalizadas de erro, que são muito importantes para que o visitante tenha noção de que o conteúdo buscado por ele não existe. Aprenderemos a chamar funções nessa página para manter o visitante em nosso site.

#### Aula 24 - Preparando o tema para SEO
Nesta aula ensinaremos o básico das boas práticas a serem aplicadas ao tema para que ele seja indexado pelos mecanismos de busca. Aprenderemos a chamar as funções que faltam em nosso `header.php` e remover a versão do WordPress do cabeçalho.

#### Aula 25 - Boas práticas e correções (parte 1)
Uma pausa na sequência de nossas aulas para conversar um pouco sobre boas práticas na construção dos nossos temas e fazer algumas correções de códigos.

#### Aula 26 - Boas práticas e correções (parte 2)
Parte 2 da nossa aula de boas práticas e correções.

### Seção 4 - Instalação de plugins

#### Aula 27 - Instalação do plugin de slides (MotoPress Slider)
Nesta aula faremos a instação do plugin que irá controlar a apresentação do nosso slide da página inicial. 

#### Aula 28 - Instalação do plugin de texto e contato (Black Studio TinyMCE Widget e Contact Form 7)
Faremos aqui a instalação e configuração do plugin de contato e de um plugin que deixa nosso widget de texto ainda mais poderoso.

#### Aula 33 - Título 
* [API Shortcodes - Smashing Magazine] - Explicação detalhada e com exemplos de implementação

## Contato
[Página do Curso] | [Página Pessoal] | [Facebook]

   [Codex - Theme Development]: <https://codex.wordpress.org/Theme_Development>
   [Codex - Required Theme Files]: <https://developer.wordpress.org/themes/release/required-theme-files/>
   [Theme Anatomy]: <http://wptutsplus.s3.amazonaws.com/090_WPCheatSheets/WP_CheatSheet_ThemeAnatomy.jpg>
   [Temas WordPress]: <https://br.wordpress.org/themes/>
   [API Shortcodes - Smashing Magazine]: <https://www.smashingmagazine.com/2012/05/wordpress-shortcodes-complete-guide/>
   [Página do Curso]: <http://www.criandotemaswp.com/>
   [Página Pessoal]: <http://www.marcelowebdesign.com/>
   [Facebook]: <https://www.facebook.com/marcelovieirafreelancer/>
































