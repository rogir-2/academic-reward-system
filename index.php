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
            <h3>Leaderboard</h3>
            <table>
                <th>Rank</th>
                <th>Name</th>
                <th>Points</th>
                <th>Tier</th>

                <tbody>
                    <tr>
                      <td data-label="Rank">1</td>
                      <td data-label="Name">Alice</td>
                      <td data-label="Points">1200</td>
                      <td data-label="Tier">💍</td>
                    </tr>
                    <tr>
                      <td data-label="Rank">2</td>
                      <td data-label="Name">Bob</td>
                      <td data-label="Points">950</td>
                      <td data-label="Tier">⚱️</td>
                    </tr>
                    <tr>
                      <td data-label="Rank">3</td>
                      <td data-label="Name">Charlie</td>
                      <td data-label="Points">870</td>
                      <td data-label="Tier">🪙</td>
                    </tr>
                  </tbody>

            </table>
        </section>
    </main>
    <!-- end main -->
</body>
</html>