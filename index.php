<?php get_header(); ?>
    <main>
        <div class="container">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                <div class="post">
                    <h2 class="post-title"><?php the_title(); ?></h2>
                    <div class="post-content"><?php the_content(); ?></div>
                    <a class="permalink" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </main>
<?php get_footer(); ?>