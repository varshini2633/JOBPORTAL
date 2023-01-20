<?php include 'header.php'?>
<div class="content">
<p>
  <center> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="padding-right:20px;">
     post job
  </button></center>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="company Name" name="cname" >
  </div>
  <div class="mb-3">
    <label for="Position" class="form-label">Position</label>
    <input type="text" class="form-control" id="Position" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="JobDesc" name="Jdesc">
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="Skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC"name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>

</form>    
</div>
</div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);
   $sql="select cname,position,CTC from jobs";
   $result=mysqli_query($conn,$sql);
   if($result->num_rows>0)
   {
    while($rows=$result->fetch_assoc()){
   $i=0;
   echo"<td>".++$i."</td>
    <td>".$rows['cname']."</td>
    <td>".$rows['position']."</td>
    <td>".$rows['CTC']."</td>
    ";
    }}
    else{
      echo"";
  }?>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>