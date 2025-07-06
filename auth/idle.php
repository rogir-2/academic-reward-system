<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to <?php include '../components/INC/config.php'; echo $title;?></title>
</head>
<body>
    <h1>Welcome to the <?php echo $title;?></h1>
    <p><a href="idle.php?login=true">Sign in</a> to access secure pages</p>

    <?php
        include '../links.php';
        if($_GET["login"]){
            include 'login-form.php';
        }
    ?>



    
      


</body>
</html>