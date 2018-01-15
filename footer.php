
        <div class="sidebar">
            <?php if(is_active_sidebar( 'sidebar' )): ?>
                <?php dynamic_sidebar( 'sidebar' ) ?>
            <?php endif; ?>

        </div>
    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="f_left">
                <p>&copy; 2018-gondar</p>
            </div>

            <div class="f_right">
                <?php 
                    wp_nav_menu( array(
                        'theme_location'=>'footer',
                        'menu_class'=>'nav navbar-nav navbar-right'
                    ) ) 
                ?>
            </div>
        </div>
    </footer>
</body>

<?php wp_footer(); ?>
</html>