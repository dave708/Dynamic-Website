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
$propertyid=$_GET["propertyid"];
$sql="SELECT * FROM property, category WHERE propertyid=$propertyid AND
category.categoryid=property.categoryid";
$result=mysqli_query($link, $sql); //run the query
$row=mysqli_fetch_array($result); //store the recordset in $row
//retrieve the database fields from the recordset and assign to variables for output
$propertyid=$row["propertyid"];
$address1=$row["address1"];
$price=$row["price"];
$desc=$row["shortdescription"];
$longdesc=$row["longdescription"];
$vendor_email=$row["vendor_email"];
$categoryid=$row["categoryid"];
$categoryname=$row["categoryname"];
$image=$row["image"];
?>
<!--write out the existing fields into the form fields-->
<form method="post" action="processedit.php">
<input type="hidden" name="propertyid" value="<?php echo $propertyid; ?>"/>
<table>
<tr>
<td><?php echo "<img src='$image' width=100 height=100>" ?>;</td>
</tr>
<tr>
<td>Address:</td><td><input type="text" name="address1" value="<?php echo
$address1; ?>"/></td>
</tr>

<tr>
<td>Price:</td><td><input type="text" name="price" value= "<?php echo $price; ?>" /></td>
</tr>
<tr>
<td>Description: </td><td><textarea name="shortdescription" rows="8" cols="35"><?php echo $desc;
?></textarea></td>
</tr>
<tr>
<td>Further Details: </td> <td><textarea name="longdescription" rows="8" cols="35"><?php echo
$longdesc; ?></textarea></td>
</tr>
<tr>
<td>Vendor Email: </td>
<td>
<!--create a select box with dropdown email options taken from the database as this is more user
friendly-->
<select name="vendor_email" required="required">
<?php
echo "<option value = '$vendor_email'>$vendor_email</option>"; 
$sql="SELECT vendor_email FROM vendor WHERE vendor_email!='$vendor_email'"; 
$result=mysqli_query($link,$sql); //run the query
if (mysqli_num_rows($result) >0) { 
while ($row=mysqli_fetch_array($result)){
 $vendor_email=$row['vendor_email'];
 echo "<option value='$vendor_email'>$vendor_email</option>";
//set the value of the option selected and show the user the possible email addresses
 }
} ?>
</select>
</td>
</tr>
<tr>

<td>Category</td>
<td>
<!--create a select box with dropdown category options taken from the database as this is more user
friendly-->
<select name="category" required="required">
 <?php
echo "<option value = '$categoryid'>$categoryname</option>"; 
$sql="SELECT * FROM category WHERE categoryid!=$categoryid"; 
$result=mysqli_query($link,$sql); //run the query
if (mysqli_num_rows($result) >0) { 
while ($row=mysqli_fetch_array($result)) {
 $categoryname=$row['categoryname'];
 $categoryid=$row['categoryid'];
 echo "<option value='$categoryid'>$categoryname</option>"; 
}
}
?>
</select>
</td>
</tr>
<tr>
<td>Image path: </td><td><input type="text" name="image" value="<?php echo $image;
?>"/></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Update Property"/></td>
</tr>
</table>
</form>
<?php mysqli_close($link); ?>


<?php include("includes/footer.html");?>
</div>
</body>
</html>