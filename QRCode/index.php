<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration | QR Code Generator</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/wima.png" type="image/ico">
    <meta name="description" content="QR Code Generator Developed By Developer Ramadhani Massawe .It's Free Online QR Code Generator to make your own QR Codes.No sign-up required. Create unlimited non-expiring free QR codes for a website URL, YouTube video etc.">
    <meta name="keywords" content="qr code,QR CODE,QR,CODE,HTML, CSS, XML, JavaScript,php,mysql,bootstrap">
    <meta name="author" content="Developer Ramadhani Massawe">
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
input[type=text], input[type=password] {
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

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
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

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
     /* Hidden by default */
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

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
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

/* Add Zoom Animation */
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

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
#qrSucc
{
  width: 380px;
  height: 800px;
  margin:  8px 8px 20px 8px;
  text-align: center;
  overflow: auto;
  position: relative;
  display: flex;
  flex-direction: column;
}
#result {
    width: 380px;
    height: 660px;
    margin-bottom: 20px !important;
    background: white;
    position:  relative;
    display: flex;
    flex-direction: column;
    padding: 0 !important;
    margin: 0 !important;
}
#img {
    width: 380;
    height: 660px;
    position:  absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0;
    padding: 0 !important;
    margin: 0 !important;
}
#contents {
    width: 380px;
    height: 660px;
    position:  absolute;
    z-index: 1;
    padding: 0 !important;
    margin: 0 !important;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
#name {
    margin-bottom: -60px;
    align-items: center;
    justify-content: center;
}
#qrSucc a
{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px;
    border: none;
    cursor: pointer;
    width: 310px;
    text-align: center;
    text-decoration: none;
}
footer {
    width: 100vw;
    height: auto;
    background-color: #111;
    text-align: center;
    justify-content: center;
}
.footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.footer-content h4 {
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 3rem;
    margin-bottom: 30px;
    color: #fff;
    position: relative;
}
.footer-content h4::before {
    content: '';
    position: absolute;
    bottom: -10px;
    background-color: #fcce0b;
    height: 2px;
    box-sizing: border-box;
    width: 70px;
}
.social-links {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;
}
.social-links li {
    margin: 0 10px;
}
.social-links a img {
    width: 120px;
    height: 70px;
}
.footer-bottom {
    background-color: #fcce0b;
    width: 100vw;
    padding: 30px 0;
    text-align: center;
}
.footer-bottom p {
    font-size: 14px;
    word-spacing: 2px;
    text-transform: capitalize;
    text-align: center;
    justify-content: center;
    margin-bottom: 20px;
}
</style>
</head>
<body>
    <?php 
      include "meRaviQr/qrlib.php";
      include "config.php";
      if(isset($_POST['create']))
      {
        $fullname =  $_POST['fullname'];
        $phone_number = $_POST['phone_number'];
        $company_name = $_POST['company_name'];
        $position = $_POST['position'];
        $qrImgName = "$fullname".rand();
        if($fullname == "" && $phone_number == "" && $company == "" && $position == "")
        {
          echo "<script>alert('Please Fill all fields');</script>";
        }
        elseif($fullname == "")
        {
          echo "<script>alert('Please Enter Your Full Name');</script>";
        }
        elseif($phone_number == "")
        {
          echo "<script>alert('Please Enter Your Phone Number');</script>";
        }
        elseif($company_name == "")
        {
          echo "<script>alert('Please Enter Your Company Name');</script>";
        }
        elseif($position == "")
        {
          echo "<script>alert('Please Enter Your Postion');</script>";
        }
        else
        {
          $qrimage = $qrImgName.".png";
          $qrs = QRcode::png($qrimage,"userQr/$qrImgName.png","H","3","3");
          $workDir = $_SERVER['HTTP_HOST'];
          $qrlink = $workDir."/qrcode".$qrImgName.".png";
          $insQr = $meravi->insertQr($fullname,$phone_number,$company_name,$position,$qrimage,$qrlink);
          if($insQr==true)
          {
            echo "<script>alert('Thank You $fullname. Success Create Your QR Code'); window.location='index.php?success=$qrimage&fname=$fullname';</script>";
          }
          else
          {
            echo "<script>alert('cant create QR Code');</script>";
          }
        }
     }
    ?>
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc" class="convert">
      <div id="result" class="modal-content animate container"> 
        <img id="img" src="assets/wima_gala_invitation.png" />  
        <div id="contents">
          <img id="qr" src="userQr/<?php echo $_GET['success']; ?>" alt="">
          <p id="name" style="font-family: 'FSLucasPro'; color: white; font-weight: 200; font-size: 12px;"><?php echo strtoupper($_GET['fname']); ?></p>
        </div>
      </div>
      <div id="output" hidden></div>
      <a class="a" href="">Download Now</a>
   </div>
  <?php
}
else
{
  ?>
<div id="id01" class="modal">
  <form class="modal-content animate" method="post" enctype="multipart/form-data">
    <div class="container">
      <h2 align="center" style="text-transform: uppercase; color: #fcce0b;">You Are Welcome To WIMA Event</h2>
      <label for="fname"><b>Full Name</b></label>
      <input type="text" name="fullname" value="<?php if(isset($_POST['create'])){ echo $_POST['fullname']; } ?>" data-max="3" onkeyup="check(this);" placeholder="Enter Your Fullname" required/>
      <label for="phone_number"><b>Phone Number</b></label>
      <input type="text" name="phone_number" value="<?php if(isset($_POST['create'])){ echo $_POST['phone_number']; } ?>" placeholder="Enter Your Phone Number" required/>
      <label for="company"><b>Company Name</b></label>
      <input type="text" name="company_name" value="<?php if(isset($_POST['create'])){ echo $_POST['company_name']; } ?>" placeholder="Enter Your Company Name" required/> 
      <label for="position"><b>Position</b></label>
      <input type="text" name="position" value="<?php if(isset($_POST['create'])){ echo $_POST['position']; } ?>" placeholder="Enter Your Position" required/>
      <input type="submit" value="Submit" name="create">
    </div>
  </form>
    <?php 
}
   ?>
   <footer>
        <div class="footer-content">
            <h4>Powered By</h4>
            <ul class="social-links">
                <li><a href="https://imperialinnovations.co.tz"><img src="assets/imperialinnovations.png"></a></li>
                <li><a href="https://www.imc.co.tz"><img src="assets/imc.png"></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 Imperial Innovations</p>
        </div>
    </footer>
</div>
<script src="./html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.3/html2canvas.js"></script>
<script>
    const elm = document.querySelector("#result");
    html2canvas(elm).then(function (canvas) {
        document.querySelector("#output").append(canvas);
        let cvs = document.querySelector("canvas");
        let a = document.querySelector(".a")
        a.href = cvs.toDataURL();
        a.download = "invation.png";
    });
</script>
<script>
    function check(obj) {
        var max = obj.getAttribute("data-max");
        if (parseInt(obj.value) > parseInt(max)) {
            alert("Exceed the maximum number");
        }
    }
</script>
</body>
</html>
