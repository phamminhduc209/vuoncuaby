<?php

/**
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
$page_detail = true;
get_header();
?>
<main id="primary" class="site-main">
	<div class="p-mv wow">
		<div class="p-mv__media" style="background-image: url(assets/images/about/banner.jpg);"></div>
		<h2 class="p-mv__ttl">Tin Tức</h2>
	</div>

	<div class="p-news">
		<div class="container">
			<div class="lst-card">
				<?php if (have_posts()) :
					while (have_posts()) :
						the_post();
						$title = get_the_title();
						$image = get_the_post_thumbnail_url();
						$link = get_permalink();
				?>
						<div class="lst-card__item">
							<a href="<?php echo $link; ?>" class="news-box">
								<div class="media">
									<img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
								</div>
								<div class="news-content">
									<h2 class="ttl"><?php echo $title; ?></h2>
									<div class="txt"><?php the_excerpt(); ?></div>
									<!-- <p class="text-right">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/clock.png" alt="">
										<span><?php echo get_the_date(); ?></span>
									</p> -->
								</div>
							</a>
						</div>
				<?php endwhile;
				endif; ?>
			</div>
			<?php wp_pagenavi(); ?>
		</div>
	</div>
</main>
<?php
get_footer();
