<!DOCTYPE html>
<html>
<head>
	<title>Match Product</title>
	<?php 
		require_once 'dashboard.php';
	?>

</head>
<body>
	<div class="container pt-5">

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 ">
		<h1 style="text-align: center;padding-top: 40px"><b>MATCH PRODUCT</b></h1>

			<form method="POST" action="match.php" autocomplete="off">
			<div class="form-group">
			<label>Scan:</label>
			<input type="text" id="no" name="no" class="form-control" required>
			</div>
			<div ></div>
			<button class="btn btn-info" name="sub" type="submit">Match</button>

			</form>
			</div>

		</div>
	
	
</body>
</html>


<?php
include 'connection.php';

if (isset($_POST['sub'])) {
	$sca=trim($_POST['no'],"");		
	$flag=0;
	$proname="";
    $new2 ="SELECT * FROM `barcode`";
    $res2=mysqli_query($con, $new2);
	while($row=mysqli_fetch_array($res2)){
		//echo $row['number'].'<br>';
     // if($row['number']){
				  if($row['number'] == $sca){
				  	$flag=1;
				  	$proname=$row['name'];
				  	$prodesc=$row['prodesc'];
				  }

    	
   }if ($flag==1) {
   		echo	"<div class='container'><div class='row'><div class='col-sm-3'></div><div class='col-sm-6'><div class='alert alert-success d-flex justify-content-center mt-3'>".
				  'Product Found :'.' '.$proname."</div></div></div><div class='row'><div class='col-sm-3'></div><div class='col-sm-6'><label><b>Product Description :</b></label><p class='d-flex justify-content-center'>".$prodesc."</p></div></div>" ;
				  	return;
   }
   else{
				echo "<div class='alert alert-danger d-flex justify-content-center mt-3'>Product Not Found</div></div>";	
				return;
			}
    
}
mysqli_close($con);
 
?>