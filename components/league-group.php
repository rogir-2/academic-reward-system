<?php
include 'INC/et.php'; //Login Credentials
include 'css/main.css'; // Allows PHP to use CSS
include 'INC/config.php'; // Config
// Connect to Database
$conn = new mysqli($DBIPAD, $DBUSER, $DBPASS,$DBINFO);
$gid = $_GET["group"];  
if(isset($_GET["limit"]))
{$limit = 5;}
$sql = "SELECT * FROM $iii WHERE groupref='$gid' ORDER BY 'points' DESC LIMIT $limit";
$results = $conn->query($sql);
if($results->num_rows > 0) 
{
    $r = 0; 
    echo '
    <table>
        <th>Rank</th>   <th>Name</th>   <th>Points</th> <th>Tier</th>
        <tbody>
    ';
	while($row = $results->fetch_assoc())
	{
        $r++;
        echo '
        <tr>
            <td data-label="Rank">'.$r.'</td>
            <td data-label="Name">'.$row["usernick"].'</td>
            <td data-label="Points">'.$row["points"].'</td>
            <td data-label="Tier">💍</td>
        </tr>
        ';
	}
    echo '</tbody></table>';
}
?>