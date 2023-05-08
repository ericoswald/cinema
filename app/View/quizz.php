<!-- <!DOCTYPE html>
<html>
<head>
	<title>Mon quizz cinéma</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> -->
<h1>Mon quizz cinéma</h1>
<form id="quiz">
    <!-- Question 1 -->
    <div class="question">
        <h2>Si vous pouviez être un animal, lequel seriez-vous ?</h2>
        <label>
            <input type="radio" name="q1" value="a">
            <span>Un aigle</span>
        </label>
        <label>
            <input type="radio" name="q1" value="b">
            <span>Un dauphin</span>
        </label>
        <label>
            <input type="radio" name="q1" value="c">
            <span>Un loup</span>
        </label>
        <label>
            <input type="radio" name="q1" value="d">
            <span>Un singe</span>
        </label>
    </div>

    <!-- Question 2 -->
    <div class="question">
        <h2>Si vous pouviez voyager dans le temps, quelle époque choisiriez-vous ?</h2>
        <label>
            <input type="radio" name="q2" value="a">
            <span>L'Egypte Antique</span>
        </label>
        <label>
            <input type="radio" name="q2" value="b">
            <span>La Renaissance</span>
        </label>
        <label>
            <input type="radio" name="q2" value="c">
            <span>Le Far West</span>
        </label>
        <label>
            <input type="radio" name="q2" value="d">
            <span>Les années 80</span>
        </label>
    </div>

    <!-- Question 3 -->
    <div class="question">
        <h2>Si vous deviez choisir une couleur pour représenter votre personnalité, laquelle choisiriez-vous ?</h2>
        <label>
            <input type="radio" name="q3" value="a">
            <span>Rouge</span>
        </label>
        <label>
            <input type="radio" name="q3" value="b">
            <span>Bleu</span>
        </label>
        <label>
            <input type="radio" name="q3" value="c">
            <span>Jaune</span>
        </label>
        <label>
            <input type="radio" name="q3" value="d">
            <span>Vert</span>
        </label>
    </div>

    <!-- Question 4 -->
    <div class="question">
        <h2>Si vous deviez choisir une saison pour représenter votre état d'esprit, laquelle choisiriez-vous ?</h2>
        <label>
            <input type="radio" name="q4" value="a">
            <span>Le printemps</span>
        </label>
        <label>
            <input type="radio" name="q4" value="b">
            <span>L'été</span>
        </label>
        <label>
            <input type="radio" name="q4" value="c">
            <span>L'automne</span>
        </label>
        <label>
            <input type="radio" name="q4" value="d">
            <span>L'hiver</span>
        </label>
    </div>

    <!-- Bouton pour soumettre les réponses -->
    <button type="submit">Voir mes films recommandés</button>
</form>

<!-- Zone pour afficher les résultats -->
<div id="resultats"></div>

<!-- Import de la logique JS -->
<script>
    // Récupération du formulaire et de la zone des résultats
    const quiz = document.getElementById('quiz');
    const resultats = document.getElementById('resultats');

    // Écouteur d'événement pour le formulaire
    quiz.addEventListener('submit', (e) => {
                // Empêcher le formulaire de se recharger
                e.preventDefault();

                // Récupération des réponses
                const reponses = new FormData(quiz);

                // Tableau contenant les films recommandés pour chaque réponse
                const films = [{
                    question: 1,
                    reponses: {
                        a: 'La Terre et le Sang',
                        b: 'Le Monde de Dory',
                        c: 'Alpha',
                        d: 'Le Roi Lion'
                    }
                }, {
                    question: 2,
                    reponses: {
                        a: 'La Momie',
                        b: 'Les Trois Mousquetaires',
                        c: 'Django Unchained',
                        d: 'Ready Player One'
                    }
                }, {
                    question: 3,
                    reponses: {
                        a: 'Les Évadés',
                        b: 'Le Grand Bleu',
                        c: 'Kill Bill',
                        d: 'Le Seigneur des Anneaux'
                    }
                }, {
                    question: 4,
                    reponses: {
                        a: 'Pirates des Caraïbes',
                        b: 'Le Parrain',
                        c: 'Les Dents de la Mer',
                        d: 'Retour vers le Futur'
                    }
                }];

                // Tableau contenant les réponses de l'utilisateur
                const userReponses = [];

                // Pour chaque réponse du formulaire, ajouter la réponse à userReponses
                reponses.forEach((reponse) => {
                    userReponses.push(reponse[1]);
                });

                // Tableau contenant les films recommandés pour l'utilisateur
                const filmsRecommandes = [];

                // Pour chaque réponse de l'utilisateur, trouver le film recommandé correspondant
                userReponses.forEach((reponse, index) => {
                    const film = films[index].reponses[reponse];
                    filmsRecommandes.push(film);
                });

                // Afficher les résultats
                resultats.innerHTML = `
	<h2>Voici les films recommandés pour vous :</h2>
	<ul>
		<li><strong>Question 1 :</strong> ${filmsRecommandes[0]}</li>
		<li><strong>Question 2 :</strong> ${filmsRecommandes[1]}</li>
		<li><strong>Question 3 :</strong> ${filmsRecommandes[2]}</li>
		<li><strong>Question 4 :</strong> ${filmsRecommandes[3]}</li>
	</ul>
`;}

</script>