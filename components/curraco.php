<!--
Module - Current Accolades
Desc - Shows the current X amount of accolades the user is near to collecting.
-->
<?php
include 'INC/et.php'; //Login Credentials
include 'css/main.css'; // Allows PHP to use CSS
include 'INC/config.php'; // Config
// Connect to Database
$conn = new mysqli($DBIPAD, $DBUSER, $DBPASS,$DBINFO);
$sql = "SELECT * FROM $iii WHERE usernick='MickeyMouse' ";
$results1 = $conn->query($sql);
    if($results1->num_rows > 0) 
    {
        while($row = $results1->fetch_assoc()) // Get the USER //
        {
            $currbadges = $row["badges"];
            // Gets Individual Badge Data //
            $sepbadges1 = explode(",",$currbadges);
            foreach ($sepbadges1 as $badge1)
            {
                echo trim($badge1) . "</br>";
            }
            // REMOVE AFTER DEBUG //

            // TODO - Make this section do a loop -- Maybe need to remove the while and instead just have it loop indivdually?
            $sql2 = "SELECT * FROM $bads WHERE badname='$badge'";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) 
            {

            while ($row2 = $result2->fetch_assoc()) 
            {
                echo'
                <div class="card">
                        <img style="width:100px;height:100px;" src="'.$row2["badimg"].'" alt="'.$row2["badimgalt"].'">
                        <div class="info">
                            <h3>'.$row2["badname"].'</h3>
                            <p>[Points %]</p>
                            <a href="">Next goal</a>
                        </div>
                    </div>
                ';
            }
            }
            /*
            echo'
            <div class="card">
                    <img style="width:100px;height:100px;" src="res/bads/devtester.png">
                    <div class="info">
                        <h3>[Badge Title]</h3>
                        <p>[Points %]</p>
                        <a href="">Next goal</a>
                    </div>
                </div>
            ';
            */
        }
    }
?>