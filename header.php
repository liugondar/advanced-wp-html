<!DOCTYPE html>

<html <?php language_attributes(  ) ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title( );?></title>
    <!-- bootstrap 3 -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css" type="text/css">
    <!-- fontawesome -->
    
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/font-awesome/css/font-awesome.min.css" type="text/css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <h1>
                <a href="<?php echo home_url( '/') ;?>">
                    <?php bloginfo( 'name' ) ?>
                </a>
            </h1>
            <small><?php bloginfo( 'description' ) ?></small>
            <div class="h_right" >
                <form method="get" action="<?php echo home_url('/'); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" name="s" placeholder="Search..."  />
                    </div>
                </form>
            </div>
        </div>
    </header>
    <!-- Nav bar -->
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" 
                    data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                </div>

                <a class="navbar-brand" href="<?php echo home_url('/');?>">Wordpress theme</a>
                <?php 
                    wp_nav_menu(array(
                        'theme_location'=>'primary',
                        'container'=>'nav',
                        'container_class'=>'navbar-collapse collapse',
                        'menu_class'=>'nav navbar-nav navbar-right'
                    )) 
                ?>
            </div>
        </div>
    </div>
