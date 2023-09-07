<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <title>What we do?|Traveline</title>
    <style>
        *{
            font-family: 'Poppins';
           
            color: #bc519e;
            box-sizing: border-box;
            
        }
        body{
            overflow-x: hidden;
        }
        #container{
            border-bottom:1px solid #bc519e;
            min-height: 120px;
            position: ;
        }
        #nav{
            display: inline block;
            position: absolute;
            top: 40px;
            right: 50px;
            font-weight: 300;
            justify-content: center;
            text-align: center;
            background:transparent;
            
        }
        #nav a{
            padding: 10px 20px;
            margin: 0 10px;
            border: 1px solid #bc519e;
            transition: background 0.1s;
            border-radius: 5px;
            
        }
        #nav a:hover{
            background: #bc519e;
            color: white;
            
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
        #logo{
            text-align: left;
            left: 30px;
           
        }
        a:hover{
            color: #bc519e;
            text-decoration-line: underline;
        }
        #logo .im{
             width:80px;
             border-radius: 50%;
             margin-left: 25px;
             margin-top: 10px;
        }
        body {
            background: rgba(0,0,0,0.1);
        }
        .services {
             max-width: 100%;
             overflow-x: hidden ;
             margin:20px  50px;
             padding: 10px 10px;
             text-align: center;
        }
        p{
            font-size: 14px;
        }
        .services img{
           width: 90%;
           max-height: 200px;
           min-height: 200px;
           margin: 10px 0px;
           border-radius: 10px;

       }
       .services p{
        overflow-y: hidden;
       }
       .services img:hover{
           transform: translateY(-5px);
           transition: transform 0.5s;
           cursor: pointer;
       }
       .col-lg-3{
        align-items: center;
        padding-bottom: 25px;
       }
       .menu{
            display:none;
            cursor: pointer;
            float: right;
            position: relative;
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
#nav a {
 
 display: inline-block;
}
.links{
 display: inline-block;
 background:transparent;
 
}
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
    margin: 15px 5px;
  }
  .menu{
    display: block;
    scale: 0.5;
    right: ;
    
    text-align: center;
  } 
  .services{
         margin:20px 0px ;
         padding: 10px 10%;
  }
  .col-md-4{
    max-width:350px;
    overflow-x: hidden;
  }
}
.col-md-4{
    box-shadow: 0 0 10px rgba(200, 50, 150, 0.5);
    padding: 1px;
    margin:10px;
    max-width:350px;
    border-radius: 20px;
}
.row{
    z-index: 1;
}
/*footer*/
footer {
  background-color: rgba(0,0,0, 0.7);
  padding: 30px;
  text-align: center;
  color: whitesmoke;
}
footer img {
  border-radius: 50%;
}

.social li {
  display: inline-block;
}

.social img {
  border-radius: 30%;
  filter: grayscale(100%);
  margin-bottom: 10px;
  width: 35px;
  margin-right: 20px;
}
.social img:active {
    filter: grayscale(0%);
}
.social img:hover {
  filter: grayscale(0%);
}

.legal li {
  margin-bottom: 10px;
  list-style-type: none;
  font-size:15px;
  color: #bc519e;
}
.legal li:hover{
    color: blue;
    text-decoration-line: underline;
}
</style>
</head>
<body>
<div class="row" id="container">
    <div class="col-lg-2"id="logo"><a href="index.php"><img class="im"src='logo.png'></a></div>
    <div class="col-lg-9"id="nav">
        <div class="links" id="links">
        <a href="index.php">Home</a>
        <a href="services.php">About Us</a>
        <a href="signupp.php">Register</a>
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a><br>
        </div>
        </div>
        <div class="col-lg-1">
          <div class="menu" onclick="myFunction(this)" >
        MENU<div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        </div>
</div>
    </div>
    <h2 style="margin-top: 20px;"><center><b>Our services<b><center><h2>
        <div class="services">
        <div class="row pt-2 justify-content-center">
        
        <div class="col-md-4 ">
            <img src="service5.jpg" >
            <a href=""><p><b>Destination Guides</b></p></a>
        </div>
        <div class="col-md-4">
        <img src="service1.jpg" >
            <a href=""><p><b>Travel Blog</b></p></a>  
        </div>
        <div class="col-md-4">
        <img src="service2.jpg" >
            <a href=""><p><b>Travel Deals</b> </p></a>
        </div>
    </div>

    <div class="row pt-2 justify-content-center">
        <div class="col-md-4">
            <img src="service3.jpg" >
            <a href=""><p><b>Travel Tips and Advices</b></p></a>
        </div>
        <div class="col-md-4">
        <img src="service4.jpg" >
            <a href=""><p><b>Reviews and Recommendations</b></p></a>  
        </div>
        <div class="col-md-4">
        <img src="travel-hd.jpg" >
            <a href=""><p><b>Photo Garellies and Videos</b></p></a>
        </div>
    </div>
        </div>
        <!----footer---->
        <footer>
        <div class="container fluid">
          <div class="row">
            <div class="col-md-4">
              <h4><b>Traveline</b></h4>
              <img src="logo.png" class="imag" width="50px" alt="Traveline logo">
            </div>
            <div class="col-md-4" id="soc">
              <h4><b>Social media</b></h4>
              <ul class="social" >
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