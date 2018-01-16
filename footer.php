
    <div class="clr"></div>
    <footer class="main-footer">
        <div class="container">
            <div class="f_left">
                <p>&copy; 2018-gondar</p>
            </div>
            <button onclick="topFunction()" class="btn btn-success f_right " id="myBtn" title="Go to top">Top</button>

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
    <script src="<?php bloginfo( 'stylesheet_directory' );?>/js/custom.js"></script>
</html>