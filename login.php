<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
   <h2>Login</h2>
</div>
<form method="post" action="login.php">
 <div class="input-group">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
   <a href="index.php">
    <button type="submit" name="login" class="btn">Login</button>
     </a>
 </div>
<p>
Not registered yet? <a href="register.php">Register
</form>
</body>
</html>
