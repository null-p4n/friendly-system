<?php
$connection = mysqli_connect('fdb16.biz.nf', '2320205_root', 'adrianboss1212');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, '2320205_root');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>