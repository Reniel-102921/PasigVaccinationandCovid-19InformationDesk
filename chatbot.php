<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasig Registration System</title>
    <link rel="stylesheet" href="bot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style media="screen">
/*for navigator*/
.navigator{
  height: 60px;
  background-image:url("Image/bg.jpg");
  background-size: cover;
  border-bottom: #cfc7be 3px groove;
}
.navigator ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  height: 60px;
  position: absolute;
  margin-left: 440px;
}
.navigator li {
  display:inline-block;
  margin-right: 25px;
}
.navigator li a {
  display: block;
  text-align: center;
  margin-top: 10px;
  padding: 10px 20px;
  text-decoration: none;
  font-size: 20px;
  color: black;
  font-family: 'Aleo', serif;
}
.navigator li a:hover {
  background-color: hsl(226, 86%, 65%);
  color: white;
  border-radius: 15px;
}
</style>

<body>
  <div class="navigator">
    <ul>
      <li><a href="http://localhost/SystemSoftware/Home.php">Home</a></li>
      <li><a href="http://localhost/SystemSoftware/chatbot.php">Chatbot</a></li>
      <li><a href="http://localhost/SystemSoftware/RegistrationForm.php">Register</a></li>
      <li><a href="http://localhost/SystemSoftware/Contact.php">Contact</a></li>
    </ul>
  </div>
    <div id="container">
        <div id="screen">
            <div id="header" >ENCOVBOT <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i> </div>
            <div id="messageDisplaySection">
              <div class="AfterHeader">
                <img class="avatar" src="Image/avatar.png" >
                <h2 class="name"> Encovbot </h2>
                <p class="description"> Medical & Health </p>
              </div>
            </div>
            <!-- messages input field -->
            <div id="userInput">
                <input type="text" name="UserInput" id="UserInput" autocomplete="OFF" placeholder="Type Your Message Here." required>
                <input type="submit" value="Send" id="send" name="send">
            </div>
            </div>
        </div>

    <!-- jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Jquery Start -->
    <script>

        $(document).ready(function(){
            $("#UserInput").on("keyup",function(){

                if($("#UserInput").val()){
                    $("#send").css("display","block");
                }else{
                    $("#send").css("display","none");
                }
            });
        });
        // when send button clicked
        $("#send").on("click",function(e){
            $userMessage = $("#UserInput").val();
            $appendUserMessage = '<div id="messagesContainer"><div class="chat usersMessages">'+ $userMessage +'</div></div>';
            $("#messageDisplaySection").append($appendUserMessage);

            // ajax start
            $.ajax({
                url: "bot.php",
                type: "POST",
                // sending data
                data: {messageValue: $userMessage},
                // response text
                success: function(data){
                    // show response
                    $appendBotResponse = '<div class="chat botMessages">'+data+'</div>';
                    $("#messageDisplaySection").append($appendBotResponse);
                }
            });
            $("#UserInput").val("");
            $("#send").css("display","none");
        });

    </script>
</body>
</html>
