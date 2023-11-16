<?php

/**
 * Template Name: Page Contact
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
$page_contact = true;
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
	
	<div class="p-contact">
		<div class="p-contact__map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7804.962939869429!2d107.51527574445058!3d12.010338696906011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3173bb06b490add1%3A0xb6185e1d5759b903!2zSOG7kyDEkMSDayBSJ1Rhbmc!5e0!3m2!1svi!2s!4v1688783922788!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="p-contact__content">
			<div class="p-address">
				<h2 class="hline02 text-center mb-20">Địa Chỉ</h2>
				<div class="p-address__content">
					<p>Vườn Của By</p>
					<p>Hồ Đak Ton - Lê Trọng Tấn</p>
					<p><a href="tel:+0979166661">097 916 66 61</a></p>
				</div>
			</div>
			<div class="p-contact__form mt-25 mt-md-50">
				<h2 class="hline02 text-center mb-20">Liên Hệ &amp; Đặt Bàn</h2>
				<form action="" class="p-form">
					<div class="p-form__row">
						<input type="text" class="form-control" placeholder="Tên của bạn">
					</div>
					<div class="p-form__row --flex">
						<div><input type="text" class="form-control" placeholder="Email của bạn"></div>
						<div><input type="text" class="form-control" placeholder="Số điện thoại của bạn"></div>
					</div>
					<div class="p-form__row --flex">
						<div><input type="text" name="date" data-toggle="datepicker" class="form-control datepicker" placeholder="Ngày đặt bàn"></div>
						<div>
							<select name="" id="" class="form-control">
								<option value="16">16 giờ</option>
								<option value="16">17 giờ</option>
								<option value="16">18 giờ</option>
								<option value="16">19 giờ</option>
								<option value="16">20 giờ</option>
								<option value="16">21 giờ</option>
								<option value="16">22 giờ</option>
							</select>
						</div>
						<div>
							<select name="" id="" class="form-control">
								<option value="16">00 phút</option>
								<option value="16">15 phút</option>
								<option value="16">30 phút</option>
								<option value="16">45 phút</option>
							</select>
						</div>
					</div>
					<div class="p-form__row">
						<select name="" id="" class="form-control">
							<option value="">Số lượng khách</option>
							<option value="1">1 khách</option>
							<option value="1">2 khách</option>
							<option value="1">3 khách</option>
							<option value="1">4 khách</option>
							<option value="1">5 khách</option>
							<option value="1">6 khách</option>
							<option value="1">7 khách</option>
							<option value="1">8 khách</option>
							<option value="1">9 khách</option>
						</select>
					</div>
					<div class="p-form__row">
						<textarea name="" id="" class="form-control --textarea" placeholder="Nội dung"></textarea>
					</div>
					<div class="p-form__row">
						<button type="submit" class="btn btn-primary">Gửi</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
