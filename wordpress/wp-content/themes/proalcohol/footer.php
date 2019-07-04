<footer>
    <div class="uk-container">
        <div class="uk-grid uk-child-width-expand" uk-grid>
            <div>
                <h3 class="footer-logo">Proalcohol.com</h3>
                <p>Proalcohol — Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorem cum reiciendis nam magni nemo totam, repellat sint, quaerat autem alias eaque quod officiis ipsam. Voluptatibus, voluptatem dolores dolorem iure!</p>
                <p class="copy">© Proalcohol, 2017</p>
            </div>
            <div class="uk-text-right">
                <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="icon: google"></a>
                <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="icon: facebook"></a>
                <a href="" class="uk-icon-button" uk-icon="icon: instagram"></a>
            </div>
            <?php
/*            $socialIcons = ['google' => 'https://www.google.com','facebook' => 'https://www.facebook.com','instagram' => 'https://www.instagram.com'];
            foreach ($socialIcons as $key => $value){
                wp_nav_menu(array(
                    'menu_class' => 'uk-text-right',
                    'theme_location' => 'social-menu',
                    'items_wrap' => '<a href="' . $value . '" class="uk-icon-button uk-margin-small-right" uk-icon="icon: ' . $key . '"></a>'
                ));
            };

            */?>
        </div>
    </div>
    <nav class="uk-navbar-container uk-navbar-transparent uk-margin-top uk-navbar">
        <div class="uk-navbar-center">

            <?php
            wp_nav_menu(array(
                'menu_class' => 'uk-navbar-nav',
                'theme_location' => 'footer-menu',
                'container' => 'ul'
            ))
            ?>
        </div>
    </nav>
</footer>

<!-- jQuery -->
<script src="<?=get_template_directory_uri();?>/assets/jquery-1.11.2/jquery-1.11.2.min.js"></script>

<!-- Ui kit -->
<script src="<?=get_template_directory_uri();?>/assets/uikit-3.0.0-beta.12/js/uikit.min.js"></script>

</body>
<?php
wp_footer();
?>
</html>