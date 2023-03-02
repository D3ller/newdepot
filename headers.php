<ul class="spawn">
    <li><a <?php if($_SERVER['PHP_SELF'] == '/sae203/index.php') {echo 'class="active"';}?> href="index.php">ACCUEIL</a></li>
    <li><a <?php if($_SERVER['PHP_SELF'] == '/sae203/listing.php') {echo 'class="active"';}?> href="listing.php">CATALOGUE</a></li>
    <li><a <?php if($_SERVER['PHP_SELF'] == '/sae203/contact.php') {echo 'class="active"';}?> href="contact.php">PRIVE</a></li>
    <li><a <?php if($_SERVER['PHP_SELF'] == '/sae203/form_recherche.php') {echo 'class="active"';}?> href="form_recherche.php">RECHERCHE</a></li>

</ul>



<div id="nbe">
<i id="actives" class="fa-solid fa-bars tb" style="color: white;"></i>
    <div id="nvb" class=" visuallyhidden hidden">
        <nav>
            <div class="box">
            <div class="sbutton" ><a <?php if($_SERVER['PHP_SELF'] == '/sae203/index.php') {echo 'class="active"';}?>  href="index.php">Accueil<br></a>
                </div>
                <div class="sbutton"><a <?php if($_SERVER['PHP_SELF'] == '/sae203/listing.php') {echo 'class="active"';}?> href="listing.php">Catalogue<br></a>
                </div>
                <div class="sbutton"><a <?php if($_SERVER['PHP_SELF'] == '/sae203/contact.php') {echo 'class="active"';}?> href="https://archivecore.fr/publier">Privée</a></div>
                <div class="sbutton"><a <?php if($_SERVER['PHP_SELF'] == '/sae203/form_recherche.php') {echo 'class="active"';}?> href="form_recherche.php">Recherche</a></div>

            </div>

        </nav>
    </div>
</div>

<script>
    let box = document.getElementById("nvb"),
        btn = document.querySelector("#actives"),
        sbtn = document.getElementsByClassName("sbutton");
    
    btn.addEventListener("click", function () {
      if (box.classList.contains("hidden")) {
        box.classList.remove("hidden");
        for (var i = 0; i < sbtn.length; i++) {
          sbtn[i].style.display = "initial";
        }
        btn.classList.add("fa-xmark")
        btn.classList.remove("fa-bars")
        btn.classList.add("rotate");
        box.style.transform = "translateX(0%)";
        box.style.transition = "transform 0.5s ease-in-out";
      } else {
        btn.classList.add("fa-bars")
        btn.classList.remove("fa-xmark")
        btn.classList.remove("rotate");
        box.classList.add("hidden");
        box.style.transform = "translateX(-150%)";
        box.style.transition = "transform 0.5s ease-in-out";
      }
    }, false);
    


document.addEventListener("click", function(event) {
    if(event.target.closest("#nbe") == null){
        btn.classList.add("fa-bars")
        btn.classList.remove("fa-xmark")
        btn.classList.remove("rotate");

        box.style.transform = "translateX(-150%)";
        box.style.transition = "transform 0.5s ease-in-out";
    }
});

document.addEventListener("click", function(event) {
    if (btn.classList.contains("fa-bars")) {

    if(event.target.closest(".fa-bars") == null){
        btn.classList.add("fa-bars")
        btn.classList.remove("fa-xmark")
        btn.classList.remove("rotate");
        box.classList.add("hidden");
        box.style.transform = "translateX(-150%)";
        box.style.transition = "transform 0.5s ease-in-out";
    }

    } else {
        btn.classList.add("fa-xmark")
        btn.classList.remove("fa-bars")
        btn.classList.add("rotate");
        box.style.transform = "translateX(0%)";
        box.style.transition = "transform 0.5s ease-in-out";
    }
});


function pp(element) {

    if(element.classList.toggle("fa-play")) {
        console.log("wow")
        element.classList.remove('fa-pause');
element.style.fontSize = "20px";

    } else {


document.querySelectorAll(".fa-pause").forEach(sl => {
    sl.classList.remove('fa-pause');
    sl.classList.add("fa-play")
    sl.style.fontSize = "20px"

    });

element.classList.remove('fa-play');
element.classList.add('fa-pause');
element.style.fontSize = "25px"




    }


}

</script>

