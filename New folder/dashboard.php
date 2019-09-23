<?php 
include 'session.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PinmiMarket</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link href="css/addons/datatables.min.css" rel="stylesheet">


	</head>
	<body>
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="dashboard.php">PINMI</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
		    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="basicExampleNav">
		  <ul class="navbar-nav mr-auto">
		  <!-- 	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false"><span class="fa fa-edit"></span> Add Product</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          
          <a class="nav-link" href="new.php"><span class="fa fa-pencil-square"></span> Enquiry Form</a>
   
        </div>
      </li> -->
      <li class="nav-item">
            <a class="nav-link" href="new.php"><span class="fa fa-edit"></span> Add Product</a>
        </li>

      		<li class="nav-item">
		        <a class="nav-link" href="match.php"><span class="fa fa-search"></span> Match Product</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="view.php"><span class="fa fa-eye"></span> View Product</a>
		    </li>
		    </ul> 
		   <ul class="navbar-nav ml-auto">
              <li class="nav-item">
		        <a class="nav-link" href="logout.php"><span class="fa fa-sign-out"></span> Logout <b style="color: yellow"><?php echo $_SESSION['c_user']; ?></b></a>
		      </li>
        </ul>
		  </div>
		</nav>

<?php
//require_once 'new.php';

?>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
	</body>
	</html>
