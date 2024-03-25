<?php
session_start();

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$HealthCardNumber= $_POST["HealthCardNumber"];
$dates = $_POST["dates"];
$times = $_POST["times"];
$services = $_POST["selects"];


$host = "localhost:3307";
$dbname = "appointment_db";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO clientAppointment (firstName, lastName, email, HealthCardNumber, dates, times, services)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {

    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssisss",
                       $firstName,
                       $lastName,
                       $email,
                       $HealthCardNumber,
                       $dates,
                       $times,
                       $services);

mysqli_stmt_execute($stmt);

if(mysqli_stmt_prepare($stmt, $sql))
    {
        $_SESSION['status'] ='<script>alert("Appointment has been sent")</script>';
        header("Location: Appoitment.php");
    }
    else
    {
        $_SESSION['status'] = '<script>alert("Please Fill in all required Fields")</script>';;
        header("Location: Appoitment.php");
    }


?>
