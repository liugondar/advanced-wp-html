<?php get_header(); ?>
    <div class="content container">
        <div class="main block">
          <h1 class="page-header">Search result: </h1> 
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                    <div class="archive-post">
                        <h4>
                            <a href="<?php the_permalink( );?>">
                                <?php the_title( ) ?>
                            </a>
                        </h4>
                        <p>Posted on: <?php the_time('F j, Y g:i a'); ?></p>
                    </div> 
                <?php endwhile ; ?>
            <?php else : ?>
                <?php echo apautop('Sorry, NO post were found!') ?>
            <?php endif ; ?>
        </div>

<?php get_footer(); ?>
