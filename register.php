<?php
    $firstName = $_POST['firstname'] ?? '';
    $lastName = $_POST['lastname'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $con = new mysqli("localhost", "root", "", "online-gift-shop");
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } else {
        $stmt = $con->prepare("INSERT INTO user_info (firstname, lastname, phone, address, email, password) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssssss", $firstName, $lastName, $phone, $address, $email, $password);
            $execval = $stmt->execute();
            if ($execval) {
                echo "<script>alert('Register Successfully');
                window.location.href='login.php';
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
