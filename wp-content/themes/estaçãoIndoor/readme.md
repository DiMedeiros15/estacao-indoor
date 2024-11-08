Projeto de Cadastro de Notícias com Modal
Visão Geral
Este projeto é uma aplicação web integrada ao WordPress, desenvolvida para o cadastro e exibição de notícias através de um modal. Ele permite que o usuário crie posts de notícias com título, conteúdo e categoria, sem necessidade de navegar para outras páginas. O objetivo é proporcionar uma experiência de usuário fluida e interativa.

Tecnologias e Ferramentas Utilizadas
WordPress: Sistema de gerenciamento de conteúdo que gerencia o backend, armazenamento de dados e o gerenciamento dos posts.
Custom Post Type UI (CPT UI): Plugin para registrar custom post types e taxonomias específicas, facilitando a criação de um tipo de post customizado para "Notícias".
JavaScript (ES6): Para manipulação do DOM e envio de dados via AJAX.
PHP: Linguagem de backend para o processamento de requisições e integração com o banco de dados do WordPress.
Bootstrap 4: Framework CSS para estilização do modal e botões.
SCSS (Sass): Pré-processador CSS que facilita a organização, reuso de estilos e customizações

Descrição dos Arquivos
modal-template.php

Função: Este arquivo contém a estrutura HTML do modal e o formulário para cadastrar notícias.
Componentes Principais:
Botão de Cadastro: Um botão que abre o modal ao ser clicado.
Formulário de Cadastro de Notícia: Campos de entrada para título, conteúdo e categoria da notícia.
Categoria: Dropdown carregado dinamicamente com as categorias registradas no WordPress, para permitir uma seleção rápida e prática.
js/modal.js

Função: Contém o código JavaScript responsável pela:
Abertura e Fechamento do Modal: Eventos para abrir o modal ao clicar no botão e fechá-lo ao clicar fora ou no botão de fechar.
Envio de Dados via AJAX: Captura os dados do formulário e os envia para o WordPress via AJAX, para a criação de uma nova notícia.
Feedback ao Usuário: Exibe alertas de sucesso ou erro e recarrega a página após a criação bem-sucedida de uma notícia.
functions.php

Função: Arquivo principal do tema para processar o lado do servidor, incluindo:
Função de Criação de Post: create_post_via_ajax() cria uma nova notícia no WordPress com base nos dados recebidos via AJAX.
Registro do Script JavaScript: Função enqueue_custom_scripts() que carrega modal.js e adiciona variáveis do PHP, como a URL de AJAX, ao script.
Segurança AJAX: Uso de wp_create_nonce para proteger a submissão de formulários e validação das requisições recebidas.
style.scss

Função: Define os estilos personalizados do tema. Utiliza variáveis e mixins do SCSS para:
Customizar o Layout do Modal: Classes reutilizáveis e variáveis para ajustar a aparência do modal e outros elementos.
Integração com Bootstrap: Expande e sobrescreve estilos do Bootstrap para personalizar o modal e ajustar os elementos do projeto ao tema do WordPress.
README.md

Este arquivo que você está lendo, contendo uma visão geral do projeto, estrutura de arquivos e instruções de uso.

Como Usar
1. Configuração Inicial
Instale o Plugin CPT UI:

No painel do WordPress, vá em Plugins > Adicionar Novo e instale o plugin "Custom Post Type UI".
Este plugin é usado para criar o Custom Post Type (CPT) noticias e a taxonomia categoria_noticia, que serão utilizadas para registrar e categorizar as notícias.
Configuração do Custom Post Type (CPT):

No menu do plugin CPT UI, configure o post type chamado noticias com a taxonomia categoria_noticia para organizar as categorias de cada notícia.

2. Instalação e Configuração do Tema
Adicione os arquivos modal-template.php, modal.js, functions.php e style.scss ao diretório do tema ativo no WordPress.
Verifique se o arquivo functions.php está carregando corretamente o modal.js e o style.scss.

3. Funcionamento do Modal e Cadastro de Notícia
Botão de Cadastro de Notícia: Ao clicar no botão de cadastro no site, o modal será exibido.

Formulário de Cadastro:
Título: Campo obrigatório para o título da notícia.
Conteúdo: Campo obrigatório para o conteúdo da notícia.
Categoria: Seleciona uma categoria existente no WordPress, previamente configurada com o plugin CPT UI.
Submissão AJAX: O formulário envia os dados via AJAX, e a função create_post_via_ajax() é executada no backend para salvar a notícia no banco de dados.
Confirmação de Cadastro: Após o envio, o modal exibe uma mensagem de confirmação, e a página recarrega para mostrar a nova notícia.
Funcionalidades e Benefícios
Cadastro de Notícias com Modal: O cadastro ocorre sem redirecionamento de página, o que proporciona uma experiência de usuário mais fluida.
Integração de Categorias: Utiliza a taxonomia customizada categoria_noticia para classificar e organizar as notícias.
Experiência AJAX: O envio de dados e o feedback ao usuário são feitos de forma assíncrona, melhorando a interatividade.
Bootstrap e SCSS: O uso de Bootstrap para o modal e SCSS para o estilo melhora a customização e a organização do código.
Manutenção e Expansão
A estrutura modular e o uso de Custom Post Types (CPT) tornam o projeto facilmente escalável. Para futuras melhorias, é possível adicionar campos adicionais no modal ou novos tipos de taxonomia para enriquecer a experiência do usuário e facilitar o gerenciamento de notícias.