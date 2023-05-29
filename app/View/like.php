<div class="parent">
    <div class="div1">
        <div class="text-film">
        <h1 style="color: var(--beige-cine);">Veuillez choisir les films que vous appreciez.</h1>
        
        <span> Nous pouvons ainsi trouver les films que vous allez adorer. <b style="color: var(--couleur-rouge-cine);">Sélectionnez ceux que vous aimez
               .</b></span>
        <img src="<?= ROOT_URL ?>assets\stuff_cinema.png">
        
        <a href="films"><button >Terminé</button></a>
        </div>
    </div>
    <div class="div2"><div class="liste-film"> <?php 

    for($i=0; $i<15;$i++){
        echo "<div class=\"block-film \"><img src=\"" . ROOT_URL ."assets\black-panther.jpg\" alt=\"affiche-cinema-film-black-panther\"><i class=\"fa-solid fa-heart\"></i></div>";
        }?></div>
        
        </div>
</div>
<script>
console.log("hello");
const affiches = document.getElementsByClassName("block-film");
let like_bool = false;

for (let index = 0; index < affiches.length; index++) {
  const affiche = affiches[index];
  affiche.addEventListener("click", like, false);
}

function like() {
  if (like_bool) {
    this.classList.remove("film-choisi");
    like_bool = false;
  } else {
    this.classList.add("film-choisi");
    like_bool = true;
  }
}
</script>
