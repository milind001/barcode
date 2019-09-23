<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <title>Login</title>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<style>
		#centr{
			text-align: center;
		}
		.pad{
			padding-top: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-4 pad">
				<div class="card">

				  <h5 class="card-header light-blue darken-4 white-text text-center py-4">
				    <strong>Sign in</strong>
				  </h5>

				  <!--Card content-->
				  <div class="card-body px-lg-5 pt-0">

				    <!-- Form -->
				    <form class="text-center" autocomplete="off" method="POST" action="index.php" style="color: #757575;">
						<div class="md-form mb-0">
				
						<input type="text" name="cname" id="cname" class="form-control" required>
						<label for="cname">Username</label>
						</div>
						
						<div class="md-form mb-0">
						
						<input type="password" name="pass" id="pass" class="form-control"required>
						<label for="pass">Password</label>
						</div>
						
						<button class="btn btn-outline-primary btn-block my-4 waves-effect z-depth-0 btn-md" name="submit" type="submit">Sign in</button>
						
					</form>

					<footer id="centr">
						<a href="http://milindpatil.ml" target="_blank">Visit Website</a>
						<p>Copyright © 2019 </p>
					</footer>
				</div>
			</div>
		</div>
		
		</div>


	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
<?php
session_start();

include 'connection.php';

if(isset($_REQUEST["submit"]))
{
    $username=$_REQUEST["cname"];
    $password=$_REQUEST["pass"];
    $quer="SELECT * FROM login ";
    
    $result=mysqli_query($con,$quer);
    if($result)
    {
       
        while($row=mysqli_fetch_array($result))
        
            if($row['username'] == $username && $row['password'] == $password ){
            	
            	
 				$_SESSION['c_user']=$row['username'];


            	header("Location: dashboard.php");
            }
        	echo '<script type="text/javascript">';
			echo 'alert("Invalid user");';
			
			echo '</script>';

    	

    }

}
mysqli_close($con);
?>