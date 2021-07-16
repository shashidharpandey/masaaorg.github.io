<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor  | Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<style>
			.testimonial{
    margin:120px auto 100px;
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(350px, 1fr));
    grid-gap:20px;
    margin-top: 3 !important;
  }
  .testimonial .card{
    position:relative;
    margin:0 auto;
    width:350px;
    background:#333;
    padding:20px;
    box-sizing:border-box;
    text-align:center;
    box-shadow:0 10px 40px rgba(0,0,0,.5);
    overflow:hidden;
  }
  .testimonial .card .layer{
    position:absolute;
    top:calc(100% - 2px);
    left:0;
    height:100%;
    width:100%;
    background:linear-gradient(#03a9f4, #e91ee3);
    z-index:1;
    transition:0.5s;
  }
  .testimonial .card:hover .layer{
    top:0;
  }
  .testimonial .card .content{
    position:relative;
    z-index:2;
  }
  .testimonial .card .content p{
    font-size:18px;
    line-height:24px;
  }
  .testimonial .card .content .image{
    width:128px;
    height:128px;
    margin:0 auto;
    border-radius:50%;
    overflow:hidden;
    border:4px solid #fff;
    box-shadow:0 10px 20px
      rgba(0,0,0,.2);
  }
  .testimonial .card .content .details h2{
    font-size:18px;
  }
  .testimonial .card .content .details span{
    color:#03a9f4;
    font-size:14px;
    transition:0.5s;
  }
  .testimonial .card:hover .content .details span{
    color:#fff;
  }
  
  .card a:hover{
    background: #f00 !important;
    color: #fff;
  }
		</style>

	</head>
	<body class="login" style="background-image: url(https://wallpaperaccess.com/full/3966878.jpg);">

	<div class="testimonial">
  <div class="card">
    <div class="layer"></div>
    <div class="content">
      <p><h3>Appointment History</h3></p>
      <div class="image"><img class="img-fluid"src="https://image.shutterstock.com/image-vector/event-schedule-icon-260nw-1346897732.jpg"  alt="*"> 
      </div>
      <div class="details">
        <br><br> <span><a href="appointment-history.php"><h4>Ckeck Appointment</h4></a></span>
      </div>
           </div>
  </div>
  
      <div class="card">
    <div class="layer"></div>
    <div class="content">
      <p><h3>My Profile</h3></p>
      <div class="image"><img class="img-fluid" src="https://www.pngitem.com/pimgs/m/42-422713_doctor-icon-doctor-image-png-transparent-png.png"       alt="avatar"> 
      </div>
      <div class="details">
        <br><br> <span><a href="edit-profile.php"><h4>Update Profile</h4></a></span>
      </div>
           </div>
  </div>
  
</div>
	</body>
</html>
