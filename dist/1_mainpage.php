<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Теплоцель</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<div class="header-wrapper">
		<header class="header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3">
						<a class="header__logo" href="#"><img src="assets/img/logo.png" alt=""/></a>
					</div>
					<div class="col-lg-3">
						<div class="header__currencies">
							<div class="currency currency-usd currency-stonks-up">$ <span>75.09</span></div>
							<div class="currency currency-eur currency-stonks-down">€ <span>90.47</span></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-8">
								<div class="header__user">
									<div class="header__user-picture"></div>
									<div class="header__user-content">
										<div class="header__user-name">Ноябрьская Екатерина Владимировна ИП</div>
										<a href="#" class="logout-btn">Выход</a>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="button-wrapper">
									<a href="#" class="btn btn-orange">Скачать прайс</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>

	<div class="section-intro">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-2">
					<ul class="navigation">
						<li class="navigation-item navigation-item--has-submenu">
							<a href="#">Каталог</a>
						</li>
						<li class="navigation-item navigation-item--has-submenu">
							<a href="#">Доставка</a>
						</li>
						<li class="navigation-item navigation-item--has-submenu">
							<a href="#">Акции</a>
						</li>
						<li class="navigation-item navigation-item--has-submenu">
							<a href="#">Компания</a>
						</li>
						<li class="navigation-item navigation-item--has-submenu">
							<a href="#">Контакты</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-10">
					<div class="js-swiper-banners">
						<div class="swiper-container">
						  	<div class="swiper-wrapper">
							    <div class="swiper-slide">
							    	<a href="#"><img src="assets/img/banner_ico1.png" alt=""/></a>
							    </div>
							    <div class="swiper-slide">
							    	<a href="#"><img src="assets/img/banner_ico1.png" alt=""/></a>
							    </div>
							    <div class="swiper-slide">
							    	<a href="#"><img src="assets/img/banner_ico1.png" alt=""/></a>
							    </div>
						  	</div>
						</div>
					  	<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-content">
		<div class="container">
			<div class="content-paper">
				
			</div>
		</div>
	</div>
	
	<script src="assets/js/libs.min.js"></script>
	<script src="assets/js/common.js"></script>
</body>
</html>