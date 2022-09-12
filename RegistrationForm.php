<!DOCTYPE>
<html>

  <title>Pasig Registration System</title>

      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Quattrocento&family=Vidaloka&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Julius+Sans+One&display=swap" rel="stylesheet">


    <style>

      body{
        margin: 0;
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
      .cover{
        background-image: url("Image/heading1.jpg");
        background-size: cover;
        height: 1030px;
        padding-top: 20px;
      }
      .heading{
        height:auto;
        width: 760px;
        text-align: center;
        border:#cfc7be 3px groove;
        border-bottom: none;
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        padding-top: 20px;
      }
      .heading h2{
        font-size: 30px;
        text-align: center;
        color: black;
        padding-left: 20px;
        font-family: 'Mate SC', serif;
      }
      /*container for the data*/
      .container{
        background-color: white;
        padding-top: 20px;
        width: 760px;
        height: 800px;
        margin-left: auto;
        margin-right: auto;
        border:#cfc7be 3px groove;
        border-top: none;
      }
      .data{
        padding-left: 30px;
        padding-top: 30px;
        font-size: 17px;
        font-family: 'Vidaloka', serif;
      }
      .data input{
        width: 270px;
        height:40px;
        margin-right: 70px;
        margin-left: 20px;
        font-family: 'Noto Serif', serif;
        border-radius: 5px;
        border: 2px #cfc7be inset;
      }
      .data select{
        width: 270px;
        height: 40px;
        margin-right: 70px;
        margin-left: 20px;
        border-radius: 5px;
        font-family: 'Noto Serif', serif;
        border: 2px #cfc7be inset;
      }
      .container label{
        width: 190px;
        display: inline-block;
        margin-right: 150px;
        margin-left: 20px;
      }/*division for the button*/
      .button{
        text-align: center;
        width: 600px;
        height: 40px;
        font-family: 'Days One', sans-serif;
        font-size: 20px;
        color: #ffffff;
        background-image: url("Image/fbg.jpg");
        background-size: cover;
        border-radius: 5px;
        margin-left: 80px;
        margin-top: 30px;
      }
      .button:hover{
        color: #ffffff;
        background-image: url("Image/fbg1.jpg");
        background-size: cover;
        border-radius: 5px;
        z-index: 1;
        transform: scale(1.1);
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
    <div class="cover">
      <form action="RegistrationForm.php" method="post">
        <div class="heading">
          <img src="Image/logo.png" style="width:100px;">
          <img src="Image/resbakuna.png" style="width:200px;">
          <img src="Image/pasiglogo.png" style="width:70px;">
          <h2>Covid-19 Vaccine Registration</h2>
          <img src="Image/fbg1.jpg" style="width:700px; height:5px">
        </div>
        <div class="container">
          <div class="data">
            <label for="priorityGroup">Priority Group</label>
            <label for="SubpriorityGroup">Sub-Priority Group</label><br>
            <select name="priorityGroup" id="priorityGroup" required/>
              <option disable selected value>Choose</option>
              <option value="A1">A1. Workers in Frontline Health Services</option>
              <option value="A2">A2. All Senior Citizens</option>
              <option value="A3">A3. Persons with Comorbidities</option>
              <option value="A4">A4. Frontline personnel in essential sectors, including uniformed personnel</option>
              <option value="A5">A5. Indigent Population</option>
              <option value="B1">B1. Teachers, Social Workers</option>
              <option value="B2">B2. Other Government Workers</option>
              <option value="B3">B3. Other Essential Workers</option>
              <option value="B4">B4. Socio-demographic groups at significantly higher risk other than senior citizens and poor population based on the NHTS-PR</option>
              <option value="B5">B5. Overseas FIlipino Workers</option>
              <option value="B6">B6. Other Remaining Workforce</option>
              <option value="C">C. Rest of the Filipino population not otherwise included in the above groups</option>
            </select>
            <select name="SubpriorityGroup" id="SubpriorityGroup" required/>
              <option disable selected value>Choose</option>
              <option value="A1.1">01_A1.1: COVID-19 Referral Hospitals</option>
              <option value="A1.2">02_A1.2: Hopitals Catering to C19 Cases</option>
              <option value="A1.3">03_A1.3: Quarantine Isolation Facilities</option>
              <option value="A1.4">04_A1.4: Remaining Hospitals</option>
              <option value="A1.5">05_A1.5: Government Owned Community Based Primary Care Facilities</option>
              <option value="A1.6">06_A1.6: Stand-alone Clinics and Diagnostics</option>
              <option value="A1.7">07_A1.7: Closed Settings and Institutions</option>
              <option value="A1.8">08_A1.8: OFWs Outbound within 4 months</option>
              <option value="A4.1">09_A4.1: Computer Transport</option>
              <option value="A4.2">10_A4.2: Public and Private Wet and Dry Market Vendors</option>
              <option value="A4.3">11_A4.3: Workers in manufacturing for Food, Beverage, Medical, Pharmaceutical Products</option>
              <option value="A4.4">12_A4.4: Frontline workers in food retail including food service delivery</option>
              <option value="A4.5">13_A4.5: Frontline workers in Financial Services in private and government</option>
              <option value="A4.6">14_A4.6: Frontline workers in hotel accomodation</option>
              <option value="A4.7">15_A4.7: Priests, pastors, religious leaders of denomination</option>
              <option value="A4.8">16_A4.8: Security guards/personnel assigned in establishments offices, agencies and organizations</option>
              <option value="A4.9">17_A4.9: Frontline workers in news media, both private and government</option>
              <option value="A4.10">18_A4.10: Customer-facing personnel of Telecoms, Cable and Internet Service Providers, Electricity distribution, Water distribution utilities</option>
              <option value="A4.11">19_A4.11: Frontline personnel in basic education and higher education institutions and agencies</option>
              <option value="A4.12">19_A4.12: Overseas Filipino Workers not classified above, and scheduled for deployment within two months</option>
              <option value="A4.12">20_A4.13: Frontline workers in Law/Justice, Security, Social Protection Sectors</option>
              <option value="A4.14">21_A4.14: Frontline government workers engaged in operations of government transport system, quarantine inspection, worker safety inspection and other activities indispensable to the COVID response</option>
              <option value="A4.15">22_A4.15: Frontline government workers in charge of tax collection, assessment of business for incentives, election, national ID, data collection personnel</option>
              <option value="A4.16">23_A4.16: Diplomatic community and Department of Foreign Affairs personnel in consular operations</option>
              <option value="A4.17">24_A4.17: Department of Public Works and Highways personnel in charge of monitoring government infrastrature projects</option>
              <option value="0">Not Applicable</option>
            </select><br><br>

            <label for="lastName">Last Name</label>
            <label for="firstName">First Name</label><br>
            <input type="text" id="lastName" name="lastName" placeholder="Last Name" required/>
            <input type="text" id="firstName" name="firstName" placeholder="First Name" required/><br><br>
            <label for="middleName">Middle Name</label>
            <label for="suffix">Suffix(I,II,III,IV,V,JR,SR)</label><br>
            <input type="text" id="middleName" name="middleName" placeholder="Middle Name" required/>
            <input type="text" id="suffix" name="suffix" placeholder="Suffix"/><br><br>

            <label for="birthday">Date of Birth</label>
            <label for="gender">Gender</label><br>
            <input type="date" id="birthday" name="birthday" required/>
            <select name="gender" id="gender" required/>
              <option disable selected value>Select Gender</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
            </select><br><br>

            <label for="region">Region</label>
            <label for="province">Province</label><br>
            <select name="region" id="region" required/>
              <option disable selected value>Select Region</option>
              <option value="NCR">NCR</option>
            </select>
            <select name="province" id="province" required/>
              <option disable selected value>Select Province</option>
              <option value="Metro Manila">Metro Manila</option>

            </select><br><br>

            <label for="municipality">City of Municipality</label>
            <label for="barangay">Barangay</label><br>
            <select name="municipality" id="municipality" required/>
              <option disable selected value>Select Municipality</option>
              <option value="Pasig City">Pasig City</option>
            </select>
            <select name="barangay" id="barangay" required/>
              <option disable selected value>Select Barangay</option>
              <option value="Bagong Ilog">Bagong Ilog</option>
              <option value="Bagong Katipunan">Bagong Katipunan</option>
              <option value="Bambang">Bambang</option>
              <option value="Buting">Buting</option>
              <option value="Caniogan">Caniogan</option>
              <option value="Kalawaan">Kalawaan</option>
              <option value="Kapasigan">Kapasigan</option>
              <option value="Kapitolyo">Kapitolyo</option>
              <option value="Malinao">Malinao</option>
              <option value="Oranbo">Oranbo</option>
              <option value="Palatiw">Palatiw</option>
              <option value="Pineda">Pineda</option>
              <option value="Sagad">Sagad</option>
              <option value="San Antonio">San Antonio</option>
              <option value="San Joaquin">San Joaquin</option>
              <option value="San Jose">San Jose</option>
              <option value="San Nicolas">San Nicolas</option>
              <option value="Sta. Cruz">Sta. Cruz</option>
              <option value="Sta. Rosa">Sta. Rosa</option>
              <option value="Sto. Tomas">Sto. Tomas</option>
              <option value="Sumilang">Sumilang</option>
              <option value="Ugong">Ugong</option>
              <option value="Dela Paz">Dela Paz</option>
              <option value="Manggahan">Manggahan</option>
              <option value="Maybunga">Maybunga</option>
              <option value="Pinagbuhatan">Pinagbuhatan</option>
              <option value="Rosario">Rosario</option>
              <option value="San Miguel">San Miguel</option>
              <option value="Santolan">Santolan</option>
              <option value="Sta. Lucia">Sta. Lucia</option>
            </select><br><br>

            <label for="cellphone">Cellphone</label>
            <label for="occupation">Occupation</label><br>
            <input type="number" id="cellphone" name="cellphone" placeholder="Enter you Contact Number" required/>
            <input type="text" id="occupation" name="occupation" placeholder="Enter you Occupation" required/><br><br>

            <label for="allergy">Allergic to Vaccine or Component of Vaccine?</label>
            <label for="illness">With Comorbidity or other Illness?</label><br>
            <select name="allergy" id="allergy" required/>
              <option disable selected value>Choose</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
            <select name="illness" id="illness" required/>
            <option disable selected value>Choose</option>
            <option value="Yes">Yes</option>
            <option value="None">None</option>
            </select><br><br>
          </div>
          <input class="button" type="submit" onclick="register" name="RegistrationForm"/></button>
        </div>
    </form>
  </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <?php
        function register($priorityGroup,$SubpriorityGroup, $lastName, $firstName, $middleName, $suffix,
        $birthday, $gender, $region, $province, $municipality, $barangay,$cellphone, $occupation, $allergy, $illness){
          include("db.php");
          $sql = "INSERT INTO registration(PriorityGroup, SubPriorityGroup, LastName, FirstName, MiddleName, Suffix, DateofBirth, Gender,
            Region, Province, Municipality, Barangay, Cellphone, Occupation, Allergic, Illness)
          VALUES ('$priorityGroup', '$SubpriorityGroup', '$lastName', '$firstName', '$middleName', '$suffix', '$birthday', '$gender',
            '$region', '$province', '$municipality', '$barangay', '$cellphone', '$occupation', '$allergy', '$illness')";
          $result = $conn->query($sql);

            if($result == TRUE) {
              echo '<script> swal("Successfully Registered", "Please wait for a text or call for your vaccination schedule.", "success"); </script>';
            } else {
              $msg = "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }

        if(isset($_POST['RegistrationForm'])){
          echo register($_POST['priorityGroup'], $_POST['SubpriorityGroup'], $_POST['lastName'], $_POST['firstName'], $_POST['middleName'], $_POST['suffix'], $_POST['birthday'], $_POST['gender'], $_POST['region'], $_POST['province'],
          $_POST['municipality'], $_POST['barangay'], $_POST['cellphone'], $_POST['occupation'], $_POST['allergy'], $_POST['illness']);
        }
      ?>

  </body>
</html>
