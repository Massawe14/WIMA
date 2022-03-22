<?php 
  date_default_timezone_set("Africa/Dar_es_Salaam");
  $host = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $db = "wima_event"; 

  // Connection
  $conn = mysqli_connect("$host","$username","$password","$db");

  // Check connection
  if (!$conn) {
    die(mysqli_connect_error($conn));
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code Scanner</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/index.css" type="text/css">
    <link rel="stylesheet" href="style/fonts.css" type="text/css">
    <link rel="shortcut icon" href="images/wima.png" type="image/ico">
    <meta name="description" content="WIMA QR Code Scanner FrontEnd">
    <meta name="robots" content="noindex,follow" />
</head>
<body id="app-main">
    <div class="body-container">
        <div class="child-container" style="background: #fcce0b; color: #363d93;">
            W
        </div>
        <div class="child-container" style="background: #363d93; color: #fcce0b;">
            I
        </div>
        <div class="child-container" style="background: #363d93; color: #fcce0b;">
            M
        </div>
        <div class="child-container" style="background: #fcce0b; color: #363d93;">
            A
        </div>
    </div>
    <div class="btn-container">
        <h3 class="greeting">WELCOME TO WIMA EVENT</h3>
    </div>
    <div class="btn-container" style="color: #363d93;">
        WOMEN IN </br>
        MANAGEMENT </br>
        AFRICA
    </div>
    <div id="output_dialog">
        <span id="full_name_text"></span>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">

        try {  
            let speech = new SpeechSynthesisUtterance();
            speech.lang = "en";
            speech.rate = 1;
            speech.pitch = 1;
            speech.volume = 100;

            let voices = [];
            window.speechSynthesis.onvoiceschanged = () => {
                voices = window.speechSynthesis.getVoices();
                console.log("voices: ",voices);
                if (voices.length > 0) {
                    speech.voice = voices.length > 1 ? voices[1] : voices[0];
                } 
            };
            var txt = "";
            document.addEventListener("keypress", function(event) {
                var char = event.key;
                if(char == "Enter") {
                    var code = txt;
                    console.log("qr code", txt);
                    txt = "";
                    $.ajax({
                      method: "POST",
                      url: "reader.php",
                      data: { code: code }
                    }).done(function( response ) {
                        try {  
                            console.log(response);
                            var obj = JSON.parse(response);
                            if (obj.error) {
                                console.log('error: ', obj.error);
                                return;
                            }
                            const full_name = obj.full_name;
                            const phone_number = obj.phone_number;
                            const company_name = obj.company_name;
                            console.log('fullname: ', full_name);
                            console.log('phone number: ', phone_number);
                            console.log('company name: ', company_name);
                            console.log('position: ', position);
                            showOutput(full_name, phone_number, company_name);
                        } catch (e) {
                            console.log(e);
                        }
                    });
                }else {
                    txt += char;
                }
            });
            function showOutput(full_name, phone_number, company) {
                speech.text = "Welcome";
                window.speechSynthesis.speak(speech);
                var dialog = document.getElementById("output_dialog");
                var full_name_text = document.getElementById("full_name_text");
                full_name_text.innerHTML = full_name;
                dialog.style.display = "block";
                setTimeout(() => {
                    full_name_text.innerHTML = "";
                    dialog.style.display = "none";
                }, 3000);
            }
        } catch (e) {
            console.log(e);
        }
    </script>
    <script src="routes/bubble.js" type="text/javascript"></script>
</body>
</html>