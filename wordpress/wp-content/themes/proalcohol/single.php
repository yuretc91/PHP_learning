<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proalcohol
 */

get_header();
?>

    <main>
        <div class="uk-container uk-container-small">
            <div class="article">
                <ul class="uk-breadcrumb">
                    <li><a href="">Главная</a></li>
                    <li><a href="">Статьи</a></li>
                    <li><span href="">Десять вкусных и полезных обедов на всю неделю</span></li>
                </ul>
                <div class="pre-text">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <!--<h2>Как убрать живот с помощью правильного питания</h2>-->
                        <h2><?=the_title();?></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi aliquam minima fugiat distinctio quas odit dicta placeat accusantium tempore, dignissimos, voluptates voluptate? Assumenda, delectus. Nihil delectus.</p>
                        <img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                        <?php
                    endwhile; // End of the loop.

                    ?>
                </div>
            </div>
        </div>
        <div class="uk-container uk-container-small">
            <article class="uk-article">
                <p class="uk-article-meta">Автор <a href="#">Super User</a></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3>1. Lorem ipsum dolor sit amet</h3>
                <p><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class=""></p>
            </article>
        </div>
    </main>
    <div class="uk-section uk-section-small news news-inner">
        <div class="uk-container uk-container-small">
            <h1 class="uk-heading-line uk-text-center"><span>Другие статьи</span></h1>
            <div class="uk-child-width-1-4@m uk-grid-match uk-grid-small" uk-grid>
                <div>
                    <div class="uk-card">
                        <p><a href="#"><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                                Lorem ipsum dolor sit amet casdadadasd</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <p><a href=""><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                                Lorem ipsum dolor sit amet casdadadasd</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <p><a href=""><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                                Lorem ipsum dolor sit amet</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <p><a href=""><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                                Lorem ipsum dolor sit amet</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <p><a href=""><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                                Lorem ipsum dolor sit amet jhgsdjfjjhgs</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <p><a href=""><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                                Lorem ipsum dolor sit amet</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <p><a href=""><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                                Lorem ipsum dolor sit amet jhgsdjfjjhgs</a></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card">
                        <p><a href=""><img src="<?=get_template_directory_uri();?>/template/images/slider.jpg" alt="" class="">
                                Lorem ipsum dolor sit amet</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
//get_sidebar();
get_footer();
