<?php
session_start();
echo "Please wait..... logging out";
session_unset();
session_destroy();
header("location: index.php");
?>