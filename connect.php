<?php 

$conn = mysqli_connect('localhost', 'root', '');

$sql = 'CREATE DATABASE IF NOT EXISTS shop_db';
mysqli_query($conn, $sql);

$conn = mysqli_connect('localhost', 'root', '', 'shop_db');

$sql = 'CREATE TABLE IF NOT EXISTS `shop_db`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(25) NOT NULL , `last_name` VARCHAR(25) NOT NULL , `phone` VARCHAR(15) NOT NULL , `email` VARCHAR(100) NULL , `pass` VARCHAR(255) NOT NULL , `gender` VARCHAR(1) NULL , `address` VARCHAR(1500) NULL , `admin` VARCHAR(1) NOT NULL , `created_date` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`phone`), UNIQUE (`email`)) ENGINE = MyISAM';
mysqli_query($conn, $sql);

$sql = 'CREATE TABLE IF NOT EXISTS `shop_db`.`products` (`product_id` INT NOT NULL AUTO_INCREMENT , `product_name` VARCHAR(200) NOT NULL , `quantity` VARCHAR(10) NULL , `mrp` VARCHAR(10) NULL , `sale_price` VARCHAR(10) NULL , `discount` VARCHAR(5) NULL , `category` VARCHAR(200) NULL , `expiry_date` VARCHAR(12) NULL , `company_name` VARCHAR(100) NULL , `return_type` VARCHAR(100) NULL , `featured` INT NULL , `description1` VARCHAR(500) NULL , `description2` VARCHAR(500) NULL , `description3` VARCHAR(500) NULL , `img_cover` VARCHAR(200) NULL , `img1` VARCHAR(200) NULL , `img2` VARCHAR(200) NULL , `img3` VARCHAR(200) NULL , `img4` VARCHAR(200) NULL , `stock_quantity` INT NULL , `buy_price` VARCHAR(10) NULL , `product_barcode` VARCHAR(100) NULL , `search_names` VARCHAR(1000) NULL , PRIMARY KEY (`product_id`)) ENGINE = MyISAM';
mysqli_query($conn,$sql);


header('location:index.php');

?>