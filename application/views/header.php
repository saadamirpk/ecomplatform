<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		header
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assist/css/style.css ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assist/bootstrap/bootstrap.min.css ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assist/bootstrap/bootstrap.min.css ">
	<script src="<?php echo base_url();?>assist/js/jquery-3.4.1.min.js"></script>
	<script src="<?php echo base_url();?>assist/js/js.js"></script>

</head>
<body class="container-fluid">
	<img src="<?php echo base_url().'image/logo.png' ?>" width=150px; height=100px; />

 <div style="float:right;margin-top:20px;">

  <form class="form-inline"  action="" >	
    <input class="form-control mr-sm-2" type="text" placeholder="Search Item">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
  </div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	 <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();  ?>home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();  ?>about">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url();  ?>contact">Contact US</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link " href="<?php echo site_url();  ?>profile" style="margin-left:900px;">View Profile</a>
    </li>

  </ul>
 
</nav>




</body>
</html>