<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сформировать заказ</title>
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
										<div class="buttons-group">
											<button type="button" class="btn btn-sm btn-default btn-hide">Скрыть наценку</button>
											<button type="button" class="btn btn-sm btn-default btn-add">Добавить услугу</button>
										</div>

										<div class="order-content">
											<div class="caption">
												<div class="flex">
													<h2 class="caption__title">Товары</h2>
												</div>
											</div>
											<div class="table-wrapper-overflow">
												<table class="table table-goods fullWidth">
													<thead>
														<tr>
															<th>Фото</th>
															<th>Артикул</th>
															<th>Наименование</th>
															<th>Кол-во</th>
															<th>Цена в руб.</th>
															<th>Наценка, за шт. (для КП)</th>
															<th>Сумма с наценкой (для КП)</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
															<td>
																<? include('inc/quantitat.php'); ?>
															</td>
															<td><nobr>98 678.34</nobr></td>
															<td><nobr><div class="large">₽  /  %</div></nobr></td>
															<td><nobr>98 678.34</nobr></td>
															<td><button type="button" class="close"></button></td>
														</tr>
														<tr>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
															<td>
																<? include('inc/quantitat.php'); ?>
															</td>
															<td><nobr>98 678.34</nobr></td>
															<td>
																<div class="entryform">
																	<div class="ef-wrapper">
																		<input type="text" class="onlyNumber" name="" placeholder="00.00" min="0" maxlength="4">
																		<span class="currency">руб.</span>
																	</div>
																	<button type="button" class="close"></button>
																</div>
															</td>
															<td><nobr>98 678.34</nobr></td>
															<td><button type="button" class="close"></button></td>
														</tr>
														<tr>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
															<td>
																<? include('inc/quantitat.php'); ?>
															</td>
															<td><nobr>98 678.34</nobr></td>
															<td><nobr><div class="large">₽  /  %</div></nobr></td>
															<td><nobr>98 678.34</nobr></td>
															<td><button type="button" class="close"></button></td>
														</tr>
														<tr>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
															<td>
																<? include('inc/quantitat.php'); ?>
															</td>
															<td><nobr>98 678.34</nobr></td>
															<td><nobr><div class="large">₽  /  %</div></nobr></td>
															<td><nobr>98 678.34</nobr></td>
															<td><button type="button" class="close"></button></td>
														</tr>
														<tr>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
															<td>
																<? include('inc/quantitat.php'); ?>
															</td>
															<td><nobr>98 678.34</nobr></td>
															<td><nobr><div class="large">₽  /  %</div></nobr></td>
															<td><nobr>98 678.34</nobr></td>
															<td><button type="button" class="close"></button></td>
														</tr>
													</tbody>
												</table>
											</div>
											<nav aria-label="table-goods-navigation">
											  <ul class="pagination">
											    <li class="page-item"><a class="page-link" href="#">1</a></li>
											    <li class="page-item"><a class="page-link" href="#">2</a></li>
											    <li class="page-item active"><a class="page-link" href="#">3</a></li>
											    <li class="page-item"><a class="page-link" href="#">4</a></li>
											    <li class="page-item"><a class="page-link" href="#">5</a></li>
											    <li class="page-item"><a class="page-link" href="#">6</a></li>
											  </ul>
											</nav>

											<div class="caption">
												<div class="flex">
													<h2 class="caption__title">Услуги</h2>
												</div>
											</div>
											<div class="table-wrapper-overflow">
												<table class="table table-services fullWidth">
													<thead>
														<tr>
															<th>Наименование</th>
															<th>Кол-во</th>
															<th>Цена в руб.</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Наименование добавленной услуги</td>
															<td>
																<? include('inc/quantitat.php'); ?>
															</td>
															<td><nobr>98 678.34</nobr></td>
															<td><button type="button" class="close"></button></td>
														</tr>
														<tr>
															<td>Наименование добавленной услуги</td>
															<td>
																<? include('inc/quantitat.php'); ?>
															</td>
															<td><nobr>98 678.34</nobr></td>
															<td><button type="button" class="close"></button></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

										<div class="buttons-group">
											<button type="button" class="btn btn-sm btn-default btn-hide">Скрыть наценку</button>
											<button type="button" class="btn btn-sm btn-default btn-add">Добавить услугу</button>
										</div>

										<div class="cost-container">
											<div class="cost-column">
												<p>Стоимость товаров: <strong>115 201,33 руб.</strong></p>
												<p>Стоимость услуг: <strong>2000 руб.</strong></p>
												<p>Сумма наценки на товар: <strong>2000 руб.</strong></p>
												<p class="total-cost">Общая стоимость: <strong>125 201,33 руб.</strong></p>
											</div>
											<div class="cost-column">
												<p><span>Вес: <strong>103 кг</strong></span></p>
											</div>
											<div class="cost-column">
												<p><span>Объем: <strong>10 м3</strong></span></p>
											</div>
										</div>

										<div class="address-container">
											<a class="address-view js-address-view" data-toggle="collapse" href="#collapseAddressForm" aria-expanded="false" aria-controls="collapseAddressForm">Показать адрес объекта</a>
											<div class="collapse" id="collapseAddressForm">
												<div class="row">
													<div class="col-10">
														<div class="form-group">
															<p>Регион доставки:</p>
															<div class="flex">
	    														<select name="delivery-region" class="select-single" style="width: 100%;">
	    															<option value="">Белгородская область</option>
	    															<option value="">Белгородская область</option>
	    															<option value="">Белгородская область</option>
	    														</select>
															</div>
														</div>
														<div class="form-group">
															<p>Город доставки:</p>
															<div class="flex">
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
																	<div class="flex">
		        														<select name="delivery-street" class="select-single" style="width: 100%;">
		        															<option value="">Гагарина</option>
		        															<option value="">Гагарина</option>
		        															<option value="">Гагарина</option>
		        														</select>
																	</div>
																</div>
																<div class="col-2">
																	<p>Дом:</p>
																	<div class="flex">
		        														<input type="text" name="" class="form-control onlyNumber" min="1" maxlength="3" value="12">
																	</div>
																</div>
																<div class="col-2">
																	<p>Корпус:</p>
																	<div class="flex">
		        														<input type="text" name="" class="form-control onlyNumber" min="1" maxlength="2" value="12">
																	</div>
																</div>
																<div class="col-2">
																	<p>Квартира:</p>
																	<div class="flex">
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
												<div class="flex">
													<input type="text" name="comment" class="form-control">
												</div>
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