<?php

$_GET['recherche'] = htmlspecialchars($_GET['recherche']); 

$recherche = $_GET['recherche'];

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

<p id="home">Résultat de la recherche "<?php echo $recherche ?>"</p>



</body>
</html>
