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


<h3> Administrator Area</h3>
<?php
session_start();
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Hi " . $username . "!" . "
";
echo "Choose one of the menu options to Manage Comments, Property or Vendors. &nbsp;
&nbsp;";
echo "<a href='logout.php'>Logout</a>";
echo "<p><a href='managecomments.php'>Manage Comments</a>
<p><a href='manageproperties.php'>Manage Property</a>
<p><a href='managevendors.php'>Manage Vendors</a>";
}
?>


<?php include("includes/footer.html");?>
</div>
</body>
</html>