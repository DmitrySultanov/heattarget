<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сформировать заказ - Начните подбор товаров</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<? include('inc/header.php'); ?>

	<? include('inc/section-intro.php'); ?>

	<div class="section-content">
		<div class="container">
			<div class="content">
				<ul class="content__nav">
					<li class="active"><span>Сформировать Заказ или КП</span></li>
					<li><span>Список всех заказов</span></li>
					<li><span>Список всех КП</span></li>
					<li><span>Список возвратов</span><span class="badge">23</span></li>
				</ul>
				<ul class="content__container">
					<li class="active">
						<div class="order-container">
							<div class="row">
								<div class="col-lg-8">
									<form action="" class="form">
										<div class="start-selection-container">
											<button type="button" class="start-selection-btn">Начните подбор товаров</button>
											<img src="assets/img/logo.png" alt=""/>
										</div>

										<div class="address-container">
											<a class="address-view js-address-view" data-toggle="collapse" href="#collapseAddressForm" aria-expanded="false" aria-controls="collapseAddressForm">Показать адрес объекта</a>
											<div class="collapse" id="collapseAddressForm">
												<div class="row">
													<div class="col-10">
														<div class="form-group">
															<p>Регион доставки:</p>
															<div>
	    														<select name="delivery-region" class="select-single" style="width: 100%;">
	    															<option value="">Белгородская область</option>
	    															<option value="">Белгородская область</option>
	    															<option value="">Белгородская область</option>
	    														</select>
															</div>
														</div>
														<div class="form-group">
															<p>Город доставки:</p>
															<div>
	    														<select name="delivery-place" class="select-single" style="width: 100%;">
	    															<option value="">Борисовка село</option>
	    															<option value="">Борисовка село</option>
	    															<option value="">Борисовка село</option>
	    														</select>
															</div>
														</div>	
														<div class="form-group">
															<div class="row no-gutters">
																<div class="col-6">
																	<p>Улица:</p>
																	<div>
		        														<select name="delivery-street" class="select-single" style="width: 100%;">
		        															<option value="">Гагарина</option>
		        															<option value="">Гагарина</option>
		        															<option value="">Гагарина</option>
		        														</select>
																	</div>
																</div>
																<div class="col-2">
																	<p>Дом:</p>
																	<div>
		        														<input type="text" name="" class="form-control onlyNumber" min="1" maxlength="3" value="12">
																	</div>
																</div>
																<div class="col-2">
																	<p>Корпус:</p>
																	<div>
		        														<input type="text" name="" class="form-control onlyNumber" min="1" maxlength="2" value="12">
																	</div>
																</div>
																<div class="col-2">
																	<p>Квартира:</p>
																	<div>
		        														<input type="text" name="" class="form-control onlyNumber" min="1" maxlength="3" value="12">
																	</div>
																</div>
															</div>
														</div>			
													</div>
												</div>
											</div>
											<div class="form-group">
												<p>Комментарий:</p>
												<input type="text" name="comment" class="form-control">
											</div>
										</div>

										<div class="buttons-container">
											<div class="row">
												<div class="col">
													<button type="submit" class="btn btn-primary">Оформить заказ</button>
													<ul>
														<li>Отправить заказ поставщику</li>
													</ul>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<button type="submit" class="btn btn-secondary">Создать КП</button>
													<ul>
														<li>Создать коммерческое предложение для Вашего клиента</li>
													</ul>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="col-lg-4">
									<? include('inc/aside.php'); ?>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<? include('inc/footer.php'); ?>
	
	<script src="assets/js/libs.min.js"></script>
	<script src="assets/js/common.js"></script>
</body>
</html>