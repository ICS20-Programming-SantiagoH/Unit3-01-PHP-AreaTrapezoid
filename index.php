<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="area of a Trapezoid">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Area of a Trapezoid</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Area of a Trapezoid</h1>";
echo "<h3>This program will calculate the area of a trapezoid.</h3>";
?>
<!-- form to get the mesurements from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblSideA">Side a (cm):</label>
      <input type="text" id="side_a" placeholder="Enter the mesurements" name="side_a"><br><br>
      <label for="lblSideB">Side b (cm):</label>
      <input type="text" id="side_b" placeholder="Enter the mesurements" name="side_b"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="text" id="height" placeholder="Enter the mesurements" name="height"><br><br>
      <input type="submit" value="Calculate">
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      The area of the trapezoid is " + $area
    </iframe>
  </body>
</html>