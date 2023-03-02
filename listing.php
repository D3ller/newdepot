<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php require_once 'headers.php';   ?>

<p id="home">Catalogue</p>

<div id="playlist">

<img id="playlist-img" src="https://maxsteel.karibsen.fr/image/catalogue.webp">

<div id="playlist-text">
<p id="playlist-type">Playlist publique</p>
<p id="playlist-title">Catalogue</p>

<p id="playlist-desc">Découvrez 5 sons de 10 artistes du 667</p>
<p style="margin-top: -10px; font-size: 14px" id="playlist-desc">Conçu par <span>kora.</span> | <span>50 titres, 2h09</span></p>


</div>

</div>

<div id="album">

<div class="single">
<p class="single-artist">1.</p>
<img class="single-img" src="https://www.abcdrduson.com/wp-content/uploads/2020/12/67e772f270eeff5f4af6e39cf7ecd2c1.1000x1000x1.jpg">
<p class="single-title">LMF</p>
<p class="single-artist">Freeze Corleone</p>
<p class="single-artist">3:25</p>


</div>

<div class="single">
<p class="single-artist">2.</p>

<img class="single-img" src="https://images.genius.com/62455d8e47389af9978c2e453bf1ccb6.1000x1000x1.jpg">
<p class="single-title">PBB</p>
<p class="single-artist">Freeze Corleone</p>
<p class="single-artist">4:55</p>


</div>
</div>

<?php require_once 'footer.php';   ?>

</body>
</html>

