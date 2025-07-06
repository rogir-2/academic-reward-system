<?php
    // TODO: 
    //  1. Input validation is needed
    //  2. Prevent SQL injection

    require '../components/INC/et.php'; // DB credentials
    $conn = new mysqli($DBIPAD, $DBUSER, $DBPASS,$DBINFO);
    // Checking mechanisum needed for connection DB
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']);

        $result = mysqli_query($conn, "SELECT * FROM acc_users WHERE username = '$username'");
        $user = mysqli_fetch_assoc($result);

        if($user && password_verify($password, $user['password'])){
            echo "account is found!";
            // COOKIE and SESSION measure is needed
        }
        else{
            echo "account not found!";
        }

    }
?>
    