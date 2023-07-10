<?php
require 'connect.php';
if(isset($_POST['submit']))
{
 $propertyid=$_POST['propertyid'];
 $address1=mysqli_real_escape_string($link,$_POST['address1']);
 $price=mysqli_real_escape_string($link,$_POST['price']);
 $description=mysqli_real_escape_string($link,$_POST['shortdescription']);
 $longdesc=mysqli_real_escape_string($link,$_POST['longdescription']);
 $vendor_email=$_POST["vendor_email"];
 $categoryid=$_POST["category"];
 $image=mysqli_real_escape_string($link,$_POST['image']);
 //query to update the fields in the product record
 $sql= "UPDATE property SET address1='$address1', price='$price',
shortdescription='$shortdescription', longdescription='$longdesc', vendor_email='$vendor_email',
categoryid='$categoryid', image='$image' WHERE propertyid=$propertyid";
 //if the query is successful return to the manageproducts page, otherwise output an error message
 if (mysqli_query( $link, $sql))
 {
 header("Location: http://localhost/property/manageproperties.php");
 exit;
 }
 else
{
 echo "Could not update product";
}
}
mysqli_close($link);
?>
