<?php 
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>User|Carride</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


.header {
  padding: 80px;
  text-align: center;
  background: #1a6c9c;
  color: white;
}


.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


.navbar a.right {
  float: right;
}


.navbar a:hover {
  background-color: #ddd;
  color: black;
}


.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}



.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}


.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}



.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}


@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
</style>
</head>
<body>

<div class="header">
  <h1>CARRIDE</h1>
  <p>BOOK a car ride or HOST a Car ride now!</p>
</div>

<div class="navbar">
  <a href="../index.php">HOME</a>
  <a href="bookride.php">BOOK A RIDE</a>
  <a href="hostride.php">HOST A RIDE</a>
  <a href="logout.php" class="right"><button class="button">Logout</button></a>
  <a href="updateprofile.php" class="right"><button class="button">Update Profile</button></a>
  
</div>

<div class="row">
  <div class="side">
    <h2>Welcome <?php session_start();echo $_SESSION["Username"]; ?></h2>
    <h5>Your Location:</h5>
    <div  style="height:200px;background-size:contain;background-repeat:no-repeat;
	            background-image:url('map.png');"></div>
    <p><a href="../bookride.php" style="text-decoration:none;">BOOK A RIDE</a> now and get a chance to be in the next Roadies.Hurry and Be the lucky winner!!</p>
    <h3>Our prior customers:</h3>
    <p>Testimony of our Customers:</p>
    <?php
	include("testimony.php");
	?>
  
  </div>
  <div class="main">
    <h2>BOOK YOUR RIDE FOR FREE</h2>
    <h5>Safety, Social, and Free!!!! July 2, 2019</h5>
    <div style="background-size:contain;background-repeat:no-repeat;
	            background-image:url('../Ford-mustang.jpg');height:200px;"></div>
    <p>Book Now..</p>
    <p>Carride let you book a ride to your destination for free.Join up the carride community and get the benifits now.
	   Showcase how can you be helpful or greatful to others and get a free ride.</p>
    <br>
    <h2>HOST A RIDE AND EARN</h2>
    <h5>Earn Credit and Get Discounts everywhere you go!!!!, July  2, 2019</h5>
    <div  style="background-size:contain;background-repeat:no-repeat;background-image:url('../ferrari.jpg');height:200px;"></div>
    <p>Host Now..</p>
    <p>Become a Carrider now and get the benifits for free by hosting your ride with other. Get various benifits by becoming a carrider from us.</p>
  </div>
</div>

<div class="footer">
  <h2>CONNECT WITH US </h2><br>
  <a href="facebook.com"><span><img src="../Facebook.png" height="30px" width="30px"></span></a>
  <a href="instagram.com"><span><img src="../Instagram-Icon.png" height="30px" width="30px"></span></a>
  <a href="twitter.com"><span><img src="../twitter.png" height="30px" width="30px"></span></a>
  
</div>

</body>
</html>
