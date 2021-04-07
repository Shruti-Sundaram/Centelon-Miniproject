<? php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
<link rel = "stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>Home page</h2>
</div>
<div class ="content">
<?php if(isset($_SESSION['succcess'])): ?>
<div class="error success">
<h3>
<?php 
     echo $_SESSION['success'];
     unset($_SESSION['session']);

?>
</h3>
</div>
<?php endif ?>
<?php if(isset($_SESSION["username"])): ?>
<p>Welcome<strong><?php echo $_SESSION['name']; ?></p>
<p><a href="" style="color: blue;">Student Details</a></p>
<p><a href="" style="color: red;">Logout</a></p>
</div>
</body>
</html>

