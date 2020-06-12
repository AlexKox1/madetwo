<?php
include ('connect.php');
session_start();
$login = mysqli_real_escape_string($connect, $_POST['login']);
$password = mysqli_real_escape_string($connect, $_POST['password']);

$query = mysqli_query($connect, "SELECT `root` FROM `useri`
                                       WHERE `nicename`='{$_SESSION['login']}' limit 1");


$row = mysqli_fetch_row($query);
if($row[0]==1){
    header ('Location: admin_page.php');
    exit();
} else {
    header ('Location: author.php');
    exit();
}

?>