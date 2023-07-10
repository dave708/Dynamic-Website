<?php
require 'connect.php';
$vendor_email= $_GET["vendor_email"];
$sql="SELECT * FROM vendor where vendor_email='$vendor_email'";

?>
<!--write out the existing fields into the form fields-->
<form method="post" action="processedit2.php">
<input type="hidden" name="vendor_email" value="<?php echo $vendor_email; ?>"/>
<table>
<tr>
<td>Address:</td><td><input type="text" name="vendor_firstname" value="<?php echo
$vendor_firstname; ?>"/></td>
</tr>

<tr>
<td>Price:</td><td><input type="text" name="vendor_surname" value= "<?php echo $vendor_surname; ?>" /></td>
</tr>
<tr>
<td>Description: </td><td><textarea name="vendor_phone" rows="8" cols="35"><?php echo $vendor_phone;
?></textarea></td>
</tr>
<tr>
<td>Further Details: </td> <td><textarea name="vendor_email" rows="8" cols="35"><?php echo
$vendor_email; ?></textarea></td>
</tr>
<tr>

<?php

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