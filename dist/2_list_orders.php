<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список всех заказов</title>
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
						<div class="table-wrapper-overflow">
							<table class="table table-list-orders fullWidth">
								<thead>
									<tr>
										<th>Номер</th>
										<th>Дата создания</th>
										<th>Сумма в руб.</th>
										<th class="center">Оплата</th>
										<th>Статус</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-in-processing">В обработке</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-denied"></span></td>
										<td><span class="status status-denied">Отменен</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-ordered-supplier">Заказан поставщику</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-reserve">В резерве</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-primary">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-primary btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-partially-shipped">Частично отгружен</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-shipped">Отгpужен</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-in-processing">В обработке</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-in-processing">В обработке</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-in-processing">В обработке</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-in-processing">В обработке</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">24525</a>
										</td>
										<td>22.01.2021</td>
										<td>98 678.34</td>
										<td class="center"><span class="pay-status pay-status-check"></span></td>
										<td><span class="status status-in-processing">В обработке</span></td>
										<td>
											<a href="#" class="btn btn-sm btn-default">Оформить возврат</a>
										    <a href="#" class="btn btn-sm btn-default btn-pay disabled">Оплатить</a>
										    <a href="#" class="btn btn-sm btn-default btn-cancel">Отменить</a>
										</td>
									</tr>
								</tbody>
							</table>
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