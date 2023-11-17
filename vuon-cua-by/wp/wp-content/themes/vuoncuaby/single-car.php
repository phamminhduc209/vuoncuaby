<?php

/**
 * Template Name: Page Detail
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Thanhcongcar
 */
$page_detail = true;
get_header();
?>
<main id="primary" class="site-main">
    <div class="detail">
        <div class="container">
            <div class="detail-row">
                <div class="detail-left">
                    <div class="detail-head">
                        <div class="detail-media">
                            <div id="mainCarousel" class="carousel">
                                <?php $sliders = get_field('image_list');
                                foreach ($sliders as $sliderItem) :
                                ?>
                                    <div class="carousel__slide" data-src="<?php echo $sliderItem['url'] ?>" data-fancybox="gallery"">
                                        <img src=" <?php echo $sliderItem['url'] ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div id="thumbCarousel" class="carousel">
                                <?php foreach ($sliders as $sliderItem) : ?>
                                    <div class="carousel__slide">
                                        <img class="panzoom__content" src="<?php echo $sliderItem['url']; ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="detail-content">
                        <div class="detail-box">
                            <h3 class="detail-box__ttl">TÍNH NĂNG</h3>
                            <table class="table">
                                <tr>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/gas-station.png" alt="Xăng">
                                            </span>
                                            <span>Nhiên liệu</span>
                                        </div>
                                    </th>
                                    <td><?php echo get_field('nhien_lieu'); ?></td>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/piston.png" alt="1.5L">
                                            </span>
                                            <span>Động Cơ</span>
                                        </div>
                                    </th>
                                    <td><?php echo get_field('dong_co'); ?></td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/gear-shift.png" alt="Số tự động">
                                            </span>
                                            <span>Truyền động</span>
                                        </div>
                                    </th>
                                    <td><?php echo get_field('truyen_dong1'); ?></td>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/car-seat.png" alt="5 chỗ">
                                            </span>
                                            <span>Số ghế</span>
                                        </div>
                                    </th>
                                    <td><?php echo get_field('so_ghe1'); ?> chỗ</td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/air-conditioning.png" alt="Máy Lạnh">
                                            </span>
                                            <span>Điều hòa (A/C)</span>
                                        </div>
                                    </th>
                                    <td><?php yes_no_field('dieu_hoa'); ?></td>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/route.png" alt="Định vị (GPS)">
                                            </span>
                                            <span>Định vị (GPS)</span>
                                        </div>
                                    </th>
                                    <td><?php yes_no_field('gps'); ?></td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/bluetooth.png" alt="bluetooth">
                                            </span>
                                            <span>bluetooth</span>
                                        </div>
                                    </th>
                                    <td><?php yes_no_field('bluetooth'); ?></td>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/usb.png" alt="Khe cắm USB">
                                            </span>
                                            <span>Khe cắm USB</span>
                                        </div>
                                    </th>
                                    <td><?php yes_no_field('usb'); ?></td>
                                </tr>
                            </table>
                        </div>

                        <div class="detail-box">
                            <h3 class="detail-box__ttl">THỦ TỤC</h3>
                            <table class="table">
                                <tr>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/id-card.png" alt="CMND">
                                            </span>
                                            <span>CMND</span>
                                        </div>
                                    </th>
                                    <td><?php yes_no_field('cmnd'); ?></td>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/passport.png" alt="Sổ hộ khẩu">
                                            </span>
                                            <span>Sổ hộ khẩu</span>
                                        </div>
                                    </th>
                                    <td><?php yes_no_field('shk'); ?></td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/license.png" alt="Bằng Lái">
                                            </span>
                                            <span>Bằng lái</span>
                                        </div>
                                    </th>
                                    <td><?php yes_no_field('bang_lai'); ?></td>
                                    <th>
                                        <div class="ic">
                                            <span class="ic-icon">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/banknotes.png" alt="Đặt cọc">
                                            </span>
                                            <span>Đặt cọc</span>
                                        </div>
                                    </th>
                                    <td><?php yes_no_field('dat_coc'); ?></td>
                                </tr>
                            </table>
                        </div>

                        <div class="detail-box">
                            <h3 class="detail-box__ttl">GHI CHÚ</h3>
                            <div class="detail-box__content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-right">
                    <div class="js-sidebar">
                        <div class="detail-wrap">
                            <h2 class="detail-info__ttl"><?php echo mb_strtoupper(get_the_title(), 'utf-8'); ?></h2>
                            <div class="detail-info__price"><span class="promo-price"><?php echo get_field('gia'); ?> <i class="ng-tns-c3-0">đ/ngày</i></span></div>
                            <div class="form">
                                <h2 class="form-ttl">ĐẶT XE ONLINE</h2>
                                <div class="form">
                                    <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
