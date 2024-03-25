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

        <ul class="nav">
          <img src="css/IMG/Logo.jpg" class="logos">
          <li class="items"><a href="./index.html"> Home </a></li>
            <li class="items"><a href="./index.html #feature"> Features </a></li>
              <li class="items"><a href="./index.html #service">Service </a></li>
                <li class="items"><a href="./Appoitment.php"> Appointment </a> </li>
                <li class="items"><a href="./logAdmin.html"> Login </a> </li>
        </ul>

</body>
  </head>
  <body>
<section id='appointment'>
  <div class="wrapper">
	   <div class="hours">
  		<div class="container-time">
				<h2 class="hours-heading">Opening Hours</h2>
				<h3 class="heading-days">Monday-Friday</h3>
				<p>9am - 9pm</p>

				<h3 class="heading-days">Saturday and sunday</h3>
				<p>8am - 8pm</p>

				<br><br><br><br><hr>

				<h4 class="heading-phone">Call Us: (807) 477-2929</h4>
		</div>

		<div class="container-form">
				<form action="process-form.php" method="post" id="form">
					<h2 class="heading heading-yellow">Booking Online</h2>

					<div class="form-field">
						<p>First Name</p>
						<input type="text" id="firstName" name="firstName" placeholder="First Name" required>
					</div>
					<div class="form-field">
						<p>Last Name</p>
						<input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
					</div>
					<div class="form-field">
						<p>Your email</p>
						<input type="email" id="email" name="email" placeholder="Your email" required>
					</div>
          <div class="form-field">
						<p>Health Card Number</p>
						<input type="number" id="HealthCardNumber" name="HealthCardNumber" min="1000000000" max="9999999999" placeholder="10 Digits" required>
					</div>
          <div id="dateTimePicker" class="form-field">

					<div class="form-field">
						<p>Date</p>
						<input type="date" id="date" name="dates" required onchange="updateTimeRestriction()">

					</div>
      <div class="form-field">
						<p>Time</p>
            <div id="timePicker">
                <input type="text" id="time" name="times" placeholder="Select time" required readonly>
            <div id="timeDropdown"></div>
          </div>
				</div>
        </div>

					<div class="form-field">
						<p>Select Services</p>
						<select name="selects" id="selects" required>
							<option value="Walk-In">Walk-In</option>
							<option value="Virtual Care">Virtual Care</option>
						</select>
					</div>
          <button class="submit" id="Button">Submit</button>
				</form>
		</div>
	</div>
</div>

  <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div role="alert">
                            <?php echo $_SESSION['status']; ?>
                            <button type="button"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

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

       <p><center> <i class="fa fa-copyright"></i>2023 Thunder bay Health Clinic. All Rights Reserved. </p></center>
     </div>

  </section>

  </body>
  <script src="dateRistrictions.js"></script>
</html>
