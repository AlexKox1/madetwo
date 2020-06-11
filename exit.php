<?php
session_start();
session_unset();

header ('Location: author.php');
exit();

?>