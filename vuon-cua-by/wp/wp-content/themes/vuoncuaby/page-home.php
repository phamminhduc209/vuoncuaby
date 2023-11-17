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

    <div class="p-prd">
			<div class="p-prd__wrap">
				<div class="container">
					<div class="p-prd__col --menu">
						<h2 class="hline03 font-500">THỰC ĐƠN CỦA CHÚNG TÔI</h2>
						<div class="lst-menu">
							<div class="lst-menu__item">
								<div class="media">
									<a href="products.html">
										<img src="assets/images/products/img_3873-1_ee2bcc7639324c8a94a7c11d4d6b698a_grande.webp" class="full-image" alt="Ốc Hương Pháp">
									</a>
								</div>
								<div class="content">
									<h2 class="ttl"><a href="products.html">ỐC HƯƠNG PHÁP 100G</a></h2>
									<p class="txt-note">Tối thiếu 300g</p>
								</div>
								<p class="lst-menu__price">81.000đ</p>
							</div>
							<div class="lst-menu__item">
								<div class="media">
									<a href="products.html">
										<img src="assets/images/products/img_3873-1_ee2bcc7639324c8a94a7c11d4d6b698a_grande.webp" class="full-image" alt="Ốc Hương Pháp">
									</a>
								</div>
								<div class="content">
									<h2 class="ttl"><a href="products.html">ỐC HƯƠNG PHÁP 100G</a></h2>
									<p class="txt-note">Tối thiếu 300g</p>
								</div>
								<p class="lst-menu__price">81.000đ</p>
							</div>
							<div class="lst-menu__item">
								<div class="media">
									<a href="products.html">
										<img src="assets/images/products/img_3873-1_ee2bcc7639324c8a94a7c11d4d6b698a_grande.webp" class="full-image" alt="Ốc Hương Pháp">
									</a>
								</div>
								<div class="content">
									<h2 class="ttl"><a href="products.html">ỐC HƯƠNG PHÁP 100G</a></h2>
									<p class="txt-note">Tối thiếu 300g</p>
								</div>
								<p class="lst-menu__price">81.000đ</p>
							</div>
							<div class="lst-menu__item">
								<div class="media">
									<a href="products.html">
										<img src="assets/images/products/img_3873-1_ee2bcc7639324c8a94a7c11d4d6b698a_grande.webp" class="full-image" alt="Ốc Hương Pháp">
									</a>
								</div>
								<div class="content">
									<h2 class="ttl"><a href="products.html">ỐC HƯƠNG PHÁP 100G</a></h2>
									<p class="txt-note">Tối thiếu 300g</p>
								</div>
								<p class="lst-menu__price">81.000đ</p>
							</div>
							<div class="lst-menu__item">
								<div class="media">
									<a href="products.html">
										<img src="assets/images/products/img_3873-1_ee2bcc7639324c8a94a7c11d4d6b698a_grande.webp" class="full-image" alt="Ốc Hương Pháp">
									</a>
								</div>
								<div class="content">
									<h2 class="ttl"><a href="products.html">ỐC HƯƠNG PHÁP 100G</a></h2>
									<p class="txt-note">Tối thiếu 300g</p>
								</div>
								<p class="lst-menu__price">81.000đ</p>
							</div>
						</div>
						<div><a href="tel:+0979166661" class="btn btn-order mt-30">Xem tất cả</a></div>
					</div>
					<div class="p-prd__col --booking">
						<div class="time-work">
							<h2 class="hline03 font-500 txt-white">GỌI ĐẶT BÀN</h2>
							<p class="time-work__des">Chúng tôi có một loạt thực đơn về các món nướng BBQ sẵn sàng làm siêu lòng những gangsta sành ăn cùng menu đồ uống đa dạng để tăng sự trải nghiệm các cung bậc cảm xúc khác nhau.<br><br>Ngoài phục vụ các món nướng BBQ, chúng tôi còn có thực đơn dành cho những tín đồ đam mê món Nhật với set Sashimi hoành tráng chiều lòng thực khách.<br><br>Chắc chắn ngoài sự ngon miệng từ món ăn, sự thoải mái thông qua không gian và cách phục vụ, các nguyên liệu được chúng tôi sử dụng đều tươi mới và tốt cho sức khỏe của bạn. </p>
							<div class="time-work__box">
								<div class="time-work__icon">
									<img src="//theme.hstatic.net/200000542971/1000913900/14/img_home_main_order_right_2.png?v=416" alt="THỜI GIAN NHÀ HÀNG MỞ CỬA">
								</div>
								<div class="time-work__content">
									<h4>THỜI GIAN NHÀ HÀNG MỞ CỬA</h4>
									<p><strong>Thứ 2 đến Chủ Nhật<br>11:00 AM - 23:59 PM</strong></p>
								</div>
							</div>
							<div><a href="tel:+0979166661" class="btn btn-order">Gọi đặt bàn</a></div>
						</div>
					</div>
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
            <?php 
                $the_query = new WP_Query(['category_name' => 'tin-tuc', 'posts_per_page' => 4]);
                if ( $the_query->have_posts() ) {
                    echo '<div class="lst-card">';
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        echo '<div class="lst-card__item">';
                            echo '<a href=" ' . get_permalink() . ' " class="news-box">';
                                echo '<div class="media"><img src=" ' . get_the_post_thumbnail_url() . ' " alt=""></div>';
                                echo '<div class="news-content">';
                                    echo '<h2 class="ttl">' . get_the_title() . '</h2>';
                                    echo '<div class="txt">' . get_the_excerpt() . '</div>';
                                echo '</div>';
                            echo '</a>';
                        echo '</div>';
                    }
                    echo '</div>';
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    echo 'No posts found';
                }
            ?>
        </div>
    </div>

</main><!-- #main -->

<?php
get_footer();
