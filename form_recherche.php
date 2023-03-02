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

<p id="home">Recherche</p>
<form action="reponse_recherche.php" method="GET">

<div id="searchbar">
<input type="text" id="search" name="recherche" placeholder="Recherchez un artiste ou une musique"> <button id="searchbtn" type="submit"><i id="search-icon" class="fa-solid fa-magnifying-glass"></i></button>
</div>
</form>

<?php require_once 'footer.php';   ?>


</body>
</html>