<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<title></title>
	<script type="text/javascript">
		$(function () {
			var chart;
			$(document).ready(function() {
				$.getJSON("data_linechart.php", function(json) {
				
					chart = new Highcharts.Chart({
						chart: {
							renderTo: 'mygraph',
							type: 'line'
							
						},
						title: {
							text: 'Perbandingan Kasus Covid'
							
						},
						subtitle: {
							text: ''
						
						},
						xAxis: {
							categories: ['India', 'Japan', 'S. Korea', 'Turkey', 'Vietnam', 'Taiwan', 'Iran', 'Indonesia', 'Malaysia', 'Israel']
						},
						yAxis: {
							title: {
								text: 'Jumlah'
							},
							plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
						},
						tooltip: {
							formatter: function() {
									return '<b>'+ this.series.name +'</b><br/>'+
									this.x +': '+ this.y;
							}
						},
						legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'top',
							x: -10,
							y: 120,
							borderWidth: 0
						},
						series: json
					});
				});
			
			});
			
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/11.0.1/highcharts.js" integrity="sha512-bdh59dK4gjyd/T+ptbOau3WEjtNLRy1eWtYkAfv2PCQODTaN2XXLVWKGQbPLbd5JB1Gn1oStmblZMSgXY29nrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.15/plugins/export/export.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 20px">
		<div class="panel panel-primary">
				<div class="panel-body">
					<div id="mygraph"></div>
				</div>
		</div>
	</div>
</body>
</html>