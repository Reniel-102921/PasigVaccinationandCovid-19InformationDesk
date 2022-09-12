<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">


  <style media="screen">
    body{
      margin: 0;
      background-image: url("Image/heading1.jpg");
      background-size: cover;
    }

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
    img{
      height:200px;
      margin-left: 50px;
      margin-top: 10px;
    }

    .cont{
      height: 520px;
      width: 900px;
      position: absolute;
      margin-left: 300px;
      background-color: white;
      border-radius: 5%;
      margin-top: 20px;
    }
    .container{
      background-color: hsl(226, 86%, 65%);
      position: relative;
      width: 500px;
      height: 400px;
      margin-left: 150px;
      margin-top: 90px;
      border-radius: 5px;
    }
    .container p{
      font-size: 30px;
      padding-top: 40px;
      text-align: center;
      margin-left: 20px;
      color: white;
    }
    .cont p{
      text-align: center;
      font-size: 30px;
      padding-top: 10px;
      margin-left: 150px;
    }
    /*division for the button*/
    .button{
      text-align: center;
      width: 310px;
      height: 35px;
      font-family: 'Days One', sans-serif;
      font-size: 20px;
      color: white;
      background-color: #555cbd;
      background-size: cover;
      border-radius: 5px;
      margin-left: 500px;
      margin-top: 30px;
      font-family: 'Oswald', sans-serif;
    }
    .button:hover{
      color: black;
      background-color: hsl(226, 86%, 65%);
      background-size: cover;
      border-radius: 5px;
      z-index: 1;
      transform: scale(1.1);
      color: white;
      font-weight: bold;
    }
    label{
      font-family: 'Libre Baskerville', serif;
      margin-left: 450px;
    }
    input{
      margin-left: 500px;
      height: 30px;
      width: 300px;
      margin-top: 10px;
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
    <div class="cont">
      <p>Send us a Message</p>
      <form action="Contact.php" method="post">
        <label for="name"> Name </label><br>
        <input type="text" name="name" id="name" placeholder="Enter your name"><br><br>
        <label for="email"> Email </label><br>
        <input type="email" name="email" id="email" placeholder="Enter your email address"><br><br>
        <label for="message"> Message: </label><br>
        <input type="text" name="message" id="message" placeholder="Type here your message" style="width:300px; height:90px;"> <br><br>
        <input class="button" type="submit" onclick="Submitmessage()" name="Contact"></button>
      </form>
    </div>

    <div class="container">
      <p>Contact Us</p>
        <img src="Image/contact.png">
      </div>

      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

      <?php
          function Submitmessage($name, $email, $message){
          include("db.php");
          $sql = "INSERT INTO messageconcern(Name, Email, Message) VALUES ('$name', '$email', '$message')";
          $result = $conn->query($sql);

          if ($result==TRUE) {
            echo '<script> swal("Thank you!", "Your message has been Recorded", "success"); </script>';
          }
          else {
            $msg = "Error: " . $sql . "<br>" . $conn->error;
          }
            $conn->close();
          }
          if(isset($_POST['Contact'])){
            echo Submitmessage($_POST['name'], $_POST['email'], $_POST['message']);
          }
       ?>
  </body>
</html>
