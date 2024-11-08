<?php get_header(); ?>

<div class="search-results container my-5">
    <h1 class="text-center mb-4">Resultados para: <?php echo get_search_query(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a>
                            </h5>
                            <p class="card-text text-center"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <div class="alert alert-warning text-center" role="alert">
            Nenhuma notícia encontrada.
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>