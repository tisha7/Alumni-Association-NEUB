<?php
session_start();
include("dbconnect.php");


if(!isset($_SESSION['user'])){
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- start: Meta -->
  <meta charset="utf-8">
  <meta name="description" content="Bootstrap Metro Dashboard">
  <meta name="author" content="Ishrat Jahan">
  <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.png" type="image/png">
  <title>Admin Panel</title>
  <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link id="base-style" href="css/style.css" rel="stylesheet">
  <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body>
  <!-- start: Header -->
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.php" style="padding: 8px; margin-top: 5px;"><span><img src="image/logo3.jpg" alt="NEUBAA" height="60" width="250" ></span></a>

        <!-- start: Header Menu -->
        <div class="nav-no-collapse header-nav">
          <ul class="nav pull-right">
            <!-- start: User Dropdown -->
            <li class="dropdown">
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="halflings-icon white user"></i>Welcome <?php echo $_SESSION['user']?>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-menu-title">
                  <span>Account Settings</span>
                </li>
                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                <li><a href="logout.php"><i class="halflings-icon off"></i>Logout</a></li>
              </ul>
            </li>
            <!-- end: User Dropdown -->
          </ul>
        </div>
        <!-- end: Header Menu -->

      </div>
    </div>
  </div>
  <!-- start: Header -->
