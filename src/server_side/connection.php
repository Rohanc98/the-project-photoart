<?php
include('credentials.php');
$con = mysqli_connect($host,$user,$password,$database);
$error = mysqli_connect_error();
if($error != null)
{
$output = "<p>Unable to connect to database!</p>";
exit($output);
}
echo "connection made";
 ?>
