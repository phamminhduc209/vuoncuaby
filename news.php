<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="{[#SITE_DESCRIPTION#]}">
	<meta name="keywords" content="{[#SITE_KEYWORDS#]}">
	<title>Tin Tức</title>
	<!-- <?php include('inc/head.php'); ?> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<?php include('inc/header.php'); ?>

	<main>
		<div class="p-mv">
            <div class="p-mv__media" style="background-image: url(assets/images/about/banner.jpg);">
            <h2 class="p-mv__ttl">Tin Tức</h2>
        </div>
        <div class="p-news p-section">
            <div class="container">
                <h1 class="hline02 mb-20">Tin tức</h1>
                <div class="lst-news">
                    <div class="lst-news__item">
                        <div class="lst-news__media">
                            <a href="#"><img src="assets/images/news/358509817_620556396514793_8544205996602447058_n.jpg" alt=""></a>
                        </div>
                        <div class="lst-news__content">
                            <h2><a href="#">Chào Mừng Quốc Tế Thiếu Nhi</a></h2>
                            <div class="lst-news__-post-meta">   
                                <span class="author">Người viết: CS CSKH</span>
                                <span class="date">7.04.2023</time></span>
                            </div>
                            <p class="entry-content">Hãy cùng BA GÁC thử thách quẩy xuyên lễ tại Sài Gòn 5 ngày 5 đêm nào anh em ơi! Mồi ngon, bia xịn, ưu...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</main>

	<?php include('inc/footer.php'); ?>
	<footer class="p-footer">
		<div class="container">
			<div class="p-footer__wrap">
				<div class="p-footer__logo">
                    <div class="logo">
                        <a href="/"><img src="assets/images/logo.png" alt=""></a>
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
                <div>
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
	
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>