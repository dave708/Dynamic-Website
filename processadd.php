<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>

<?php
require 'connect.php';
if(isset($_POST['submit'])) {
$address1=mysqli_real_escape_string($link,$_POST['address1']);
$price=mysqli_real_escape_string($link,$_POST['price']);
$description=mysqli_real_escape_string($link,$_POST['shortdescription']);
$longdesc=mysqli_real_escape_string($link,$_POST['longdescription']);
$vendor_email=$_POST['vendor_email'];
$categoryid=$_POST['category'];
$image=mysqli_real_escape_string($link,$_POST['image']);
$sql_insert="INSERT INTO property(address1, price, shortdescription, longdescription, vendor_email,
categoryid, image) VALUES ('$address1', '$price', '$description', '$longdesc', '$vendor_email',
'$categoryid', '$image')";
if(mysqli_query($link, $sql_insert)) {
echo "<h3>Property Added!</h3>";
echo "<a href='manageproperties.php'>Return to Manage Property page</a>";}
else {
echo "An error occurred, try again!";
}
}
mysqli_close($link);
?>




<?php include("includes/footer.html");?>
</div>
</body>
</html>