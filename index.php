<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include 'components/INC/config.php'; echo $title;?></title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!-- start header -->
    <header>
        <!-- title -->
        <h1><?php include 'components/INC/config.php'; echo $title;?></h1>
        <!-- navbar -->
        <?php include("./components/nav.php");?>
    </header>
    <!-- end header -->

    <!-- start main -->
    <main class="container">
    
        <!-- Greet user -->
        <section class="intro">
            <h2><?php echo 'User Name'?><h2>
        </section>

        <section class="recent">
            <h2>Recents Accolates</h2>

            <!-- Need to create module -->
            <div class="badge">
                <a href=""><img src="https://placehold.co/100x100"></a>
                <a href=""><img src="https://placehold.co/100x100"></a>
                <a href=""><img src="https://placehold.co/100x100"></a>
                <a href=""><img src="https://placehold.co/100x100"></a>
            </div>

        </section>

        <section class="dynamic">
            <h2>Top Accolates</h2>
            <div class="box">
                <?php include("./components/badge-card.php");?>
                <?php include("./components/badge-card.php");?>
                <?php include("./components/badge-card.php");?>
                <?php include("./components/badge-card.php");?>
        </section>

        <section class="achiever">
            <h3><?php echo 'GROUP NAME';?> Leaderboard</h3> <!-- [TODO: Upgrade to $GET group name] -->
            <?php include 'components/league-group.php'; ?>
        </section>
    </main>
    <!-- end main -->
</body>
</html>