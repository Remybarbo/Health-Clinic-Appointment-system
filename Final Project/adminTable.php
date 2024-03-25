<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Health Clinic Website Design</title>
  <!-- Import CSS file -->
    <link rel="stylesheet" href="css/style.css" />
    <body>
      <div class="menu">
        <ul class="nav">
          <img src="css/IMG/Logo.jpg" class="logos">
          <li class="items"><a href="./index.html"> Home </a></li>
            <li class="items"><a href="./index.html #feature"> Features </a></li>
              <li class="items"><a href="./index.html #service">Service </a></li>
                <li class="items"><a href="./Appoitment.php"> Appointment </a> </li>
                <li class="items"><a href="./logAdmin.html"> Logout </a> </li>
        </ul>
        </div>

</body>
  </head>
  <body>
<section id='appointment'>

  <fieldset class="database-table">
    <legend>
      <h2>Data from Appointment Database Where Service is Walk-in</h2>
    </legend>

    <table  id="table">
      <tr>
        <td class="col">ID</td>
        <td class="col">First Name</td>
        <td class="col">Last Name</td>
        <td class="col">Email</td>
        <td class="col">Health Card Number</td>
        <td class="col">Date</td>
        <td class="col">Time</td>
        <td class="col">Service</td>
        <td class="col">Action</td>
      </tr>


      <?php
          $host = "localhost:3307";
          $dbname = "appointment_db";
          $username = "root";
          $password = "";

          $conn = mysqli_connect(hostname: $host,
                                 username: $username,
                                 password: $password,
                                 database: $dbname);
          $sql = "SELECT * FROM clientappointment WHERE services='Walk-In'
          ORDER BY dates, times ASC;";
          $result=$conn->query($sql);

          if($result->num_rows > 0){
            while ($row=$result->fetch_assoc()) {
              echo "<tr><td>". $row["ID"] . "</td><td>" .
              $row["firstName"] . "</td><td>" .
              $row["lastName"] . "</td><td>" .
              $row["email"] . "</td><td>" .
              $row["HealthCardNumber"] . "</td><td>" .
              $row["dates"] . "</td><td>" .
              $row["times"] . "</td><td>" .
              $row["services"] . '</td><td>
              <button><a href="cancel.php?deleteid='.$row["ID"].'"> Cancel</a></button>
              </td></tr>';
            }
          }
          else {
            echo "no Results";
          }

          $conn->close();

           ?>
    </table>
    <br>
  </fieldset>

  <fieldset class="database-table">
    <legend>
      <h2>Data from Appointment Database Where Service is Virtual Care</h2>
    </legend>

    <table id="table">
      <tr>
        <td class="col">ID</td>
        <td class="col">First Name</td>
        <td class="col">Last Name</td>
        <td class="col">Email</td>
        <td class="col">Health Card Number</td>
        <td class="col">Date</td>
        <td class="col">Time</td>
        <td class="col">Service</td>
        <td class="col">Action</td>
      </tr>


      <?php
          $host = "localhost:3307";
          $dbname = "appointment_db";
          $username = "root";
          $password = "";

          $conn = mysqli_connect(hostname: $host,
                                 username: $username,
                                 password: $password,
                                 database: $dbname);

       $sql = "SELECT * FROM clientappointment WHERE services='Virtual Care'
       ORDER BY dates, times ASC;";
       $result=$conn->query($sql);

          if($result->num_rows > 0){
            while ($row=$result->fetch_assoc()) {
              echo "<tr><td>". $row["ID"] . "</td><td>" .
              $row["firstName"] . "</td><td>" .
              $row["lastName"] . "</td><td>" .
              $row["email"] . "</td><td>" .
              $row["HealthCardNumber"] . "</td><td>" .
              $row["dates"] . "</td><td>" .
              $row["times"] . "</td><td>" .
              $row["services"] . '</td><td>
              <button><a href="cancel.php?deleteid='.$row["ID"].'"> Cancel</a></button>
              </td></tr>';
            }
          }
          else {
            echo "no Results";
          }

          $conn->close();

           ?>
    </table>
    <br>
  </fieldset>

  </section>

  <!-- Footer -->
  <section id="footer">
    <img src="./images/footer-imgg.png" class="footer-image">
     <div class="title-text">
       <center>
       <p>CONTACT</p>
       <h1>Visit Clinic Today</h1>
     </center>
     </div>

     <div class="footer-row">
       <div class="footer-left">
         <h1>Opening Hours</h1>
         <p><i class="fas fa-clock"></i>Monday to Friday - 9am to 9pm</p>
         <p><i class="fas fa-clock"></i>Saturday to Sunday - 8am to 8pm</p>
       </div>
       <div class="footer-right">
        <h1>Get In Touch</h1>
        <p>Thunder Bay, ON<i class="fas fa-map-signs"></i></p>
        <p>ThunderBay@Clinic.com<i class="fas fa-paper-plane"></i></p>
        <p>(807)-477-2929<i class="fas fa-phone-alt"></i></p>
       </div>
     </div>

       <p><center> <i class="fa fa-copyright"></i>2024 Thunder bay Health Clinic. All Rights Reserved. </p></center>
     </div>

  </section>

  </body>
  <script src="script.js"></script>
</html>
