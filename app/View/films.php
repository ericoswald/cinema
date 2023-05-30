<div class="page-film">
    <div class="premiere-ligne">
        <div>

            <select name="genre" id="genre-select">
                <option value="">Genre</option>
                <option value="action">Action</option>
                <option value="adventure">Aventure</option>
                <option value="romance">Romance</option>
                <option value="comedy">Comédie</option>
                <option value="drama">Drame</option>
                <option value="crime">Policier</option>
            </select>
        </div>
        <div>

            <select name="language" id="language-select">
                <option value="">Langue</option>
                <option value="vf">VF</option>
                <option value="vo">Version originale</option>
                <option value="vostfr">VOSTFR</option>
            </select>
        </div>


        <div>
            <select name="accessibility" id="accessibility-select">
                <option value="">Accessibilité</option>
                <option value="audiodescription">Audio description</option>
                <option value="sous-titres">Sous-titres</option>
                <option value="langue-des-signes">Langue des signes</option>

            </select>
        </div>
    </div>
    <div class="deuxieme-ligne">
        <label for="rating-range" class="label-rating">Notes :</label>
        <input type="range" name="rating" id="rating-range" min="0" max="10" step="1">
        <span style="padding:5px" id="note-value"></span>
    </div>
    <div class="troisieme-ligne">
        <div>
            <label for="sort-select" class="label-rating">Sort By :</label>
            <select name="sort" id="sort-select">
                <option value="">Aucun tri</option>
                <option value="positif">Avis les plus positifs</option>
                <option value="negatif">Avis les plus négatifs</option>
                <option value="recent">Date de sortie récente</option>
                <option value="ancien">Date de sortie ancienne</option>
                <option value="titre_asc">Titre (A-Z)</option>
                <option value="titre_desc">Titre (Z-A)</option>
            </select>
        </div>
        <div style="display:none;align-items :center;">

            <i class="fa-solid fa-bars"></i>
            <hr style="rotate:90deg;width:20px">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="film-card">

        <div class="left-image"><img src="https://image.tmdb.org/t/p/w342/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg" alt="affiche-film-john-wick-chapitre-4">
            <u><span>Bande-annonce</span></u>
        </div>
        <div class="center-description ">
            <h2>John Wick: Chapter 4</h2>
            <span>2023 </span>
            <span>Action, Thriller, Crime</span>
            <span>With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table. But
                before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across
                the globe and forces that turn old friends into foes.</span>
            <hr> <span><b>Director :</b> Chad Stahelski</span>
            <span><b>Cast :</b> Keanu Reeves , Donnie Yen , Bill Skarsgård , Ian McShane</span>
        </div>
        <div class="right-note">
            <div class="note-bubble">
                <div class="note">8 / 10</div>
            </div>
            <button>Reserver sa place <i class="fa-solid fa-ticket" style="rotate : -45deg"></i> </button>
        </div>

    </div>
    <div class="film-card">

        <div class="left-image"><img src="https://image.tmdb.org/t/p/w342/vZloFAK7NmvMGKE7VkF5UHaz0I.jpg" alt="affiche-film-john-wick-chapitre-4">
            <u><span>Bande-annonce</span></u>
        </div>
        <div class="center-description ">
            <h2>John Wick: Chapter 4</h2>
            <span>2023 </span>
            <span>Action, Thriller, Crime</span>
            <span>With the price on his head ever increasing, John Wick uncovers a path to defeating The High Table. But
                before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across
                the globe and forces that turn old friends into foes.</span>
            <hr> <span><b>Director :</b> Chad Stahelski</span>
            <span><b>Cast :</b> Keanu Reeves , Donnie Yen , Bill Skarsgård , Ian McShane</span>
        </div>
        <div class="right-note">
            <div class="note-bubble">
                <div class="note">8 / 10</div>
            </div>
            <button>Reserver sa place <i class="fa-solid fa-ticket" style="rotate : -45deg"></i> </button>
        </div>

    </div>
</div>
<script>
    const ratingRange = document.getElementById('rating-range');
    const noteValue = document.getElementById('note-value');

    ratingRange.addEventListener('input', function() {
        const note = ratingRange.value;
        noteValue.innerHTML = `${note}`;
    });
</script>