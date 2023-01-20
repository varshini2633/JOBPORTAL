<?php include 'config.php'?>
<!D0CTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <style>
        h1{
            color: black;
            font-weight: Bold;
        }
        p{
            color: black;
         }
        h2{
          color: black;
          font-size:40px;
        }
        .jobs{
            border:1px solid grey;
            box-shadow:5px 5px 4px 5px grey;
            margin:10px;
            padding:10px;
        }
        
      </style>
      <title>Career</title>
</head>
<body>
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed;">
  <div class="container-fluid">
  <h4><a class="navbar-brand" href="#">Admin DashBoard</a>
   <a href="index.php" style="text-decoration: none; color:black;">Index</a>
   <a href="login.php" style="text-decoration: none; color:black;">Login</a></h4>
    <div class="collapse navbar-collapse" id="navbarNav">
      
    </div>
  </div>
</nav>
<br><br>
<div class="row">
    <div class="col-12" style="background-image:url('data:image/jpeg;base64,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'); background-size:auto; height:300px;">
    <div class="container" style="padding-top:70px;">
               <center> <h1 class="display-4" style="font-weight: bold;">Job Portal</h1>
                <h2 class="lead">Best Jobs available matching your skills</h2></center>
            </div>
           </div>
      </div>

<div class="row m-0">
    <?php 
    $server='localhost';
    $username='root';
    $password='';
    $database='jobs';
    
    $conn=mysqli_connect($server,$username,$password,$database);
    $sql = "SELECT cname,position,Jdesc,CTC,skills from jobs";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            echo'
            <div class="col-md-4">
             <div class="jobs">
             <h3 style="text-align: center;">'.$rows['position'].'</h3>
             <h4 style="text-align: center;">'.$rows['cname'].'</h4>
             <p style="color:black; text-align:justify;">'.$rows['Jdesc'].'</p>
             <p style="color:black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
             <p style="color:black;"><b>CTC</b>'.$rows['CTC'].'</p>
             <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
               Apply Now
             </button>
             </div>
            </div>';
        }
    }
    else{
        echo"";
    }
    ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying for:</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout:</label>
            <input type="text" class="form-control" name="year">
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit1" name="submit1" class="btn btn-primary">Apply</button>
        </div>
       </form>
    </div>
  </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>