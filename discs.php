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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    </head>
    <body>
        <div id="app">
            <header>
                <div class="logo">
                    <img src="img/spotify-logo.png">
                </div> 
            </header>
            <main>
                <div class="main-container">
                    <div class="discs-container container">
                        <div class="disk-card" v-for="disk in discsList">
                            <div class="disk-cover">
                                <img :src="disk.poster" :alt="disk.title">
                            </div>
                            <h4>{{disk.title}}</h4>
                            <div class="info">
                                <p>{{disk.author}}</p>
                                <p>{{disk.year}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>