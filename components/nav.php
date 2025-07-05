<?php
include 'INC/et.php'; //Login Credentials
include './css/main.css'; // Allows PHP to use CSS
include 'INC/config.php'; // General Configs
// Connect to Database
$conn = new mysqli($DBIPAD, $DBUSER, $DBPASS,$DBINFO);
// Begin Query to Display Menu
$sql = "SELECT * FROM $navtb";
$results = $conn->query($sql);
echo '<nav><ul>';
// If the Query returns ANY results then do XYZ
if($results->num_rows > 0) 
{
	while($row = $results->fetch_assoc())
	{
		echo '<li><a href="'.$row["url"].'" title="'.$row["title"].'" alt="'.$row["alt"].'">'.$row["label"].'</a>';
	}
}
echo '</ul></nav>';
$conn -> close();
?>