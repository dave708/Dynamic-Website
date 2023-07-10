<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Search Properties</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
 #searchform {font-size: 0.8em; background-color: #ffffff; width: 30%; padding: 5px; border: 5px solid #394873; min-width: 300px;}
 select{margin: 10px;}
 #btnSubmit {margin-left: 75px; margin-bottom: 10px;}
 </style>
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<h3>Welcome to the West Properties LTD</h3>
Galway City is where we call home. But there is no corner of the country that our services do not cover. From resdential houses, commerical buildings and sites , we cover it all!
At West Properties, our people are our business. We are a growing team of property professionals and out of the box thinkers.We do the hard work so you do not have to!
<P>
West Properties LTD are the largest real estate sellers on the West Coast of Ireland and have worked with some of the best known developers in the country. We offer something for everybody whether it be your first family home or offices for your growing business. 
The company puts the customers first and we always provide the best services whether it would be general questions all the way to our after sale care. If your intrested in buying a property please have a look through our extensive field of properties and we are sure you will find something you like.
<div id="content">
<form method="post" action="results.php" id="searchform">
<h3>Search Properties</h3>
<hr>
<div id ="gettown" class="searchbox">
<label> Location: </label>
<select name="location" required="required">
 <option value="">Select Town</option>
 <?php
   require "connect.php";
   $sql="select DISTINCT town from property";
   $result=mysqli_query($link, $sql);
   if (mysqli_num_rows($result) >0)
  {
   while ($row=mysqli_fetch_array($result)){
    $town=$row['town'];
    echo "<option value='$town'>$town</option>";
   }
  }
mysqli_close($link);
?>
</select>
</div>

<div id ="getcategory">
<label> Category: </label>
<select name="category" required="required">
<option value="">Select Category</option>
<?php
  require "connect.php";
  $sql="select * from category";
  $result=mysqli_query($link, $sql);
  if (mysqli_num_rows($result) >0)
  {
   while ($row=mysqli_fetch_array($result)){
     $categoryname=$row['categoryname'];
	 $categoryid=$row['categoryid'];
     echo "<option value='$categoryid'>$categoryname</option>";
   }
  }
mysqli_close($link);
?>
</select>
</div>

<div id="minprice">
<label>Min Price:</label>
<select name="minprice" required="required">
   <option value="">Select</option>
  <option value="20000">&euro; 20,000</option>
  <option value="50000">&euro; 50,000</option>
  <option value="100000">&euro; 100,000</option>
  <option value="200000">&euro; 200,000 </option>
  <option value="300000">&euro; 300,000 </option>
  <option value="400000">&euro; 400,000 </option>
  <option value="500000">&euro; 500,000 </option>
  <option value="600000">&euro; 600,000 </option>
</select>
</div>

<div id="maxprice">
<label>Max Price:</label>
<select name="maxprice" required="required">
   <option value="">Select</option>
   <option value="50000">&euro; 50,000</option>
  <option value="100000">&euro; 100,000</option>
  <option value="200000">&euro; 200,000 </option>
  <option value="300000">&euro; 300,000 </option>
  <option value="400000">&euro; 400,000 </option>
  <option value="500000">&euro; 500,000 </option>
  <option value="600000">&euro; 600,000 </option>
    <option value="700000">&euro; 700,000 </option>
</select>
</div>

<div><button type="submit" name="submit" id="btnSubmit">Search</button></div>
</form>
<?php include("includes/footer.html");?>
</div>
</div>
</body>
</html>