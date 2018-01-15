<?php get_header(); ?>
    <div class="content container">
        <div class="main block">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                <article class="post">
                <a href="<?php the_permalink() ;?>">
                <h2><?php the_title( ) ?> </h2>
                </a>
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
                    <?php the_excerpt(); ?>
                </p>

                <a class="btn btn-primary" href="<?php the_permalink( );?>">Read more</a>
            </article>
                <?php endwhile ; ?>
            <?php else : ?>
                <?php echo apautop('Sorry, NO post were found!') ?>
            <?php endif ; ?>
        </div>

<?php get_footer(); ?>
