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


<h3>Add a Vendor</h3>
<p>
<div id="addvendor">
<form method="post" action="processadd2.php">
<table>
<tr>
<td>Firstname: </td>
<td><input type="text" name="vendor_firstname" placeholder="Enter vendor firstname" required="required"
/></td>
</tr>
<tr>
<td>Surname: </td>
<td><textarea name="vendor_surname" rows="8" cols="35" placeholder="Enter vendor surname" required="required" /></textarea></td>
</tr>
<tr>
<td>Phone Number: </td>
<td><textarea name="vendor_phone" rows="8" cols="35" placeholder="Enter vendor phone" required="required"/></textarea></td>
</tr>
<tr>
<td>Vendor Email: </td>
<td><textarea name="vendor_email" rows="8" cols="35" placeholder="Enter vendor email" required="required"/></textarea></td>
</tr>
<!--create a select box with dropdown email options taken from the database as this is more user
friendly-->


 
 
 


<tr>
<td><input type="submit" name="submit" value="Add Vendor"/></td>
</tr>
</table>
</form>
</div>





<?php include("includes/footer.html");?>
</div>
</body>
</html>