<?php
include 'connect.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

$con = new mysqli("localhost", "root", "", "online-gift-shop");

if ($con->connect_error) {
    die("Failed to connect:" . $con->connect_error);
} else {
    $stmt = $con->prepare("INSERT INTO contactus (name, email, subject, message) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        $execval = $stmt->execute();
        if ($execval) {
            echo "<script>alert('Message sent successfully. Thank you for your feedback');
                    window.location.href='contact.php';
                </script>";
            } else {
                echo "Failed to execute the statement.";
            }
            $stmt->close();
        } else {
            echo "Failed to prepare the statement.";
        }
        $con->close();
    }
?>
