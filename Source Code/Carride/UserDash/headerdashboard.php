<div class="navbar">
  <a href="userdash.php">HOME</a>
  <a href="bookride.php">BOOK A RIDE</a>
  <a href="hostride.php">HOST A RIDE</a>
  <a href="logout.php" class="right"><button class="button">Logout</button></a>
  <a href="" class="right"><button class="button">Update Profile</button></a>
  
</div>

<div class="row">
  <div class="side">
    <h2>Welcome <?php session_start();echo $_SESSION["Username"]; ?></h2>
    <h5>Your Location:</h5>
    <div  style="height:200px;background-size:contain;background-repeat:no-repeat;
	            background-image:url('map.png');"></div>
    <p><a href="../bookride.php" style="text-decoration:none;">BOOK A RIDE</a> now and get a chance to be in the next Roadies.Hurry and Be the lucky winner!!</p>