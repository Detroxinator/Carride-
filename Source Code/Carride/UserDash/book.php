
<?php
include("connect.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Carride</title>
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

<?php
include("headerdashboard.php");
?>
    <h3>Our prior customers:</h3>
    <p>Testimony of our Customers:</p>
    <?php 
	include("testimony.php");
	?>
  
  </div>
  <div class="main">
    <h2>Your Ride is from <?php  echo $_SESSION["Pickup_loc"]; ?>
 to <?php  echo $_SESSION["drop_loc"];?></h2>

    <h5>Safe, Social, and Free!!!!</h5>
    <div style="background-size:contain;background-repeat:no-repeat;
	            background-image:url('booked.jpg');height:200px;"></div>
    <p>New User?<a href="signup.php">Signup Now</a> and avail exciting Offers.</p>
    <p>Ride booked </p>
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
  <a href="facebook.com"><span><img src="Facebook.png" height="30px" width="30px"></span></a>
  <a href="instagram.com"><span><img src="Instagram-Icon.png" height="30px" width="30px"></span></a>
  <a href="twitter.com"><span><img src="twitter.png" height="30px" width="30px"></span></a>
  
</div>

</body>
</html>
