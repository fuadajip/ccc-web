
<?php include('session.php');

?>
<html>
<head>
<title>Simle Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
         <label for="inputUsername">Username</label>
	  <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" required>
	</div>
    <div class="input-group">
        <label for="inputPassword" >Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
        <div class="input-group">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </div>

      </form>

</body>
</html>



