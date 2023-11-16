<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vuoncuaby
 */

?>

<footer class="p-footer">
		<div class="container">
			<div class="p-footer__wrap">
				<div class="p-footer__logo">
					<div class="logo">
						<a href="index.html"><img src="assets/images/logo.png" alt=""></a>
					</div>
					<p class="mt-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, modi? Ipsum animi amet magni non, quis eveniet quibusdam voluptate eligendi fugiat harum laudantium, itaque optio minus, quas eum culpa pariatur?</p>
				</div>
				<div class="p-footer__menu">
					<h2 class="p-footer__title">Thông Tin Liên Hệ</h2>
					<ul class="menu">
						<li class="menu-item"><a href="#">Trang chủ</a></li>
						<li class="menu-item"><a href="about.html">Giới thiệu</a></li>
						<li class="menu-item"><a href="menu.html">Menu</a></li>
						<li class="menu-item"><a href="news.html">Tin tức</a></li>
						<li class="menu-item"><a href="book.html">Đặt bàn</a></li>
						<li class="menu-item"><a href="contact.html">Liên hệ</a></li>
					</ul>
				</div>
				<div class="p-footer__fanpage">
					<h2 class="p-footer__title">Fanpage</h2>
					<div class="fb-page" 
						data-href="https://www.facebook.com/profile.php?id=100091454086761"
						data-width="380" 
						data-hide-cover="false"
						data-show-facepile="false">
					</div>
				</div>
			</div>
			<p class="p-footer__copyright">© Vườn Của By</p>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://sp.zalo.me/plugins/sdk.js"></script>

</body>

</html>