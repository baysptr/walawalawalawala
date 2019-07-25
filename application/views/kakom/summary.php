<html lang="en" class="h-100">
<head>
	<?= $head ?>
</head>
<body class="d-flex flex-column h-100">
<?= $header ?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
	<div class="container">
		<div class="mt-5">
			<div class="row">
				<div class="col-12 col-md-6"><div id="columnchart_values"></div></div>
				<div class="col-12 col-md-6">
					<?php
					$total_sum = (int)$summary->akl+(int)$summary->otkp+(int)$summary->bdp+(int)$summary->tkj+(int)$summary->mm;
					?>
					Hasil Peminatan sebagai berikut:
					<table class="table">
						<thead class="table-active">
							<tr>
								<td><strong>NO</strong></td>
								<td><strong>KOMPETENSI KEAHLIAN</strong></td>
								<td><strong>JUMLAH</strong></td>
								<td><strong>PERSENTASE</strong></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>AKL</td>
								<td><?= $summary->akl ?></td>
								<td><?= round(((int)$summary->akl / $total_sum)*100) ?>%</td>
							</tr>
							<tr>
								<td>2</td>
								<td>OTKP</td>
								<td><?= $summary->otkp ?></td>
								<td><?= round(((int)$summary->otkp / $total_sum)*100) ?>%</td>
							</tr>
							<tr>
								<td>3</td>
								<td>BDP</td>
								<td><?= $summary->bdp ?></td>
								<td><?= round(((int)$summary->bdp / $total_sum)*100) ?>%</td>
							</tr>
							<tr>
								<td>4</td>
								<td>TKJ</td>
								<td><?= $summary->tkj ?></td>
								<td><?= round(((int)$summary->tkj / $total_sum)*100) ?>%</td>
							</tr>
							<tr>
								<td>5</td>
								<td>MM</td>
								<td><?= $summary->mm ?></td>
								<td><?= round(((int)$summary->mm / $total_sum)*100) ?>%</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>

<?= $footer ?>

<?= $javascript; ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load("current", {packages:['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			["Element", "Jumlah", { role: "style" } ],
			["AKL", <?= $summary->akl ?>, "#007bff"],
			["OKTP", <?= $summary->otkp ?>, "#fd7e14"],
			["BDP", <?= $summary->bdp ?>, "#20c997"],
			["TKJ", <?= $summary->tkj ?>, "#17a2b8"],
			["MM", <?= $summary->mm ?>, "#ffc107"]
		]);

		var view = new google.visualization.DataView(data);
		view.setColumns([0, 1,
			{ calc: "stringify",
				sourceColumn: 1,
				type: "string",
				role: "annotation" },
			2]);

		var options = {
			title: "Data Jumlah Peminatan per - Jurusan",
			width: 600,
			height: 400,
			bar: {groupWidth: "95%"},
			legend: { position: "none" },
		};
		var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
		chart.draw(view, options);
	}
</script>

</body>
</html>
