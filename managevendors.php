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
<P>
<a href='addvendor.php?propertyid=$propertyid'>Add a new vendor</a>
<P>
<?php
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link, "property");
$sql="SELECT * from vendor";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0)
{
echo "<table>";
echo "<tr>
 <th> Email</th>
<th>First Name</th>
<th>Surname</th>
<th>Phone Number</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
while($row=mysqli_fetch_array($result)) {
$vendor_email=$row["vendor_email"];
$vendor_firstname=$row["vendor_firstname"];
$vendor_surname=$row["vendor_surname"];
$vendor_phone=$row["vendor_phone"];
echo "<tr>
 <td>$vendor_email</td>
<td>$vendor_firstname</td>
<td>$vendor_surname</td>
<td>$vendor_phone</td>
<td><a href='editvendor.php?vendor_email=$vendor_email'>Edit</a></td>
<td><a href='deletevendor.php?vendor_email=$vendor_email' onclick=\"return confirm('Are you sure you want to delete
this comment?');\">Delete</a></td>
</tr>";
}
echo "</table>";
}
else
{
echo "There are no enteries";
}

mysqli_close($link);
?>




<?php include("includes/footer.html");?>
</div>
</body>
</html>