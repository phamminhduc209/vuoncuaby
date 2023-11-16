<?php

/**
 * Template Name: Page Home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vuoncuaby
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="p-mainvisual swiper js-slider">
        <div class="swiper-wrapper">
            <?php
                $sliders = get_field('banner');
                foreach ($sliders as $slider) :
            ?>
                <div class="swiper-slide">
                    <div style="background-image:url('<?php echo $slider['image']; ?>');"></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="p-about">
        <div class="container">
            <div class="p-about__wrap">
                <?php
                    $about = get_field('about');
                    foreach ($about as $whyItem) :
                    ?>
                    <div class="p-about__video">
                        <iframe width="100%" height="100%" src="<?php echo $whyItem['url']; ?>" title="VuonCuaBy - For example" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="p-about__content">
                        <h2 class="hline02 font-500"><?php echo $whyItem['title']; ?></h2>
                        <p class="p-about__txt"><?php echo $whyItem['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="p-album">
        <div class="container">
            <h2 class="hline02 text-center font-500 mb-50">Hình Ảnh</h2>
        </div>
        <div class="p-album__loop swiper">
            <div class="swiper-wrapper">
                <?php
                    $gallarys = get_field('gallary');
                    foreach ($gallarys as $gallary) :
                ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $gallary['image']; ?>" class="full-image" alt="<?php echo $gallary['caption']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="p-news">
        <div class="container">
            <h2 class="hline02 font-500">Tin Tức</h2>
            <div class="lst-card">
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        $title = get_the_title();
                        $image = get_the_post_thumbnail_url();
                        $link = get_permalink();
                ?>
                        <div class="lst-card__item">
                            <a href="<?php echo $link; ?>">
                                <div class="media">
                                    <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                                </div>
                                <div class="news-content">
                                    <h2 class="ttl"><?php echo $title; ?></h2>
                                    <div class="txt"><?php the_excerpt(); ?></div>
                                    <!-- <p class="news-date text-right">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/clock.png" alt="">
                                        <span><?php echo get_the_date(); ?></span>
                                    </p> -->
                                </div>
                            </a>
                            </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
