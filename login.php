<?php
session_start();
if(isset($_SESSION['user_name'])){
    $loginerr = "*You are already logged in. Do you want to logout?(Click on logout.)";
    $loginerr;
    header("Location:index.php");
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_db";
$nameerr = $formerr = $loginerr = "";

    $conn = mysqli_connect("localhost", "root", "", "php_db");
     
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
if(isset($_POST['submit'])){
	$username = $_POST['user_name'];
	$password = $_POST['password'];

if(!empty($username && !empty($password) )){
   

	$query = "SELECT * FROM user WHERE user_name='$username' AND password='$password'";
	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) == 1){
		$_SESSION['user_name'] = $username;
        header('location: index.php');
	}else{
        $nameerr = "*Invalid username or password.";
	}
}
else{
    $formerr = "*Username and password must not be empty";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="logo.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|Traveline</title>
    <style>
        *{
            color:;
        }
        .logo{
            text-align: center;
           
        }
        .logo img{
             width:120px;
             border-radius: 50%;
             border: 2px groove white;
        }
        a{
            color: blue;
            font-weight: 500; 
            text-decoration-line: underline;
        }
        a:hover{
            color: red;
            text-decoration-line: underline;
        }
        span{
            color: red;
        }
        .span1{
            color: white;
        }
        .span a{
            color: blue;
        }
        body{
            font-family: 'Poppins' ;
            
        }
        label{
            font-size: 15px;
            color: white;
            font-family: 'Poppins';
            font-weight: 10px;
        }
        .container {
            padding:30px;
            margin:20px 12.5px;
            border: 2px solid #bc519e;
            width: 50%;
            align-items: center;
            justify-content: center;
            margin-left: 20%; 
            background: rgba(20,10,100,0.5);
        }
        @media only screen and (max-width: 450px) {
            body{
                overflow-y: hidden;
            }
            .container{
                margin-top: 10%;
                padding: 10px;
                margin: 20px 12.5px;
                width: 70%;
                margin-left: 15%;
                margin-top: 20%; 
                justify-content: center;
                align-items:center;
                
            }
            .logo img{
                width: 80px;
                border:2px groove white;
            }
        }
        .submit{
            width:100px;
            height:30px;
            background-color: #bc519e;
            border:none;
            color: white;
            margin-top: 20px;
            font-family: 'Poppins';
            font-weight: 300;
            
        }
        .submit:hover{
            background-color: green;
            transition: background-color 1s;
            
        }
        .box{
            height: 30px;
            width: 100%;
            border: 2px solid #bc519e;
        }
        .h3{
            margin-top: 50px;
            text-align: center;
            color:white;
            background: #bc519e;
            font-family: 'Poppins';
        }
        input[type=text]:hover,input[type=password]:hover{
            background: #bc519e;
            color:white;
        }
        .body{
            background-image:url(bg3.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Poppins';
            height: 100vh;
        }
        .hello{
            margin-top: 50px;
            text-align: center;
            color:white;
            background: #bc519e;
            font: cursive;
        }
    </style>
 </head>
 <body>
 <body class="body">
    <div class="container justify-content-center">
         <div class="h3"><h3><center><b>Login to continue your journey<b><center></h3></div>
         <form action="login.php" method="post">
         <div class="logo"><img src="logo.png" ></div>
            <span><?php echo $formerr?> </span>
            <span><?php echo $nameerr;?></span>
            <p>
               <label for="user_name">Username:</label>
               <input type="text" name="user_name" id="user_name" placeholder="Enter username" class="box"><br>
               
            </p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="box" placeholder="Enter your password"/>

            
        <p>
                <input type="submit" value="LOGIN" class="submit" name="submit">
            </p>
            <span class="span1">No Account? <a href="signupp.php">Sign Up</a></span>
</div>
 

 </body>
 </html>