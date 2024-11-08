<?php get_header(); ?>

<?php get_template_part('modal-template'); ?>

<div class="container my-5">
    <div class="row">
        <?php 
        $args = array(
            'post_type' => 'noticias',
            'posts_per_page' => 10,
        );
        $query = new WP_Query($args);
        
        if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
            <div class="align-items-center col-lg-4 col-md-6 mb-4 d-flex justify-content-center">
                <div class="news-item w-100 p-5 border rounded text-center">
                    <h2 class="news-title"><?php the_title(); ?></h2>
                    
                    <!-- <div class="news-category">
                        <?php 
                        $categories = get_the_terms(get_the_ID(), 'categoria_noticia');
                        if ($categories) {
                            foreach ($categories as $category) {
                                $category_name = strtolower($category->name);
                                $category_color = "#" . substr(md5($category_name), 0, 6);
                                echo '<span class="category-label" style="background-color:' . esc_attr($category_color) . ';">' . esc_html($category->name) . '</span>';
                            }
                        }
                        ?>
                    </div> -->

                    <p class="news-content"><?php echo get_the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary w-100 mt-2 rounded-pill">Saiba mais</a>
                </div>
            </div>
        <?php endwhile;
        else: ?>
            <p>Não há notícias disponíveis.</p>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>
