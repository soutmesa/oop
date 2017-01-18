<?php 
  // include "db/config.php";
  // include "includes/session.php";
  // $_SESSION['user_name'] = "mesa";
  // if(!isset($_SESSION['user_name'])){
  //   header("Location: http://localhost:8585/oop/login.php");
  // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>OOP | Home</title>
    <!-- Latest compiled and minified CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link href="css/custom.css" rel="stylesheet"> -->
	  <link href="css/style.css" rel="stylesheet">
	</head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Activities Log</a></li>
                <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a></li>
                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-bug" aria-hidden="true"></i> Report A Problem</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>