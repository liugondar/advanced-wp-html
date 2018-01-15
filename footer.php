
        <div class="sidebar">
            <div class="block">
                <h3>Sidebar head</h3>
                <p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has surviv</p>
                <a class="btn-success btn">More</a>
            </div>
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