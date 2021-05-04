<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Список возвратов</title>
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
					<li><span>Список всех заказов</span></li>
					<li><span>Список всех КП</span></li>
					<li class="active"><span>Список возвратов</span><span class="badge">23</span></li>
				</ul>
				<ul class="content__container">
					<li></li>
					<li></li>
					<li></li>
					<li class="active">
						<div class="table-wrapper-overflow">
							<table class="table table-list-refund fullWidth">
								<thead>
									<tr>
										<th>Номер возврата</th>
										<th>Номер заказа</th>
										<th>Дата создания</th>
										<th>Дата изменения</th>
										<th>Статус</th>
										<th>Стоимость</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-in-processing">В обработке</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-need-info">Требуется доп.информация</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-in-work">Принят в работу</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-denied">Отказано</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-success">Возврат подтвержден</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-in-processing">В обработке</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-need-info">Требуется доп.информация</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-in-work">Принят в работу</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-denied">Отказано</span></td>
										<td><nobr>98 678.34</nobr></td>
									</tr>
									<tr>
										<td>
											<nobr><a href="#">24525</a></nobr>
										</td>
										<td><nobr><a href="#">2352452345</a></nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><nobr>22.01.2021</nobr></td>
										<td><span class="status-success">Возврат подтвержден</span></td>
										<td><nobr>98 678.34</nobr></td>
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