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
$user = $conn->query($sql);
    if($user->num_rows > 0) 
    {
        while($row = $user->fetch_assoc()) // Get the USER //
        {
            $currbadges = $row["badges"];
            $sepbadges = explode(',',$currbadges);
            foreach ($sepbadges as $badge)
            {
                $badge = trim($badge);

                $stmt = $conn->prepare("SELECT * FROM badges WHERE badname=?");
                $stmt->bind_param("s",$badge);
                $stmt->execute();

                $badgeres = $stmt->get_result();
                while($cbadge = $badgeres->fetch_assoc())
                {
                    echo'
                    <div class="card">
                            <img style="width:100px;height:100px;" src="'.$cbadge["badimg"].'" alt="'.$cbadge["badimgalt"].'"">
                            <div class="info">
                                <h3>'.$cbadge["badname"].'</h3>
                                <p>[Points %]</p>
                                <a href="">Next goal</a>
                            </div>
                    </div>
            ';
                }
                $stmt->close();
            }
        }
    }
?>