<!-- 
    Template Name: About page
 -->
<?php get_header(); ?>
<?php $phone_number=get_field('phone_company') ;
        $description=get_field('description');
?>
    <div class="content container">
        <div class="main block">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                    <article class="page">
                        <h1><?php the_title(); ?></h1>
                        <?php if($phone_number): ?>
                        <div class="well">
                            Company Phone: <?php echo $phone_number; ?> 
                        </div>
                        <?php endif ; ?>
                        
                        <?php if($description): ?>
                            <div><?php echo $description ?></div>
                        <?php endif ; ?>
                        <p><?php the_content(); ?></p>
                    </article>
                <?php endwhile ; ?>
            <?php else : ?>
                <?php echo apautop('Sorry, NO post were found!') ?>
            <?php endif ; ?>
        </div>

<?php get_footer(); ?>
