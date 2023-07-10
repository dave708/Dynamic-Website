<?php
require 'connect.php';
$id= $_GET["id"];
$sql= "DELETE FROM comment WHERE id=$id";

if (mysqli_query($link, $sql))
{
 header("Location: http://localhost/property/managecomments.php");
 exit;
}
else
{
echo ("The record could not be deleted");
}
mysqli_close($link);
?>