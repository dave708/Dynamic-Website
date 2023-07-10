<?php
require 'connect.php';
$vendor_email= $_GET["vendor_email"];
$sql= "UPDATE vendor SET status='planned' WHERE vendor_email=$vendor_email";

if (mysqli_query( $link, $sql))
{
 header("Location: http://localhost/property/managevendors.php");
 exit;
}
else
{
echo ("The record could not be updated");
}
mysqli_close($link);
?>