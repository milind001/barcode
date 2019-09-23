<!DOCTYPE html>
<html>
<head>
	<title>View Products</title>
	<?php 
require_once 'dashboard.php';
?>
</head>
<body>
	<div class="container pt-5">
		<div class="table-responsive">
			<table class='table table-bordered table-sm'>
			<thead class='thead-light'>
				<tr><th colspan='5' style='text-align:center;'><h2><b>PRODUCT LIST</b></h2></th></tr>
				<tr><th class='text-center'><b>SL NO</b></th>
					<th class='text-center'><b>PRODUCT NUMBER</b></th>
					<th class='text-center'><b>PRODUCT NAME</b></th>
					<th class='text-center'><b>BATCH NUMBER</b></th>
					<th class='text-center'><b>DESCRIPTION</b></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include 'connection.php';
				$sql="SELECT * FROM `barcode`";
				$res=mysqli_query($con,$sql);
				while ($row=mysqli_fetch_array($res)) {
				    echo "<tr align='center'>
				    		<td>$row[0]</td>
				    		<td>$row[1]</td>
				    		<td>$row[2]</td>
				    		<td>$row[3]</td>
				    		<td>$row[4]</td>

				    	  </tr>";
				}
				?>
			</tbody>

			</table>
		</div>
	</div>
</body>
</html>