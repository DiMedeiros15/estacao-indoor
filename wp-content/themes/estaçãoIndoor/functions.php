<?php

add_theme_support('post-thumbnails');

function loading_styles()
{
    wp_enqueue_style('bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_script('bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array('jquery'), null, true);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('modal-js', get_template_directory_uri() . '/assets/js/modal.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'loading_styles');

register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu'
    )
);

function cptui_register_my_cpt_noticias()
{
    $labels = [
        "name" => "Notícias",
        "singular_name" => "Notícia",
    ];

    $args = [
        "label" => "Notícias",
        "labels" => $labels,
        "public" => true,
        "has_archive" => true,
        "rewrite" => ["slug" => "noticias"],
        "show_in_rest" => true,
        "supports" => ["title", "editor", "thumbnail"],
    ];

    register_post_type("noticias", $args);
}

function cptui_register_my_taxes_categoria_noticia()
{
    $labels = [
        "name" => "Categorias de Notícia",
        "singular_name" => "Categoria de Notícia",
    ];

    $args = [
        "label" => "Categorias de Notícia",
        "labels" => $labels,
        "hierarchical" => true,
        "public" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rewrite" => ["slug" => "categoria-noticia"],
    ];

    register_taxonomy("categoria_noticia", ["noticias"], $args);
}

add_action("init", "cptui_register_my_cpt_noticias");
add_action("init", "cptui_register_my_taxes_categoria_noticia");

// Função para criar posts via AJAX no CPT "noticias"
function handle_ajax_create_post() {
    check_ajax_referer('my_ajax_nonce', 'security');

    // Pega os dados enviados pelo AJAX e sanitiza
    $title = sanitize_text_field($_POST['title']);
    $content = sanitize_textarea_field($_POST['content']);
    $category_id = intval($_POST['category']);

    // Cria o post
    $post_id = wp_insert_post(array(
        'post_title' => $title,
        'post_content' => $content,
        'post_status' => 'publish',
        'post_type' => 'noticias',
        'tax_input' => array(
            'categoria_noticia' => array($category_id)
        )
    ));

    if ($post_id) {
        wp_send_json_success(array('message' => 'Notícia criada com sucesso!'));
    } else {
        wp_send_json_error(array('message' => 'Erro ao criar a notícia.'));
    } 
}
add_action('wp_ajax_create_post', 'handle_ajax_create_post');

// Adiciona o script com os dados AJAX no frontend
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
    wp_localize_script('custom-js', 'myAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('my_ajax_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function create_post_type_noticias() {
    register_post_type('noticias',
        array(
            'labels' => array(
                'name' => 'Notícias',
                'singular_name' => 'Notícia'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_post_type_noticias');