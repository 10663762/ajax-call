<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="ajaxformcss.css">
<title>
Ajax Print Out
</title>
</head>
<body>
<h1 align=center> Ajax Print Out</h1>



<?php 
$fname=$_POST['fname'];
$date=$_POST['date'];
$gd=$_POST['gd'];
$ht=$_POST['ht'];
$ms=$_POST['ms'];
$ad=$_POST['ad'];
$cm=$_POST['cm'];
$myfile=$_POST['myfile'];



echo "<table align=center bordercolor='#3268B2' border='1' width='300' height='230' cellspacing ='0' bgcolor='lightgray'>";
  echo"<tr >";
  echo "<td>Full Name: $fname</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>Date of Birth: $date</td>";
  echo "</tr>";
   
  echo"<tr>";
  echo "<td>Gender: $gd</td>";
  echo "</tr>";
  
  echo"<tr>";
  echo "<td>Height: $ht</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>Marital Status: $ms</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>Digital Address: $ad</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>Comments: $cm</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>File Location: $myfile</td>";
  echo "</tr>";

  echo "</table>";



?>
</body>
</html>