<?php get_header(); ?>
    <div class="content container">
        <div class="main block">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                <article class="post">
                <h2><?php the_title( ) ?> </h2>
                <p class="meta">
                    Posted at <?php the_date('F j, Y g:i a'); ?> by 
                    <a style="color:#fff" href="<?php echo get_author_posts_url( get_the_author_id()); ?> " >
                        <?php the_author( ) ?> 
                    </a>
                </p>
                <p>
                    <?php the_content(); ?>
                </p>

            </article>
                <?php endwhile ; ?>
            <?php else : ?>
                <?php echo apautop('Sorry, NO post were found!') ?>
            <?php endif ; ?>
        </div>

<?php get_footer(); ?>