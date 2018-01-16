<?php get_header(); ?>
    <div class="content container">
        <div class="main block">
            <h1 class="page-header">
                <?php 
                    if(is_category()){
                        single_cat_title(   );
                    } else if(is_author()){
                        the_post();
                        echo 'Archives by author: ' .get_the_author();
                        rewind_posts();
                    } else if(is_tag()){
                        single_tag_title( );
                    }else if(is_day()){
                        echo 'Archives by day: ' .get_the_date();
                    }else if(is_month()){
                        echo 'Archives by month: ' .get_the_date('F Y');
                    }else if(is_year()){
                        echo 'Archives by year: ' .get_the_date('Y');
                    }else{
                        echo 'Archives';
                    }
                ?> 
            </h1>

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
