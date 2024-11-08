<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header mb-5">
        <div class="header-container d-flex flex-column flex-md-row justify-content-around align-items-center flex-wrap">
            <div class="logo text-center mb-3 mb-md-0">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/Assinatura-Visual-Estacao-Indoor-Horizontal_Colorido.png" alt="Logo">
                </a>
            </div>

            <div class="d-flex align-items-center justify-content-around gap-md-3 gap-lg-5 flex-wrap">
                <div class="header-actions text-center mb-3 mb-md-2">
                    <!-- Botão para abrir o modal -->
                    <button class="btn btn-primary" id="openModalBtn">Cadastrar Notícia</button>
                    <a href="<?php echo admin_url('edit-tags.php?taxonomy=categoria_noticia&post_type=noticias'); ?>" class="btn btn-secondary">Cadastrar Categoria</a>
                </div>

                <div class="search-bar text-center mb-3 mb-md-0">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
                        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Buscar Noticias" class="form-control d-inline-block w-75">
                        <input type="hidden" name="post_type" value="noticias">
                        <button type="submit" class="btn btn-outline-secondary">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </header>