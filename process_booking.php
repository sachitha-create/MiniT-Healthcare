
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $clinic = htmlspecialchars($_POST['clinic']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    $to = "sachithapradeep01@gmail.com"; // Replace with your email
    $subject = "New Appointment Booking";
    $message = "Name: $name\nPhone: $phone\nEmail: $email\nClinic: $clinic\nDate: $date\nTime: $time";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Booking information sent successfully.";
    } else {
        echo "Failed to send booking information.";
    }
}
?>
