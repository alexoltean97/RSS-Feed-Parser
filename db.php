<?php
define('HOST','localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'luci_test');
$conn = mysqli_connect(HOST,USER,PASSWORD,DB);

if(!$conn){
    die("Database");
}