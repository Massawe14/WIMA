<?php 

  $host = "localhost"; 
  $user = "root"; 
  $pass = ""; 
  $db = "wima_event"; 

  // Connection
  $conn = mysqli_connect("$host","$user","$pass","$db");

  // Check connection
  if (!$conn) {
    echo "<script>alert('Connection Failed.')</script>";
  }

  if (isset($_POST['create'])) {
  	$email = $_POST['email'];
  	$phone_number = $_POST['phone_number'];

  	// generate random id with string length of 10
  	$event_id = substr(md5(time()), 0, 10) . "";

  	$sql = "SELECT count(*) FROM `event` WHERE email = '$email'";
  	$result = mysqli_query($conn, $sql);
    
    if ($email == '' || $phone_number == '') {
  		echo "<script>alert('Please check the missing field')</script>";
  	}
  	// elseif (mysqli_num_rows($result) > 0) {
  	// 	echo "<script>alert('Sorry Email Already Exists')</script>";
  	// }
  	else {
  		$sql = "INSERT INTO `event`(`email`, `phone_number`, `event_id`) VALUES ('$email', '$phone_number', '$event_id')";
	    $result = mysqli_query($conn, $sql);

	    if ($result) {
	    	echo "<script>alert('Data added Successfully'); window.location='form.php?event_id=$event_id';</script>";
	    }
	    else {
	    	echo "<script>alert('Data Insertion Failed')</script>";
	    }
  	}
  }
?>