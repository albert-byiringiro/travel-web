<?php
session_start();
$loginerr = "";
    if(!isset($_SESSION['user_name'])){
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="logo.png" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Traveline</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">

   <style>
       body{
            font-family: 'Poppins';
            background-color: rgba(0,0,0,0.1);

        }
        a{
            color: #bc519e;
            font-weight: 1500; 
            text-decoration-line: none;
        }
        a:after{
            color: #bc519e;
            text-decoration-line: underline;
        }
        .menu{
            display:none;
            cursor: pointer;
            float: right;
            position: sticky;
            right: 30px;
            top:-20px;
}

        .bar1, .bar2, .bar3 {
            width: 35px;
            height: 5px;
            background-color: #bc519e;
            margin: 6px 0;
            transition: 0.4s;
}

.change .bar1 {
  transform: translate(0, 11px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -11px) rotate(45deg);
}
        *{
            color: #bc519e;
            font-family: 'Poppins';
        }
        #nav{
            display: inline block;
            position: absolute;
            top: 40px;
            right: 50px;
            font-weight: 300;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            
        }
        #nav a{
            padding: 10px 20px;
            margin: 10px 10px;
            border: 1px solid #bc519e;
            transition: background 0.1s;
            border-radius: 5px;
            background-color: linear-gradient(toright #bc519e,white);
            float: right;
            
            
        }
        #nav a:hover{
            background: #bc519e;
            color: white;
            
        }
        #container{
            border-bottom:1px solid #bc519e;
            min-height: 120px;
            transition: 1s;
        }
        #content img{
            padding:40px 10px;
        }
        #content p{
            color:black;
            font-size:20px;
        }
        #content h1{
            font-weight:500;
        }
       #content{
            height: auto;
            margin: 30px 18%;
            padding: 10px 10px;
           
       }
       #logo{
            text-align: left;
            left: 30px;
           
        }
        #logo img{
             width:80px;
             border-radius: 45%;
             margin-left: 25px;
             margin-top: 10px;
        }
     
/* Navbar links */
    #nav a {
 
        display: inline-block;
    }
    .links{
        display: inline-block;
        
    }

/* On screens that are 600px wide or less, make the menu links stack on top of each other instead of next to each other */
@media screen and (max-width: 799px) {
    .links{
        background-color:rgba(40,10,80,0.7);
        display: none;
        width: 70%;
        transition:display 1s;
        float: right;
        border-radius: 20px;
    }
     .bar1,.bar2, .bar3 {
         background-color: #bc519e;
    }

  #nav a {
    float: right;
    width: 90%;
    display: block;
    transition: 0.5s;
    background-color:rgba(40,10,80,0.7);
  }
  .menu{
    display: block;
    scale: 0.5;
    right: -20px;
  } 

  #content img{
            padding:8px 0px;
        }
        #content p{
            color:black;
            font-size:9px;
        }
        #content h1{
            font-weight:500;
            font-size: 12px;
       }
       #content h1:hover{
        text-decoration-line: underline;
        cursor: pointer;
       }
       .hello{
      font-size: 15px;
  }

}
/*footer*/
footer {
  background-color: rgba(0,0,0, 0.7);
  padding: 30px;
  text-align: center;
  color: whitesmoke;
  bottom: 0;
}

footer img {
  border-radius: 50%;
  
}

.social li {
  display: inline-block;
  margin: 0 10px;
}

.social img {
  border-radius: 30%;
  filter: grayscale(100%);
  margin-bottom: 10px;
  width: 35px;
}

.social img:hover {
  filter: grayscale(0%);
}
.social img:active{
  filter: grayscale(0%);
}

.legal li {
  margin-bottom: 10px;
  list-style-type: none;
}
.hello{
  width: 700px;
  margin-top: 25px;
  }

   </style>
</head>
<body>
    <div class="row" id="container">
    <div class="col-sm-1" id="logo"><a href="index.php"><img src='logo.png'></a></div>
    <div class="col-sm-10" id="nav">
        <div class="links" id="links">
        <a href="index.php">Home</a>
        <a href="services.php">About Us</a>
        <a href="signupp.php">Register</a>
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a><br>
        </div>
        <div class="col-sm-1">
          <div class="menu" onclick="myFunction(this)" >
        MENU<div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        </div>
        </div>
        
    </div>
    </div>
      
    <div id="content"> 
      <h3 class="hello"><b>Hello <u><?php echo $_SESSION['user_name']; ?></u> We are Happy that You've Decided to <br>Continue Your Journey With Us</b></h3>
        <img src="bg24.jpg" alt="" width="100%" >
        <h1><b><b>We help you to find travelling spots around the world</b></b></h1>
        <p>Traveling websites are online platforms that enable users to plan, book, and manage their travel arrangements. 
            These websites have become increasingly popular in recent years, as more people turn to the internet for their travel needs. 
            With a few clicks of a button, users can search for flights, hotels, rental cars, and other travel-related services. 
            These websites provide a one-stop-shop for travelers, making it easier and more convenient to plan and book a trip.
        </p>
        <p>One of the primary advantages of traveling websites is that they allow users to compare prices from multiple vendors.
             Users can search for flights, hotels, and rental cars from different providers and compare prices to find the best deals. 
             This can save travelers a significant amount of time and money. 
             Additionally, many traveling websites offer special promotions and discounts to users who book their travel arrangements through their platform.
            </p>
        <p>
        Another advantage of traveling websites is that they provide users with a wealth of information about their travel destinations. 
        Users can read reviews and ratings from other travelers, view photos and videos of hotels and tourist attractions, and get insider tips and advice about the best places to visit.
         This information can help users plan a more enjoyable and fulfilling trip.
        </p>

    </div>



    <!----------------------- footer goes here-------------->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h4><b>Traveline</b></h4>
              <img src="logo.png" class="imag" width="50px" alt="Traveline logo">
            </div>
            <div class="col-md-4">
              <h4><b>Social media</b></h4>
              <ul class="social">
                <li><a href="https://www.facebook.com/"><img src="facebook.jpg" width="60px" alt="Facebook"></a></li>
                <li><a href="https://www.instagram.com/"><img src="Instagram.jpg" width="60px" alt="Instagram"></a></li>
                <li><a href="https://twitter.com/"><img src="twitter.png" width="60px" alt="Twitter"></a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h4><b>Legal</b></h4>
              <ul class="legal">
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Legal Stuff</a></li>
                <li><a href="">Security</a></li>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-12">
              <p>&copy; 2023 Alaindev.inc. All rights reserved.</p>
              <p>Disclaimer: We collect and use user data in accordance with our <a href="">Privacy Policy</a>.</p>
            </div>
          </div>
        </div>
      </footer>
 </body>
 </html>
 <script>
   var links = document.getElementById("links");
    links.style.display == "none";
function myFunction(x) {  
  if( links.style.display == "block"){
        links.style.display = "none";
        links.style.background = "rgba(40,10,80,0.7)";
    }
    else{
        links.style.display = "block";
        links.style.background = "rgba(40,10,80,0.7)";
    }
    x.classList.toggle("change");
}
</script>