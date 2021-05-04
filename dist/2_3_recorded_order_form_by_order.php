<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Форма записанного заказа под заказ</title>
	<? include('inc/head.php'); ?>
</head>
<body>
	<? include('inc/header.php'); ?>

	<? include('inc/section-intro.php'); ?>

	<div class="section-content">
		<div class="container">
			<div class="content">
				<ul class="content__nav">
					<li><span>Сформировать Заказ или КП</span></li>
					<li class="active"><span>Список всех заказов</span></li>
					<li><span>Список всех КП</span></li>
					<li><span>Список возвратов</span><span class="badge">23</span></li>
				</ul>
				<ul class="content__container">
					<li></li>
					<li class="active">
						<div class="row">
							<div class="col-lg-7">
								<div class="order-container">
									<form action="" class="form">

										<div class="order-content">
											<div class="caption">
												<div class="flex">
													<h2 class="caption__title">Заказ №235235235</h2>
													<div class="caption__status-order caption__status-in-processing">В обработке</div>
												</div>
												<div class="caption__status-stock caption__status-stock_absence">под заказ</div>
											</div>
											<div class="table-wrapper-overflow">
												<table class="table table-goods">
													<colgroup>
														<col>
														<col>
														<col width="180">
													</colgroup>
													<thead>
														<tr>
															<th>Фото</th>
															<th>Артикул</th>
															<th>Наименование</th>
															<th>Кол-во</th>
															<th>Цена в руб.</th>
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
														</tr>
													</tbody>
												</table>
											</div>
										</div>

										<div class="cost-container">
											<div class="cost-column">
												<p>Стоимость товаров: <strong>115 201,33 руб.</strong></p>
												<p class="total-cost">Общая стоимость: <strong>125 201,33 руб.</strong></p>
											</div>
											<div class="cost-column">
												<p><span>Вес: <strong>103 кг</strong></span></p>
											</div>
											<div class="cost-column">
												<p><span>Объем: <strong>10 м3</strong></span></p>
											</div>
										</div>

										<div class="buttons-container">
											<div class="row">
												<div class="col">
													<button type="submit" class="btn btn-primary">Распечатать</button>
												</div>
											</div>
										</div>

										<div class="buttons-group">
											<button type="button" class="btn btn-sm btn-default">Оплатить</button>
											<button type="button" class="btn btn-sm btn-default">Отменить</button>
											<button type="button" class="btn btn-sm btn-default">Создать новый копированием</button>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="table-wrapper-overflow">
									<table class="table table-list-orders">
										<thead>
											<tr>
												<th>Номер</th>
												<th>Дата создания</th>
												<th>Сумма в руб.</th>
												<th class="center">Оплата</th>
												<th class="center">Статус</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-denied"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-reserve status-dot">В резерве</span></td>
											</tr>
										</tbody>
									</table>
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