<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_db";

    $conn = mysqli_connect("localhost", "root", "", "php_db");

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $nameerr = $formerr = $passerr = "";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($username) && !empty($password) && !empty($email)) {
            if(strlen($password) >= 8) {
                $sql="insert into user(user_name,email,password) values('$username','$email','$password') ";
                mysqli_query($conn, $sql);
                header("Location:login.php");
            } else {
                $passerr = "*Password must be at least 8 characters";
            }
        } else {
            $formerr = "*Username or password must not be empty";
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
    <title>Signup|Traveline</title>

    <style>
        
        input[type=email]:hover, input[type=password]:hover, input[type=text]:hover{
            background:  #bc519e;
            color: white;
        }
        span{
            color: red;
        }
        *{
            font-family: 'Poppins';
        }
        .container{
            padding: 20px;
            margin: 20px 5px;
            margin-top: 35px;
            border: 2px solid  #bc519e;
            width: 50%;
            align-items: center;
            justify-content: center;
            margin-left: 20%; 
            font-family: 'Poppins';
            background: rgba(40,10,80,0.7);
        }
        .logo{
            text-align: center;
           
        }
        .logo img{
             width:100px;
             border-radius: 50%;
             border:2px groove white;
        }
        body{
                overflow-y: hidden;
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
            width: 100px;
            height: 30px;
            background-color:  #bc519e;
            border: none;
            color: white;
            border-left: 50px;
            font-family: 'Poppins';
        }
        .submit:hover{
            background-color: green;
            transition: background-color 1s;
        }
        .box{
            height: 30px;
            width: 100%;
            border: 2px solid  #bc519e;
        }
        .h3{
            margin-top: 50px;
            text-align: center;
            color: white;
            background:  #bc519e;
            font-family: 'Poppins';
        }
        .body{
            background-image: url(bgs.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .hello{
            margin-top: 50px;
            text-align: center;
            color:white;
            background:  #bc519e;
            font-family: 'Poppins';
        }
        .span1{
            color: white;
        }
        label{
            font-size: 20px;
            color: white;
            font-family: 'Poppins';
            font-weight: 10px;
        }
        a:hover{
            color: red;
            text-decoration-line: underline;
        }
        
    </style>
 </head>
 <body>
 <body class="body">
    <div class="container justify-content-center">
         <div class="h3"><h3><b><center>Sign Up to Travel<center></b></h3></div>
         <form action="signupp.php" method="post">
            <div class="logo"><img src="logo.png" ></div>
            <span><?php echo $formerr?> </span>
            <span><?php echo $nameerr;?></span>
            <p>
               <label for="user_name">Username:</label>
               <input type="text" name="user_name" id="user_name" placeholder="Enter username" class="box"><br>
            </p>
 
             
            <p>
               <label for="email">E-mail:</label>
               <input type="email" name="email" id="email" placeholder="Enter E-mail example@gmail.com"  class="box"><br>
            </p>
            <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="box" placeholder="Enter your password"/>
            <span> <?php echo $passerr?>

        <p>
                <input type="submit" value="SEND" class="submit" name="submit">
            </p>
            <span class="span1">Already have Account? <a href="login.php">Login</a></span>
</div>
 

 </body>
 </html>

   
        </body>
        </html>   