<?php 
include 'connection.php';
$query= "SELECT max(id) from barcode";
$result=mysqli_query($con,$query);
$roow=mysqli_fetch_array($result);
     if($roow[0] == null){
          $idnomax=1;
     }else{
          $idnomax=$roow[0]+1;
     }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Product</title>

<?php 
require_once 'dashboard.php';
?>
<style type="text/css">
	
.box{
    box-shadow: 0px 0px 0px 0px ;
    margin-top: 7px;
    height: 620px;
 }

  .box:hover{
    box-shadow: 2px 5px 20px 0px ;
  }

</style>

</head>
<body>
	<div class="container mt-5">

		<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 box">
		<h1 style="text-align: center;padding-top: 20px"><b>ADD PRODUCT</b></h1>

			<form method="POST" action="new.php" autocomplete="off" onsubmit="return check()">
			<div class="form-group">
			<label>ID: </label>
			<input type="text" class="form-control" id="maxid" value="<?php echo $idnomax ?>" readonly>
			</div>	
			<div class="form-group">
			<label>Barcode Number: </label>
			<input type="text" id="tvs" name="tvs" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Product Name: </label>
			<input type="text" id="notvs" name="notvs" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Batch Number: </label>
			<input type="text" id="bno" name="bno" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Product Description: </label>
			<textarea id="prddesc" name="prddesc" class="form-control" required></textarea>
			
			</div>
			<button class="btn btn-info" name="submit" type="submit">Save</button>
			</form>


		</div>
		</div>
	</div>
		<script type="text/javascript">
			function check(){
			prddesc=$('#prddesc').val();
			
			if (prddesc.length <= 250) {
				return true;

			}else{
				alert('Description Should be less Than 250 Characters');
				return false;
			}
			}

		</script>
</body>

</html>

<?php
include 'connection.php';

if (isset($_POST['submit'])) {
	

	$tvs = $_POST['tvs'];
    $notvs = $_POST['notvs'];
    $bno = $_POST['bno'];
    $prddesc = $_POST['prddesc'];

    $CreateSql = "INSERT INTO `barcode`(`id`, `number`, `name`, `batchnumber`, `prodesc`) VALUES 
    ('$idnomax','$tvs','$notvs','$bno','$prddesc')";

    $res=mysqli_query($con, $CreateSql);
    if ($res) {
    	 echo "<script>alert('Successfully Inserted');</script>";
    	$query= "SELECT max(id) from barcode";
		$result=mysqli_query($con,$query);
		$roow=mysqli_fetch_array($result);
		     if($roow[0] == null){
		          $idnomax=1;
		     }else{
		          $idnomax=$roow[0]+1;
		     }

		    echo '<script>
	
				$("#maxid").val('.$idnomax.');
			</script>';

    }else {
    	echo "<script>alert('Not Inserted');</script>";
    }
}
mysqli_close($con);
 
?>