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
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");
$propertyid= $_GET["propertyid"];
$sql= "SELECT * FROM property WHERE propertyid=$propertyid";
$result=mysqli_query($link, $sql);
$row=mysqli_fetch_array($result);
$address1=$row["address1"];
$price=$row["price"];
$shortdescription=$row["shortdescription"];
$longdescription=$row["longdescription"];
$image=$row["image"];
$bedrooms=$row["bedrooms"];
$town=$row["town"];
$county=$row["county"];
echo "<h2>$address1</h2>
<br>
<img src='$image' width=200 height=200' border=3px>
<h3>";

echo "Town";
echo "</h3> $town;
<br> <h3>";

echo "County";
echo "</h3> $county;
<br> <h3>";

echo "Bedrooms";
echo "</h3> $bedrooms;
<br> <h3>";

echo "Property Details";
echo "</h3> $longdescription;
<h3>";
echo "Price";
echo "</h3> &euro; $price";
mysqli_close($link);
?>
<p>
<button onclick="goBack()">Go Back to Product Listing</button>
<script>
function goBack() {
 window.history.back();
}
</script>
</p>




<?php include("includes/footer.html");?>
</div>
</body>
</html>