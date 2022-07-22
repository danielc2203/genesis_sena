
<?php
	$conn = new PDO("mysql:host=localhost;dbname=genesis_sena", 'genesis', 'Genesis2022*');
?>

<?php

$stmt = $conn->prepare('select * from rendimiento');
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($results);
?>

<html>
<head>
<title>Google Chart in PHP and MySQL</title>
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$.ajax({
			url : "data.php",
			dataType : "JSON",
			success : function(result) {
				google.charts.load('current', {
					'packages' : [ 'corechart' ]
				});
				google.charts.setOnLoadCallback(function() {
					drawChart(result);
				});
			}
		});

		function drawChart(result) {

			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Name');
			data.addColumn('number', 'Quantity');
			var dataArray = [];
			$.each(result, function(i, obj) {
				dataArray.push([ obj.name, parseInt(obj.quantity) ]);
			});

			data.addRows(dataArray);

			var piechart_options = {
				title : 'Pie Chart: How Much Products Sold By Last Night',
				width : 400,
				height : 300
			};
			var piechart = new google.visualization.PieChart(document
					.getElementById('piechart_div'));
			piechart.draw(data, piechart_options);

			var barchart_options = {
				title : 'Barchart: How Much Products Sold By Last Night',
				width : 400,
				height : 300,
				legend : 'none'
			};
			var barchart = new google.visualization.BarChart(document
					.getElementById('barchart_div'));
			barchart.draw(data, barchart_options);
		}

	});
</script>

</head>
<body>
<table class="columns">
	<tr>
		<td>
		<div id="piechart_div" style="border: 1px solid #ccc"></div>
		</td>
		<td>
		<div id="barchart_div" style="border: 1px solid #ccc"></div>
		</td>
	</tr>
</table>
</body>
</html>