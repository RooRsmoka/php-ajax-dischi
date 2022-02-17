<?php

include __DIR__ . "/database/discsDb.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <header>
                <div class="logo">
                    <img src="img/spotify-logo.png">
                </div> 
            </header>
            <main>
                <div class="main-container">
                    <div class="discs-container container">
                    <?php
                    foreach ($dbDiscs as $disk) {
                    ?>
                        <div class="disk-card">
                            <div class="disk-cover">
                                <img src="<?php echo $disk['poster'] ?>" alt="">
                            </div>
                            <h4><?php echo $disk['title'] ?></h4>
                            <div class="info">
                                <p><?php echo $disk['author'] ?></p>
                                <p><?php echo $disk['year'] ?></p>
                            </div>
                        </div>
                    <?php    
                    }
                    ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>