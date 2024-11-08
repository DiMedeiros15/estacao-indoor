<?php get_header(); ?>

<main class="noticia-full container my-5">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="noticia-conteudo mb-4">
            <!-- Título da Notícia -->
            <h1 class="noticia-titulo text-center  mb-3"><?php the_title(); ?></h1>
            
            <!-- Data da Notícia -->
            <p class="noticia-data text-muted text-center mb-4"><?php echo get_the_date(); ?></p>

            <!-- Categorias da Notícia -->
            <div class="noticia-categoria mb-4">
                <?php
                $categories = get_the_terms( get_the_ID(), 'categoria_noticia' );
                if ($categories) {
                    foreach ($categories as $category) {
                        $category_name = strtolower($category->name);
                        $category_color = "#" . substr(md5($category_name), 0, 6);
                        echo '<span class="category-label badge rounded-pill" style="background-color:' . esc_attr($category_color) . ';">' . esc_html($category->name) . '</span> ';
                    }
                }
                ?>
            </div>

            <!-- Descrição da Notícia -->
            <div class="noticia-descricao">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
