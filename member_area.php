<?php
	include_once "header.php";	
?>

<div class="bodybox container">
  <h3 class='title'> Member Area </h3>
  <div class="btn btn-success" style="width:10%; margin-left:45%; margin-right:45%; margin-top:10px;"><?php include 'logout.php'; ?></div>
  

<?php
 if(!$_SESSION)
	{
		header("Location:login.php");
	} else{

		echo  "<div>
						
						<h2 class='const'>Dear ". $_SESSION['user_data']['firstname']  .", this page is under construction!</h2>
						<h2 class='const'>Sorry for any inconvenience!</h2>
						<h2 class='const'>In case of shopping, please get in touch via email!</h2>
						<a href='contact.php'><div class='btn btn-success' style='width:12%; margin-left:44%; margin-right:44%;'>Get in touch</div></a>
						<h2 class='const' style='margin-bottom:230px;'>Thank you for your patience!</h2>
			</div>";
	}

   function get_user_details($email){
	global $conn;

	$sql=  "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) > 0){
		
	   $user_data = mysqli_fetch_assoc($result);

	   return $user_data;

	} else {
	  return false;
	}

   }
?>


</div> <!-- End of member-area div -->


<?php
	include_once "footer.php";	
?>