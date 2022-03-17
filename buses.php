<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maseno Bus Booking</title>

</head>


<body>
<?php session_start() ?>
<?php

  header('index.php?page=home');
 include 'header.php'; ?>
<?php if(isset($_SESSION['login_id'])) include 'admin_navbar.php'; else include 'navbar.php'; ?>

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="bus_video.mp4" allowfullscreen></iframe>
</div>

</body>
</html>