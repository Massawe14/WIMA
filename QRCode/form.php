<?php  
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1">
	<meta name="description" content="QR Code Generator Developed By Developer Ramadhani Massawe .It's Free Online QR Code Generator to make your own QR Codes.No sign-up required. Create unlimited non-expiring free QR codes for a website URL, YouTube video etc.">
    <meta name="keywords" content="qr code,QR CODE,QR,CODE,HTML, CSS, XML, JavaScript,php,mysql,bootstrap">
    <meta name="author" content="Developer Ramadhani Massawe">
	<title>QR Code Form</title>
	<link rel="shortcut icon" href="assets/wima.png" type="image/ico">
	<style>
		body {
		    font-family: 'FSLucasPro';
		    display: flex;
		    flex-direction: column;
		    justify-content: center;
		    align-items: center;
		    overflow: auto;
		}

		@font-face {
		    font-family: 'FSLucasPro';
		    src: url('fonts/FSLucasPro-Bold.ttf') format('truetype');
		    font-weight: normal;
		    font-style: normal;
		}

		/* Full-width input fields */
		input[type=text], input[type=number],
		input[type=email] {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}

		/* Set a style for all buttons */
		input[type=submit]{
		    background-color: #fcce0b;
		    color: #363d93;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    cursor: pointer;
		    width: 100%;
		    text-align: center;
		    text-decoration: none;
		    text-transform: uppercase;
		}

		input[type=submit]:hover {
		    opacity: 0.8;
		}

		.container {
		    padding: 30px;
		    align-items: center;
		    justify-content: center;
		}
	</style>
</head>
<body>
	<div>
		<form action="create.php" method="POST">
			<div class="container">
		      <label for="email"><b>Email</b></label>
		      <input type="email" name="email" value="<?php if(isset($_POST['create'])){ echo $_POST['email']; } ?>" placeholder="Enter Your Email" required/>
		      <label for="table_number"><b>Table Number</b></label>
		      <input type="number" name="table_number" value="<?php if(isset($_POST['create'])){ echo $_POST['table_number']; } ?>" placeholder="Enter Your Table Number" required/>
		      <label for="tickets"><b>Tickets</b></label>
		      <input type="number" name="tickets" value="<?php if(isset($_POST['create'])){ echo $_POST['tickets']; } ?>" placeholder="Number of Tickets" required/>
		      <label for="link"><b>Your Link</b></label>
		      <input type="text" value="<?php echo 'http://localhost/WIMA/QRCode/index.php?event_id='.$_GET['event_id']; ?>" readonly/>
		      <input type="submit" value="Submit" name="create">
		    </div>
		</form>
	</div>
</body>
</html>