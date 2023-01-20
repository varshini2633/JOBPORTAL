<?php include 'config.php'?>
<!D0CTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>DashBoard</title>
<style>
.sidebar 
 {
  margin: 0;
  margin-top:70px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
 }
 .sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
 }
/* .sidebar a.active {
  background-color: #04AA6D;
  color: white;
 }*/
 .sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
 }
 div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
 }
 @media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {
    float: left;
  }
  div.content {margin-left: 0;}
 }
 @media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  .navbar
  {
    overflow: hidden;
    background-color:#333;
    position:fixed;
    top:0;
    width:100%;
  }
  .content .p .button
  {
    text-align:center;
  }
  }
</style>
</head>
<body>
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin DashBoard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
    </div>
  </div>
</nav>
<!-- The sidebar -->
<div class="sidebar">
   <a href="login.php">Login</a>
  <a href="index.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="career.php">Career</a>
  <a href="#about">About</a>
</div>
