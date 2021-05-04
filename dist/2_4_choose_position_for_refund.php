<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Выберите позиции для возврата</title>
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
												</div>
												<p>Выберите позиции для возврата:</p>
											</div>
											<div class="table-wrapper-overflow">
												<table class="table table-choose-refund table-striped">
													<colgroup>
														<col width="50">
														<col width="80">
														<col width="100">
													</colgroup>
													<colgroup>
														<col>
														<col>
														<col width="180">
													</colgroup>
													<thead>
														<tr>
															<th></th>
															<th>Фото</th>
															<th>Артикул</th>
															<th>Наименование</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<div class="form-check">
																	<label>
																  		<input class="form-check-input" type="radio" name="" value="" aria-label=""><i></i>
																	</label>
																</div>
															</td>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
														</tr>
														<tr>
															<td>
																<div class="form-check">
																	<label>
																  		<input class="form-check-input" type="radio" name="" value="" aria-label=""><i></i>
																	</label>
																</div>
															</td>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
														</tr>
														<tr>
															<td>
																<div class="form-check">
																	<label>
																  		<input class="form-check-input" type="radio" name="" value="" aria-label=""><i></i>
																	</label>
																</div>
															</td>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
														</tr>
														<tr>
															<td>
																<div class="form-check">
																	<label>
																  		<input class="form-check-input" type="radio" name="" value="" aria-label=""><i></i>
																	</label>
																</div>
															</td>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
														</tr>
														<tr>
															<td>
																<div class="form-check">
																	<label>
																  		<input class="form-check-input" type="radio" name="" value="" aria-label=""><i></i>
																	</label>
																</div>
															</td>
															<td>
																<img src="assets/img/good1.png" alt=""/>
															</td>
															<td><nobr>65HGKG56</nobr></td>
															<td><a href="#">Котел газовый Волк 16 KSO снят с пр-ва</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

										<div class="buttons-container">
											<div class="row">
												<div class="col">
													<button type="submit" class="btn btn-primary">Создать возврат</button>
												</div>
											</div>
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
												<td class="center"><span class="status status-in-processing status-dot">В обработке</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-denied"></span></td>
												<td class="center"><span class="status status-denied status-dot">Отменен</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-ordered-supplier status-dot">Заказан поставщику</span></td>
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
												<td class="center"><span class="status status-partially-shipped status-dot">Частично отгружен</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-shipped status-dot">Отгpужен</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-in-processing status-dot">В обработке</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-in-processing status-dot">В обработке</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-in-processing status-dot">В обработке</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-in-processing status-dot">В обработке</span></td>
											</tr>
											<tr>
												<td>
													<nobr><a href="#">24525</a></nobr>
												</td>
												<td><nobr>22.01.2021</nobr></td>
												<td><nobr>98 678.34</nobr></td>
												<td class="center"><span class="pay-status pay-status-check"></span></td>
												<td class="center"><span class="status status-in-processing status-dot">В обработке</span></td>
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