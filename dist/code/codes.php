<?php
include "config.php";
if (isset($_POST['confirm_booking_btn'])) {

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['datetime']) || empty($_POST['numberofguest']) || empty($_POST['event-type']) || empty($_POST['payment-method'])) 
    {
        $_SESSION['message_error'] = "Failed! All fields are required! Double Check your fields and Try Again";
        header("Location: ../form.php");
        exit();
    } 
    else
    {

        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $date = $_POST['datetime'];
        $mysql_date_time = date('Y-m-d H:i:s', strtotime($date));
        $no_of_guest = mysqli_real_escape_string($con, $_POST['numberofguest']);
        $event_type = mysqli_real_escape_string($con, $_POST['event-type']);
        $payment_method = mysqli_real_escape_string($con, $_POST['payment-method']);
        $comments = mysqli_real_escape_string($con, $_POST['comments']);

        $insert_query = "INSERT INTO booking (name, email, phone, address, date, no_of_guest, event_type, payment_method, comments) VALUES ('$name', '$email', '$phone', '$address', '$mysql_date_time', '$no_of_guest', '$event_type', '$payment_method', '$comments')";
        $result = mysqli_query($con, $insert_query);

        if ($result) 
        {
            $_SESSION['message_success'] = "Booking successful!";
            header("Location: ../index.php");
            exit;
        } 
        else
        {
            $_SESSION['message_error'] = "Failed! Something went wrong, Try Again";
            header("Location: ../form.php");
            exit;
        }
    }
}
