<?php
if(isset($_POST['name'])){
    $server ="localhost";
    $username="root";
    $password="";
    $mydb="user_login";

    $con = mysqli_connect($server, $username, $password,$mydb);

    if(!$con){
        die("connection to this database faild due to " . mysqli_connect_error());
    }
        echo "Success connecting to the database ";

    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `contact us`(`Name`, `password`, `Mobile no`, `No of Qurees`, `Message`, `Date`) VALUES ('$name', '$password');";
    // echo $sql;

    if($con->query($sql)== true){
        // echo "successfully inserted";
        $insert=true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="box">
    <div class="form">
        <h2>Sign in </h2>
        <div class="inputBox">
            <input type="text" name="name" id="name" required="required">
            <span>Username</span>
            <i></i>
        </div>
        <div class="inputBox">
            <input type="password" name="password" id="password" required="required">
            <span>Password</span>
            <i></i>  
        </div>
        <div class="link">
            <a href="#"> Forget Password</a>
            <a href="#"> Signup</a>
        </div>
        <input type="submit" value="Login">
        </div>
    </div> 
    <script src="index.js">
        if($insert=true)
{
    alert("sent message");
}
    </script>
</body>
</html>