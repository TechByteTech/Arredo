<?php

session_start();
session_destroy();
setcookie("userid_cookie", "", time() - 3600);
header("location:index.php");
exit();



?>
