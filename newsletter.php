<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

  include 'connect.php';
  
  $first=$_POST['firstname'];
  $last=$_POST['lastname'];
  $email=$_POST['emailadd'];

  $sql="insert into `credentials` (firstname,lastname,emailadd)
  values('$first','$last', '$email')";
  
  $result=mysqli_query($con,$sql);

//   if($result){
//     echo "Data inserted into 128db";
//   }
//     else
//     {
//       die(mysqli_error($con));
//     }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urban Uproar</title>
    
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gasoek+One&family=Oswald:wght@700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalnia:wght@500&family=Montserrat:wght@500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>
<style>
    body{
    scroll-behavior: smooth;
    background-color: #9c9a9a;
}

.form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
} 

.btn-success { background-color: green;
} 

.btn-success:hover { background-color: yellow;
    color: black ;
    border-color: yellow;
    box-shadow: 0 0 0 0.2rem yellow;
} 

/* Blog Start: */
.maincontent{
    background-color: #636262;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}


.maincontent h1{
    color: #ffff00;
    padding-top:30px;
    font-family: 'Oswald', sans-serif;
    font-size: 24px;
    font-weight: 900;
    text-align: center;
}

.articles{
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;    
    margin: 50px;


}

.articles h4{
    font-size: 12px;
    color: #ffff00;
    text-align: left;
}
.articles img{
    height: 200px;
    width:  350px;
    padding-right: 50px;
    margin-bottom: 10px;

    
}
/* Blog End : */

/* footercss: */
ul{
    list-style: none;
    color: #000000;
}

.footercontainer{
    margin-top: 15px;
    background-color: black;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
    flex-wrap: wrap;
    max-width: 100%;
}

.item1{
    text-align: center;
    color: #ffff00;
    flex-shrink: 0;
    align-self: flex-start;
    font-family: 'Kalnia', serif;
    font-size: 55px;
    padding-top: 40px;
    padding-left: 10px;
    padding-right: 10px;
}

.item2{
    font-size: 35px;
    font-family: 'Oswald', 'Poppins', sans-serif; 
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 140px;
}

.item3{
    font-size: 35px;
    font-family: 'Oswald', 'Poppins', sans-serif; 
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 10px;
}

i{
    font-size: 35px;
    padding: 10px;
    text-decoration: none;
}

.footerimage{
    height: 400px;
    width: 400px;
    position: relative;
    bottom: 90px;
}

footer a{
    color:#ffff00;
    text-decoration: none;
    font-family: 'Oswald', 'Poppins', sans-serif;
    font-size: 35px;
    line-height: 0px;
}

footer a:hover{
    color: white;
}
/* footer css end: */

/* Header:  */
header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10%;
    background-color: #242528;
    font-family: 'Montserrat', sans-serif;
    font-weight: 900;
    color: #ffef00;
    font-size: 20px;
    height: 90px;
}

header li,a{
    font-family: 'Montserrat', sans-serif ;
    font-weight: 500;
    font-size: 16px;
    color: white;
    text-decoration: none;
    line-height: 90px;
}

.nav_links{
list-style: none;
}

.nav_links li{
    display: inline-block;
    padding: 0px 20px;
}

.nav_links li a:hover{
    color: #ffff00;
}
/* header end: */
</style>



<!-- Header:   -->
<header>
        <img src="UrbanUproar_Logo.png" alt="logo" width="200px" height="200px"> <span style="position: absolute; left: 350px;"> Urban Uproar </span>
        <nav>
        <div class="nav_links">
            <ul>
                <li #> <a href="newsletter.php"> Home </a></li>
                <li> <a href="blogs.html"> Blogs </a></li>
                <li> <a href="aboutus1.html"> About Us </a></li>

            </ul>
        </div>
        </nav>
    </header>
<!-- Header End:   -->

<!-- Blogs Start : -->
<div class="maincontent">

        <h1>Welcome to Urban Uproar, Lets have an insight on the current events happening around the world !</h1>

    <div class="articles">
            <div class="article1"> <a href="blog1.html"> <img src="1.jpeg" alt="article1"> </a>
                <h4>Arabs Protested For Gaza,
                    Their Governments Idle </h4> </div>

            <div class="article2"> 
                <a href="blog2.html"> <img src="2.jpeg" alt="article1"> </a>
            <h4>Digital Revolution Has Changed How People Live & Work!</h4>
            </div>

            <div class="article3"> 
                <a href="blog3.html"> <img src="3.jpeg" alt="article1"> </a>
            <h4>Can International Law Rescue Gaza & Kashmir?</h4>
            </div>

            <div class="article4"> 
                <a href="blog4.html"> <img src="4.jpeg" alt="article1"> </a>
            <h4>How Countries Should Respond to the Strong Dollar</h4>
            </div>

            <div class="article5"> 
                <a href="blog5.html"> <img src="5.jpeg" alt="article1"> </a>
            <h4>24 Requests To International Travelers & Pakistani Tourists</h4>
            </div>
</div>
</div>
<!-- Blogs End -->

<!-- Form: -->
<div class="container mt-5">

  <div class="container ml-100">
<h3 class="text-center"> Welcome, Please enter your information to Subscribe to our Daily Newsletter ! <br><br><br> </h3>
</div>

<form action="newsletter.php" method="post">


<div class="mb-3">First Name
  <input type="text" class="form-control" placeholder="Bill" name="firstname">
</div>

  <div class="mb-3">Last Name
  <input type="text" class="form-control" placeholder="Gates" name="lastname">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Someone@example.com" name="emailadd">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

<button type="submit" class="btn btn-success w-100">Subscribe </button>
</form>   
</div>
<!-- Form End -->

<!-- Footer -->
<footer>
<div class="footercontainer">
            <div class="item1">
                <h1>Urban Uproar</h1>
                <img class="footerimage" src="UrbanUproar_Logo.png" alt="Logo">
            </div>

                <div class="item2">
                    <ul>
                        <li><a href="newsletter.php"> Home</a></li>
                        <li><a href="blogs.html"> Our Blogs</a></li>
                        <li><a href="aboutus1.html"> About Us</a></li>
                        <li><a href="contactus.html"> Contact Us</a></li>
                        <li><a href="privacy.html"> Privacy Policy</a></li>
                    </ul>
                </div>
                
                <div class="item3">
                    <h2><span style="color: #ffff00;">Follow Us</span></h2>
                    <div class="social_links">
                        <a href="https.www.facebook.com" target="_blank">    <i class="fab fa-facebook-f">   </i> </a>
                        <a href="https.wwww.instagram.com" target="_blank">   <i class="fab fa-twitter">      </i> </a>
                        <a href="https.wwww.youtube.com" target="_blank">     <i class="fab fa-instagram">    </i> </a>
                        <a href="https.wwww.linkedin.com" target="_blank">    <i class="fab fa-linkedin-in">  </i> </a>
                    </div>
                </div>
</div>
</footer>
<!-- Footer End -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>