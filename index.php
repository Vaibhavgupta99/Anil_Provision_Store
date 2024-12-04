<?php 

session_start();

include_once './header.php';
include_once './navbar.php';

if(isset($_SESSION['superadmin'])){
    include_once './dashboard.php';
}
else if(isset($_GET['product'])){
    include_once './product.php';
}
else if(isset($_GET['upload'])){
    include_once './upload.php';
}
else{
    include_once './home.php';
}

include_once './footer.php';

?>