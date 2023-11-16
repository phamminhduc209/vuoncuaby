<?php

/**
 * Template Name: Page About
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
$page_about = true;
get_header();
?>

<main id="primary" class="site-main">
    <div class="p-mv wow">
    <?php if (have_posts()) :
			while (have_posts()) :
				the_post();
				$title = get_the_title();
				$image = get_the_post_thumbnail_url();
		?>
		<div class="p-mv__media" style="background-image: url(<?php echo $image; ?>);"></div>
		<h2 class="p-mv__ttl"><?php echo $title; ?></h2>
		<?php endwhile;
	endif; ?>
    </div>

    <div class="p-about p-section">
        <div class="container">
            <h1 class="hline02 text-center mb-20">Giới thiệu Vườn Của By</h1>
            <div class="p-content">
                <p><strong>Tiêu Đề</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis maxime itaque eaque fuga accusantium debitis repudiandae id excepturi quam totam dignissimos vel consequatur quibusdam eligendi placeat est, incidunt aut?<br><br><strong>Tiêu Đề</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis maxime itaque eaque fuga accusantium debitis repudiandae id excepturi quam totam dignissimos vel consequatur quibusdam eligendi placeat est, incidunt aut?<br><br><strong>Tiêu Đề</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis maxime itaque eaque fuga accusantium debitis repudiandae id excepturi quam totam dignissimos vel consequatur quibusdam eligendi placeat est, incidunt aut?<br><br><strong>Tiêu Đề</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis maxime itaque eaque fuga accusantium debitis repudiandae id excepturi quam totam dignissimos vel consequatur quibusdam eligendi placeat est, incidunt aut?</p><br><br>
                <p><img src="assets/images/about/watermelon-g86b5c79c2_1920.jpg" alt=""></p><br><br>
                <p><strong>Tiêu Đề</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis maxime itaque eaque fuga accusantium debitis repudiandae id excepturi quam totam dignissimos vel consequatur quibusdam eligendi placeat est, incidunt aut?<br><br><strong>Tiêu Đề</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis maxime itaque eaque fuga accusantium debitis repudiandae id excepturi quam totam dignissimos vel consequatur quibusdam eligendi placeat est, incidunt aut?<br><br><strong>Tiêu Đề</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis maxime itaque eaque fuga accusantium debitis repudiandae id excepturi quam totam dignissimos vel consequatur quibusdam eligendi placeat est, incidunt aut?<br><br><strong>Tiêu Đề</strong><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit officiis maxime itaque eaque fuga accusantium debitis repudiandae id excepturi quam totam dignissimos vel consequatur quibusdam eligendi placeat est, incidunt aut?</p>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
