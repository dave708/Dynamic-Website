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
$vendor_firstname=mysqli_real_escape_string($link,$_POST['$vendor_firstname']);
$vendor_surname=mysqli_real_escape_string($link,$_POST['$vendor_surname']);
$vendor_phone=mysqli_real_escape_string($link,$_POST['$vendor_phone']);
$vendor_email=$_POST['vendor_email'];
$sql_insert="INSERT INTO vendor(vendor_firstname, vendor_surname, vendor_phone, vendor_email,
) VALUES ('$vendor_firstname', '$vendor_surname', '$vendor_phone', '$vendor_email',)";
if(mysqli_query($link, $sql_insert)) {
echo "<h3>Vendor Added!</h3>";
echo "<a href='admin.php'>Return to Admin page</a>";}
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