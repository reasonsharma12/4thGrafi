<?php
if(isset($_POST["submit"])){
	$firstname = $_POST["firstname"] ?? '';
	$lastname = $_POST["lastname"] ?? '';
	$phone = $_POST["phone"] ?? '';
	$address = $_POST["address"] ?? '';
	$email = $_POST["eamil"] ?? '';
	$password = $_POST["password"] ?? '';

    $con = new mysqli("localhost","root","","online-gift-shop");
	if ($con->connect_error){
		die("Failed to connect:".$con->connect_error);
	} 
	$errors = array();

	if (empty($firstname) OR empty($lastname) OR empty($phone number) OR empty($address) OR empty($email) OR empty($password)) {
	array_push($errors,"All fields are required");
	}
	if (strlen($phone)<10){
	arry_push($errors,"phone must be at least 10 character long");
	}
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
	array_push($errors,"Email is not valid");
	}
	if (strlen($password)<8){
	arry_push($errors,"password must be at least 8 character long");
	}
	if (count($errors)>0){
	foreach ($errors as $error){
	echo "<div class='alert alert-danger'>$error<>";
	}
	}else{
	require_once("connect.php");
    $sql = "INSERT INTO user_info(firstname,lastname,phone,address,email,password) vALUES (?,?,?,?,?,?";
    $sql = mysqli_stmt_init($con);
    $prepareStmt = mysqli_stmt_perpare($stmt,$sql);
    if ($prepareStmt){
        mysqli_stmt_bind_param($stmt,"sssssss","firstname","lastname","phone","address","email","password");
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>You are registered successfully.</div>";
    }else{
        die("something went wrong");

    }
    }
	}

	
	?>

	
