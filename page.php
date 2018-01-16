<?php get_header(); ?>
    <div class="content container">
        <div class="main block">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                    <article class="page">
                        <?php if((page_is_parent()|| $post->post_parent)>0) : ?>
                        <nav class="nav sub-nav">
                            <ul class="list-inline">
                                <li>
                                <span class="parent-link">
                                    <a href="<?php echo get_the_permalink( get_top_parent());?>" > 
                                        <?php echo get_the_title(get_top_parent()); ?>
                                    </a>
                                </span>
                                </li>
                                <li >
                                <?php $args=array(
                                    'child_of' => get_top_parent(),
                                    'title_li' => ''
                                ); ?>
                                <?php wp_list_pages($args); ?>
                                </li>
                            </ul>
                        </nav>
                        <?php endif ; ?>
                        <div class="clr"></div>
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    </article>
                <?php endwhile ; ?>
            <?php else : ?>
                <?php echo apautop('Sorry, NO post were found!') ?>
            <?php endif ; ?>
        </div>

<?php get_footer(); ?>
