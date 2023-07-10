<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- these styles should be deleted from here and moved to the styles.css stylesheet-->
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<main>
<div id="displayproperty">
<?php
require "connect.php"; //access the connection code

$sql="SELECT * from property";
$result=mysqli_query($link, $sql);

if(mysqli_num_rows($result)>0) //check are there records in the result set
{
echo "<h3>All Property</h3>";
echo "<div class='card-area'>";//set up the flex container

while($row=mysqli_fetch_array($result)) //while there are records...
{
$propertyid=$row["propertyid"];
$image=$row["image"];
$address1=$row["address1"];
$description=$row["shortdescription"];
$price=$row["price"];

echo "<div class='card'>"; //create a card - each card is a child of the card-area flex container
echo "<div class='image-holder'>"; //the image-holder is a div in the card to hold the image
echo "<img src='$image' alt='employee' >";
echo "</div>"; //close the image holder
echo "<div class='cardcontainer'>"; 
echo "<hr>";
echo  "<h4>$address1</h4>";
echo "<p>&euro; $price</p>";
echo "<p> $description</p>"; 
echo "<div class='moredetails'>"; 
echo "<p><a href='moredetails.php?propertyid=$propertyid'>Details</a></p>";
echo "</div>"; //close the moredetails div
echo "</div>"; //close the cardcontainer div
echo "</div>"; //close the card

} //end while loop
echo "</div>"; //close the flex containersince no more records
}
else //if there are no records in the result set
{
echo "<h3>There are no properties in the database</h3>"; //output a message
}
mysqli_close($link); //close the connection
?>
</div> <!-- close the displayproperties div--> 
</main><!-- close the main element--> 

<?php include("includes/footer.html");?>
</div><!-- close the container div--> 
</body>
</html>
