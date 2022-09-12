<!DOCTYPE html>
<html>

<head>
  <title>Pasig Registration System</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bitter:ital@1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
  body {
    margin: 0%;
    background-color: #f0f0f0;
  }

  /*for navigator*/
  .navigator ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    text-align: right;
    height: 60px;
    position: absolute;
    margin-left: 230px;
    margin-top: 20px;
  }

  .navigator li {
    display: inline-block;
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
    background-color: #555cbd;
    color: white;
    border-radius: 15px;
  }

  /*for the heading*/
  .heading {
    width: 100%;
    height: 660px;
    background-image: url("Image/heading.jpg");
    background-size: cover;
    text-align: left;
  }

  .headlogo img {
    width: 100px;
    position: absolute;
    text-align: left;
    margin-left: 70px;
    margin-top: 20px;
  }

  .headContainer {
    width: 700px;
    height: 400px;
    display: inline-block;
    margin-top: 150px;
    border-radius: 5px;
  }

  .headContainer img {
    height: 190px;
    margin-left: 140px;
  }

  .headContainer button {
    width: 100px;
    height: 40px;
    margin-left: 250px;
    border-radius: 5px;
    border-color: white;
    background-color: #555cbd;
    font-size: 15px;
    color: white;
    font-family: 'Aleo', serif;
  }

  .heading button:hover {
    z-index: 1;
    transform: scale(1.1);
    background-color: hsl(226, 86%, 65%);
    border-radius: 6px;
    color: white;
  }

  .case {
    height: 600px;
  }

  .cases {
    height: auto;
    padding-left: 50px;
    margin-top: 20px;
    margin-left: 70px;
  }

  .button {
    border: 1px #cfc7be groove;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 9px;
    padding-top: 5px;
    width: 100px;
    color: white;
    text-align: center;
    border-radius: 5px;
    background-color: #555cbd;
    text-decoration: none;
    margin-left: 250px;
    font-weight: bold;
  }

  .button:hover {
    background-color: hsl(226, 86%, 65%);
    color: white;
    font-weight: bold;
  }

  .cases input {
    margin-left: 130px;
  }

  .case h1 {
    text-align: center;
    color: #555cbd;
  }

  table {
    width: 550px;
    height: 70px;
    margin-top: 20px;
    margin-left: 30px;
    text-align: center;

  }

  th {
    background-image: url("Image/bg.jpg");
  }

  td {
    background-color: white;
  }

  .cases2 {
    height: auto;
    margin-top: 10px;
    text-align: center;
    margin-top: 50px;
  }

  .cases2 table {
    margin-left: 400px;
  }

  .scrolling {
    width: auto;
    height: 300px;
    overflow-y: scroll;
    font-size: 20px;
  }

  /*how to prevent the spread of covid*/
  .guideline {
    background-image: url("Image/bg.jpg");
    background-size: cover;
    height: 610px;
    text-align: center;
    padding-top: 30px;
  }

  /*title for Prevention*/
  .title img {
    width: 650px;
    height: auto;
  }

  .way img {
    display: inline-block;
    width: 240px;
    height: auto;
    margin-top: 20px;
    margin-left: 5px;
    margin-right: 5px;
  }

  .way img:hover {
    z-index: 1;
    transform: scale(1.2);
    border: #f0f0f0 1px solid;
    transition-duration: 2s;
  }

  .about {
    text-align: center;
    height: 500px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-top: 40px;
    background-color: #f0f0f0;
    background-size: cover;
  }

  .about img {
    width: 1100px;
    height: auto;
  }

  .about p {
    height: 130px;
    width: 240px;
    display: inline-block;
    margin-left: 60px;
    margin-right: 60px;
    margin-bottom: 20px;
    vertical-align: text-top;
    font-family: 'Aleo', serif;
  }

  .contact {
    height: 250px;
    background-image: url("Image/contactbg.jpg");
    background-size: cover;
    border-top: #d6d6d6 5px solid;
    padding-left: 20px;
    text-align: center;
  }

  .icon {
    padding-top: 50px;
  }

  .icon img {
    height: 40px;
    margin-right: 9px;
  }

  .info {
    font-size: 15px;
    color: white;
    font-family: 'PT Serif', serif;
  }
</style>

<body>
  <div class="navigator">
    <ul>

      <li><a href="http://localhost/SystemSoftware/Home.php">Home</a></li>
      <li><a href="http://localhost/SystemSoftware/RegistrationForm.php">Register</a></li>
      <li><a href="http://localhost/SystemSoftware/Contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="headlogo">
    <img src="Image/logo.png">
  </div>
  <div class="heading">
    <div class="headContainer">
      <img src="Image/letter.png"><br>
      <a class="button" href="http://localhost/SystemSoftware/chatbot.php">Chatbot</a>
    </div>
  </div>


  <!--cases per brgy-->
  <div class="case">
    <h1>Covid-19 Cases Monitoring Report</h1>
    <div class="cases2">
      <p>Total Covid-19 Cases Summary Report<br> As of Jan. 04, 2022</p>
      <table border="1px" cellspacing="0" colspan="0">
        <tr>
          <th>CONFIRMED CASES</th>
          <th>RECOVERD CASES</th>
          <th>DEATH CASES</th>
          <th>ACTIVE CASES</th>
        </tr>
        <tr>
          <td>59907</td>
          <td>57981</td>
          <td>1470</td>
          <td>456</td>
        </tr>
      </table>
    </div>
    <div class="cases">
      Cases per Barangay <br> As of Jan. 04, 2022
      <!--search cases per brgy-->
      <div class="scrolling">
        <table border="1px" cellspacing="0" colspan="0" style="width:1000px; height:1000px;">
          <tr>
            <th>BARANGAY NAME</th>
            <th>CONFIRMED CASES</th>
            <th>RECOVERD CASES</th>
            <th>DEATH CASES</th>
            <th>ACTIVE CASES</th>
          </tr>
          <?php
          include('db.php');
          $sql = "SELECT BrgyName, ConfirmedCases, DeathCases, RecoveredCases, ActiveCases FROM covidcases";
          $result = $conn->query($sql);

          while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo "<td>" . $row['BrgyName'] . "</td>";
            echo "<td>" . $row['ConfirmedCases'] . "</td>";
            echo "<td>" . $row['DeathCases'] . "</td>";
            echo "<td>" . $row['RecoveredCases'] . "</td>";
            echo "<td>" . $row['ActiveCases'] . "</td>";
            echo '</tr>';
          }
          $conn->close();
          ?>
        </table>
      </div>
    </div>
  </div>
  <!--how to prevent the spread of covid-->

  <div class="guideline">
    <div class="title">
      <img src="Image/title.png">
    </div>
    <div class="way">
      <img src="Image/gl1.png">
      <img src="Image/gl2.png">
      <img src="Image/gl3.png">
      <img src="Image/gl4.png">
      <img src="Image/gl5.png">
    </div>
  </div>
  <!--about the website-->
  <div class="about">
    <img src="Image/amv.png"><br>
    <p>Many people got misinformed due to fake news therefore this system will provide a creadible information with reliable resources.
      It is a user friendly that allows the user to communicate and get information through the chatbot. The resident of the Pasig City may
      also register here for their scheduling on their vaccine.</p>
    <p>To provide an information that will help the people to address their question about the Covid-19. All information provided was came from
      Department of Health (DOH). This allow the people to register for the Pasig City vaccine in an easy and convinient way through online form.</p>
    <p>Many people will be vaccinated and will be well-infomed about the health protocol and guideline for the Covid-19.</p>
  </div>

  <!--Contact us-->
  <div class="contact">
    <div class="icon">
      <img src="Image/fb.png">
      <img src="Image/call.jpg">
      <img src="Image/map.png">
    </div>
    <div class="info">
      <h4>Pasig City Public Information Office</h4>
      <h4>8643-000 or 09208905313</h4>
      <h4>Caruncho Ave, Barangay San Nicolas, Pasig, 1600 Metro Manila</h4>
    </div>
    <!-- comment -->
</body>

</html>