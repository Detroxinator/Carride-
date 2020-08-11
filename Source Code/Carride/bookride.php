<?php
include("connect.php");
if(isset($_POST["book"]))
{
	$inpickup=$_POST["pickup"];
	$indrop=$_POST["drop"];
	
	session_start();
	$sql="INSERT INTO book VALUES ('".$inpickup."','".$indrop."')";
	$rs=mysqli_query($con,$sql);
	$value=mysqli_fetch_assoc($rs);
	$_SESSION["drop_loc"]=$_POST["drop"];
	$_SESSION["Pickup_loc"]=$_POST["pickup"];
    
    header("location:book.php");
}
	
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}




.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}


.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}


.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}


@media screen and (max-width: 300px) {
 
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body onload="document.getElementById('id01').style.display='block'" style="width:auto;">





<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php $_PHP_SELF ?>" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="pickup"><b>Pickup From</b></label>
      <input type="text" placeholder="Enter Pickup Location" name="pickup" required>

      <label for="drop"><b>Drop Location</b></label>
      <input type="text" placeholder="Enter Drop Location" name="drop" required>
        
      <button type="submit" name="book">Book</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="1.php"><button type="button"  class="cancelbtn">Cancel</button></a>
      
	  
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>