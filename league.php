<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academicathlon</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!-- start header -->
    <header>
        <!-- title -->
        <h1>Academicathlon</h1>
        <!-- navbar -->
        <?php include("./components/nav.php");?>
    </header>
    <!-- end header -->
     <main class="container">
    
        <!-- Greet user -->
        <section class="intro">
            <h2><?php echo 'USERNAME'?><h2> <!-- [TODO: Upgrade to $GET user name] -->
        </section>

        <section class="achiever">
            <h3><?php echo 'GROUP NAME';?> Leaderboard</h3> <!-- [TODO: Upgrade to $GET group name] -->
            <?php include 'components/league-group.php'; ?>
        </section>
    </main>
    <!-- end main -->