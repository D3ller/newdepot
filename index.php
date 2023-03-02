<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Home | Spotify</title>
    <meta name="description" content="Spotify is a digital music service that gives you access to millions of songs.">
    <link rel="stylesheet" href="index.css">
    <link rel="preload" as="font">
    <meta http-equiv="Cache-Control" content="max-age=1209600">


</head>
<body>

<?php require_once 'headers.php';   ?>

<p id="home">Bonjour,</p>

<div id="recent">
<div class="recent">
    <div class="recent-container">
<img class="recent-img" alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/liked.webp">
<p class="recent-text">Titre likées</p>
</div>
</div>

<div class="recent">
<div class="recent-container">
<img class="recent-img" alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/discover.webp">
<p class="recent-text">Découverte</p>
</div>
</div>

<div class="recent">
<div class="recent-container">
<img class="recent-img" alt="Image titrés likées"  src="https://maxsteel.karibsen.fr/image/shawty2.webp">
<p class="recent-text">shwty</p>
</div>
</div>

<div class="recent">
<div class="recent-container">
<img class="recent-img" alt="Image titrés likées"  src="https://maxsteel.karibsen.fr/image/liked.webp">
<p class="recent-text">Titre likées</p>
</div>
</div>

<div class="recent">
<div class="recent-container">
<img class="recent-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/liked.webp">
<p class="recent-text">Titre likées</p>
</div>
</div>

<div class="recent">
<div class="recent-container">
<img class="recent-img" alt="Image titrés likées"  src="https://maxsteel.karibsen.fr/image/liked.webp">
<p class="recent-text">Titre likées</p>
</div>
</div>
</div>

<div id="allcontainer"><p id="home" style="padding-top: 0px">Réecouter vos anciens favoris</p><p id="all"><a onclick="showall()" id="alls">Voir tout</a></p></div>

<div class="old">

<div class="old-container">
<a href="https://open.spotify.com/playlist/37i9dQZF1EpkOGPgmac2eg?si=35faa5a5c7764a35"><img class="old-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/enboucle1.webp"></a>
<p class="old-text">En boucle</p>
<p class="old-artist">Vos coups de coeur du moment</p>
<button class="play" aria-label="Bouton permettant de jouer la musique"><i class="fa-solid fa-play" onclick="pp(this)"></i></button>
</div>

<div class="old-container">
<a href="https://open.spotify.com/playlist/37i9dQZF1E37Jl04dK8lul?si=95665753309a42a7"><img class="old-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/dailymix11.webp"></a>
<p class="old-text">Daily Mix</p>
<p class="old-artist">8ruki, Osirus Jack, Freeze Corleone, Norsacce..</p>
<button class="play" aria-label="Bouton permettant de jouer la musique"><i class="fa-solid fa-play" onclick="pp(this)"></i></button>
</div>

<div class="old-container">
<a href="https://open.spotify.com/playlist/37i9dQZF1EJBzb3qrGFHP4?si=47f554694dd0487b"><img class="old-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/mixaplus.webp"></a>
<p class="old-text">Mix à plusieurs</p>
<p class="old-artist">kora + louis + raxeris</p>
<button class="play" aria-label="Bouton permettant de jouer la musique"><i class="fa-solid fa-play" onclick="pp(this)"></i></button>
</div>

<div class="old-container">
<a href="https://open.spotify.com/playlist/37i9dQZF1F0sijgNaJdgit?si=511bbd27c35943b2"><img class="old-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/20222.webp"></a>
<p class="old-text">Vos top titres de 2022</p>
<p class="old-artist">kora + louis + raxeris</p>
<button class="play" aria-label="Bouton permettant de jouer la musique"><i class="fa-solid fa-play" onclick="pp(this)"></i></button>
</div>


<div class="old-container">
<a href="https://open.spotify.com/playlist/1qSxPsKuDgD1vaWdznuHlB?si=63ea84e7a44642b5"><img class="old-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/dark.webp"></a>
<p class="old-text">🖤</p>
<p class="old-artist">Retrouvez les pures sons du 667</p>
<button class="play" aria-label="Bouton permettant de jouer la musique"><i class="fa-solid fa-play" onclick="pp(this)"></i></button>
</div>

<div class="hiddens">
<a href="https://open.spotify.com/album/3oQyml9risLFydUdMy9Ixf?si=6c1ee3f074434325"><img class="old-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/osi.webp"></a>
<p class="old-text">Nouvelle ère</p>
<p class="old-artist">Découvrez le nouvelle album d'Osirus Jack</p>
<button class="play" aria-label="Bouton permettant de jouer la musique"><i class="fa-solid fa-play" onclick="pp(this)"></i></button>
</div>

<div class="hiddens">
<a href="https://open.spotify.com/playlist/37i9dQZF1E4lESBPpUhL76?si=ea1f9c2bb1e24223"><img class="old-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/667radio.webp"></a>
<p class="old-text">Radio 667</p>
<p class="old-artist">Avec CFR, Slim C, Kaki Santana et bien d'autres..</p>
<button class="play" aria-label="Bouton permettant de jouer la musique" ><i class="fa-solid fa-play" onclick="pp(this)"></i></button>
</div>


<div class="hiddens">
<a href="https://open.spotify.com/playlist/37i9dQZF1DZ06evO2JBmWS?si=cd46e68d9b044e17"><img class="old-img"  alt="Image titrés likées" src="https://maxsteel.karibsen.fr/image/thsis667.webp"></a>
<p class="old-text">This is 667</p>
<p class="old-artist">Découvrez les artistes inconnu du 667</p>
<button class="play" aria-label="Bouton permettant de jouer la musique"><i class="fa-solid fa-play" onclick="pp(this)"></i></button>
</div>



</div>

<p id="home" style="padding-top: 0px">Découvrez les artistes du 667</p></div>

  <div class="old">

<div class="round">
    <img src="https://maxsteel.karibsen.fr/image/OsirusStable.webp" alt="667" class="round-img">
        <p class="round-title">Osirus Jack</p>
        <p class="round-desc">Artiste</p>

        </div>

        <div class="round">
    <img src="https://maxsteel.karibsen.fr/image/freezestable" alt="667" class="round-img">
        <p class="round-title">Freeze Corleone</p>
        <p class="round-desc">Artiste</p>

        </div>

        <div class="round">
    <img src="https://maxsteel.karibsen.fr/image/kakistable.webp" alt="667" class="round-img">
        <p class="round-title">Kaki Santana</p>
        <p class="round-desc">Artiste</p>

        </div>

        <div class="round">
    <img src="https://maxsteel.karibsen.fr/image/norsacce1.webp" alt="667" class="round-img">
        <p class="round-title">Norsacce</p>
        <p class="round-desc">Artiste</p>

        </div>
    
</div>


    

<?php require_once 'footer.php';   ?>


<script>

    function showall() {
const hiddenElements = document.querySelectorAll('.hiddens');
const hiddenCount = hiddenElements.length;

console.log(hiddenCount);

if(hiddenCount == 0) {
  document.getElementById("alls").innerHTML = "Voir tout";
  const hiddenElements = document.querySelectorAll('.visualed');
  hiddenElements.forEach(element => {
    element.classList.remove('visualed');
    element.classList.remove('old-container');
    element.classList.add('hiddens');
  });
  return;
}

hiddenElements.forEach(element => {
  element.classList.remove('hiddens');
  element.classList.add('old-container');
  element.classList.add('visualed');
  document.getElementById("alls").innerHTML = "Voir moins";
});
    }

    </script>


</script>
</body>
</html>


