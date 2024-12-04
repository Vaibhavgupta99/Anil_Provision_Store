<?php 

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'shop_db');

$superadmin_number = "123456789";
$superadmin_pass = md5(123);

if(isset($_POST['register'])){
    
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $gender = '';
    $address = '';
    $admin = 'N';
    date_default_timezone_set("Asia/Calcutta"); //India time (GMT+5:30)
    $created_date = date('d-M-Y h:i:sa');  

    $sql = 'SELECT * FROM `users` WHERE  `email` = "'.$email.'" OR `phone` = "'.$phone.'" ';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);

    if($row){
        $_SESSION['error'] = "Account already exists";
    }
    else{
        $sql = 'INSERT INTO `users`(`first_name`, `last_name`, `phone`, `email`, `pass`, `gender`, `address`, `admin`, `created_date`) VALUES ("'.$first_name.'","'.$last_name.'","'.$phone.'","'.$email.'","'.$pass.'","'.$gender.'","'.$address.'","'.$admin.'","'.$created_date.'")';
        mysqli_query($conn, $sql);

        $_SESSION['register'] = "Account created successfully";
    }    
}

else if(isset($_POST['login'])) {
    $phone = $_POST['phone'];
    $pass = md5($_POST['pass']);

    if($phone == $superadmin_number && $pass == $superadmin_pass){
        $_SESSION['superadmin'] == "Superadmin";
    }

    else {
        $sql = 'SELECT * FROM `users` WHERE `phone` = "'.$phone.'" && `pass` = "'.$pass.'" ';
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        echo "123";

        if($row){
            $_SESSION['login'] = $row['id'];
        }
        else {
            $_SESSION['error'] = "Invalid phone number or password";
        }
    }
}

header('location:index.php');

?>