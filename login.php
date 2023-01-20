<!D0CTYPE html>
<html lang="en">
<head>
    <title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style type="text/css">
    body
    {
            margin:0px;
            padding:0px;
            background-image:url('https://wallpaperaccess.com/full/2314983.jpg');
            background-size:cover;
    }
    form
    {
      background-color:#fff;
      margin-top:6em;
      margin-left:25em;
      margin-right:25em;
      padding:30px;
      box-shadow: 10px 10px 8px 10px #888888;
    }
</style>
</head>
</body>
    <div class="container">
    <form method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">we'll never share your email with any one else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <p style="text-align:center;">New user?<br>Create Account <a href="register.php">Sign Up</a></p>
</form>
</div>
</body>
</html>