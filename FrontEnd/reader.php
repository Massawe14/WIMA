<?php 
  date_default_timezone_set("Africa/Dar_es_Salaam");
  include('config/db.php');

  $qrcode = $_POST['code']; 

  $query = "SELECT * FROM qr_codes WHERE qrImage='$qrcode' LIMIT 1";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $full_name = "";
    $phone_number = "";
    $company_name = "";
    $position = "";

    foreach ($result as $row) {
      $full_name = $row['full_name'];
      $phone_number = $row['phone_number'];
      $company_name = $row['company_name'];
      $position = $row['position'];
    }

    if ($full_name != "" && $phone_number != "" && $company_name != "" && $position != "") {

      if (date("d-m-Y") === "13-12-2021") {
        $query = "INSERT INTO `monday`(`full_name`, `branch_name`, `zone`) VALUES ('$full_name', '$branch_name', '$zone')";
        $result = mysqli_query($conn, $query);
        if ($result) {
          echo '{"full_name": "' .$full_name . '"}';
        }
        else{
          echo "Not attend";
        }
      }else if (date("d-m-Y") === "14-12-2021") {
        $query = "INSERT INTO `eventlist`(`full_name`, `branch_name`, `zone`) VALUES ('$full_name', '$branch_name', '$zone')";
        $result = mysqli_query($conn, $query);
        if ($result) {
          echo '{"full_name": "' .$full_name . '"}';
        }
        else{
          echo "Not attend";
        }
      }else{
        echo '{"full_name": "' .$full_name . '"}';
      }
    }
  	else {
    	echo '{"error": "Not Found"}';
    }
  	exit();
  }
  else{
  	echo '{"error": "Not Authorized"}';
  }
?>