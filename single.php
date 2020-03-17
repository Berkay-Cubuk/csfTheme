<?php get_header(); ?>
<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="post-title-container">
        <div class="container">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <div class="post-details">
                <span class="post-author">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    &nbsp;
                    <?php echo the_author_meta('display_name', 1); ?>
                </span>
                <span class="post-date">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    &nbsp;
                    <?php echo get_the_date('d.m.Y'); ?>
                </span>
            </div>
        </div>
    </section>
    <section class="post-main-container">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
    <section class="post-tags-container">
        <div class="container">
            <div class="post-tags">
                <?php
                    $tags = get_the_tags();
                    if($tags) {
                        ?> <p class="post-tags-title">Tags:</p> <?php
                        foreach($tags as $tag) {
                            echo '<a href="' . site_url() . '/?tag=' . $tag->slug . '" class="post-tag">' . $tag->name . '</a>';
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="post-comments-container">
        <div class="container">
            <?php 
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>