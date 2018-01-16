<?php get_header(); ?>
    <div class="content container">
        <div class="main block">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                <article class="post">
                <h2><?php the_title( ) ?> </h2>
                <div class="meta">
                    Posted at <?php the_date('F j, Y g:i a'); ?> by 
                    <a style="color:#fff" href="<?php echo get_author_posts_url( get_the_author_id()); ?> " >
                        <?php the_author( ) ?> 
                    </a>
                    Posted in
                    <?php 
                        $categories=get_the_category(  ) ;
                        $separator=", ";
                        $output='';
                        if($categories){
                            foreach($categories as $category){
                                $output.= '<a href="'.get_category_link($category->term_id)
                                .'">'. $category->cat_name.'</a>'.$separator;
                            }
                        }

                        echo trim($output,$separator);
                    ?>
                </div>
                <p>
                    <?php if(has_post_thumbnail() ) :?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('full' ) ?>
                        </div>
                    <?php endif ; ?>
                    <?php the_content(); ?>
                </p>

            </article>
                <?php endwhile ; ?>
            <?php else : ?>
                <?php echo apautop('Sorry, NO post were found!') ?>
            <?php endif ; ?>
            <?php comments_template( ); ?>
        </div>
            <?php get_sidebar(); ?>
   </div>

<?php get_footer(); ?>
