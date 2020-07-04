<?php  include_once "./header.php" ?>
<?php
unset($_SESSION["uname"]);
unset($_SESSION["email"]);
unset($_SESSION["role"]);
unset($_SESSION["id"]);
session_destroy();
redirect("login.php");
?>
<?php  include_once "./footer.php" ?>
