<?php
session_start();
//order product and show alert
$_SESSION["ordered"] = 1;
header("Location: ../client_side/PhotoArtMain.php");
exit;
 ?>
