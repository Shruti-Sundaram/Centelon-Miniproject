<?php
      
    $serverName='localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'resgistration';
    
    $con = mysqli_connect($serverName, $userName, $password, $dbName);
    if(mysqli_connect_errno()){
        echo "Failed to connect";
        exit();
     }
     echo "Connection success";
   
    
    $errors = array();
    //connect to db
    $db = mysqli_connect('localhost','root','','resgistration');

    //once register btn is clicked
    if (isset($_POST['register'])) {
        $username = mysql_real_escape_string($_POST['username']);
        $name = mysql_real_escape_string($_POST['name']);
        $stream = mysql_real_escape_string($_POST['stream']);
        $dob = mysql_real_escape_string($_POST['dob']);
        $email = mysql_real_escape_string($_POST['email']);
        $phone = mysql_real_escape_string($_POST['phone']);
        $gender = mysql_real_escape_string($_POST['gender']);
        $password_1 = mysql_real_escape_string($_POST['password_1']);
        $password_2 = mysql_real_escape_string($_POST['password_2']);

        if($password_1 != $password_2){
             array_push($errors, "The two passwords do not match");
             }

        if(count($errors)==0){
             $password = md5($password_1); //encrypts pw before storing(for security)
             $sql = "INSERT INTO users(username, name, stream, dob, email, phone, gender, password) VALUES('$username', '$name', '$stream', '$dob', '$email', '$phone', '$gender', '$password')";
             mysqli_query($db,$sql);
             $SESSION['name']=$name;
             $SESSION['success']="You are now logged in";
             header('location: index.php');
             }
      }
?>
