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
  	$table_number = $_POST['table_number'];
  	$tickets = $_POST['tickets'];

  	// generate random id with string length of 10
  	$event_id = substr(md5(time()), 0, 10) . "";

  	$sql = "SELECT * FROM `event` WHERE email = '$email'";
  	$result = mysqli_query($conn, $sql);
    
    if ($email == '' || $table_number == '' || $tickets == '') {
  		echo "<script>alert('Please check the missing field')</script>";
  	}
  	elseif (mysqli_num_rows($result) > 0) {
  		echo "<script>alert('Sorry Email Already Exists');
  		location='form.php</script>";
  	}
  	else {
  		$sql = "REPLACE INTO `event`(`email`, `table_number`, `tickets`, `event_id`) VALUES ('$email', '$table_number', '$tickets', '$event_id')";
	    $result = mysqli_query($conn, $sql);

	    if ($result) {
	    	echo "<script>alert('Data added Successfully'); window.location='form.php?event_id=$event_id&table_number=$table_number&tickets=$tickets';</script>";
	    }
	    else {
	    	echo "<script>alert('Data Insertion Failed'); window.location='form.php</script>";
	    }
  	}
  }
?>