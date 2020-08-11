<?php
include("connect.php");
if(isset($_POST["changepassword"]))
{
	$inoldpassword=$_POST["oldpassword"];
	$innewpassword=$_POST["newpassword"];
	$inconfirmpassword=$_POST["confirmpassword"];
	
	session_start();
	$s="select * from ride where Username ='".$_SESSION["Username"]."'";
    $rs=mysqli_query($con,$s);
    $value=mysqli_fetch_assoc($rs);
    if($value["Password"]==$inoldpassword)
     {
      if($innewpassword==$inconfirmpassword)
	   {
          $sql="update user set Password='".$innewpassword."' where Username='".$_SESSION["Username"]."'";
          $check=mysqli_query($con,$sql);
          if($check!=0)
          $status="Password Has Been Changed";
	    
          else
          $statusError="Could Not Change";
          }
   else
	{
	$statusError="Password And Confirm Password Should Be Same";
	}
}
else
$statusError="Old Password Does Not Matched";
}
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=password] {
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
      <label for="oldpassword"><b>Enter Old Password</b></label>
      <input type="password" placeholder="Enter Old Password" name="oldpassword" required>

      <label for="newpassword"><b>Enter New Password</b></label>
      <input type="password" placeholder="Enter Drop Location" name="newpassword" required>
	  
	  <label for="confirmpassword"><b>Confirm New Password</b></label>
      <input type="password" placeholder="Enter Drop Location" name="confirmpassword" required>
        
      <button type="submit" name="changepassword">Change Password</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="userdash.php"><button type="button"  class="cancelbtn">Cancel</button></a>
	  <span><?php
if(isset($status))
echo $status;
if(isset($statusError))
echo '<font color="red">'.$statusError."</font>";

?>
</span>
      
	  
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