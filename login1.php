<?php
session_start();

// Check if the user is already logged in, redirect to home page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: index.php');
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate the form inputs (e.g., username and password)
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform your authentication logic here (e.g., checking against a database)
    // You should hash and compare the password securely in a real-world scenario

    // For the sake of example, let's assume the username is "admin" and the password is "password"
    if ($email === 'admin@gmail.com' && $password === 'reason') {
        // Authentication successful
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header('Location: index.php');
        exit;
    } else {
        // Authentication failed
        $error = 'Invalid username or password';
    }
}
?>











<!-- // session_start();
// include('connect.php');
// include('finction.inc.php');
// $msg="";
// $email="";
// $password="";
// if(isset($_POST['submit'])){
// 	$email=($_POST['email']);
// 	$password=($_POST['password']);
	
// 	$sql="select * from user_info where email='$email' and password='$password'";
// 	$res=mysqli_query($con,$sql);
// 	if(mysqli_num_rows($res)>0){
// 		$row=mysqli_fetch_assoc($res);
// 		$_SESSION['IS_LOGIN']='yes';
// 		$_SESSION['user_info']=$row['email'];
// 		redirect('index.php');
// 	}else{
// 		$msg="Please enter valid login details";
// 	}
// }
// ?> 


// session_start();
// $_session['login1'];
// include('connect.php');
// include('finction.inc.php');

// $email="";
// $password="";
// if(isset($_POST['login'])){
// 	$email=($_POST['email']);
// 	$password=($_POST['password']);
	
// 	$sql="select * from user_info where email='$email' and password='$password'";
// 	$res=mysqli_query($con,$sql);
// 	if(mysqli_num_rows($res)>0){
// 		$row=mysqli_fetch_assoc($res);
// 		$_SESSION['IS_LOGIN']='yes';
// 		$_SESSION['online-gift-shop']=$row['email'];
// 		redirect('index.php');
// 	}else{
 // 	echo "<script> alert('Invalid Email Or Password');</script>"; -->
<!-- //     redirect('login.php');
// 	}
// }
// ?> --> 
