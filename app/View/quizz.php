<div id="quiz-container">

    <!-- Question 1 -->
    <div class="question show " id="question1">
        <img src="<?= ROOT_URL ?>assets\question1.png" alt="banniere-question1-animals">
        <h2>Si vous pouviez être un animal, lequel seriez-vous ?</h2>
        <div class="reponses">
            <label>
                <input type="radio" name="q1" value="a">
                <span>Aigle</span>
            </label>
            <label>
                <input type="radio" name="q1" value="b">
                <span>Dauphin</span>
            </label>
            <label>
                <input type="radio" name="q1" value="c">
                <span>Loup</span>
            </label>
            <label>
                <input type="radio" name="q1" value="d">
                <span>Singe</span>
            </label>
        </div>
        <div class="ligne-boutton">
            <button  class="hvr-backward" style="visibility:hidden;" onclick="previousQuestion(1)">Précédent</button>
            <button class="hvr-forward " onclick="nextQuestion(1)"><span>Suivant</span><i class="fa-solid fa-arrow-right"></i></button></div>
    </div>

    <!-- Question 2 -->
    <div class="question" id="question2">
        <img src="<?= ROOT_URL ?>assets\question1.png" alt="banniere-question1-animals">
        <h2>Si vous pouviez voyager dans le temps, quelle époque choisiriez-vous ?</h2>
        <div class="reponses">
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
        <div class="ligne-boutton">
        <button  class="hvr-backward"  onclick="previousQuestion(2)"><i class="fa-solid fa-arrow-left"></i><span>Précédent</span></button>
            <button class="hvr-forward " onclick="nextQuestion(2)"><span>Suivant</span><i class="fa-solid fa-arrow-right"></i></button></div>    </div>

    <!-- Question 3 -->
    <div class="question" id="question3">
        <img src="<?= ROOT_URL ?>assets\question1.png" alt="banniere-question1-animals">
        <h2>Si vous deviez choisir une couleur pour représenter votre personnalité, laquelle choisiriez-vous ?</h2>

        <div class="reponses">
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
        <div class="ligne-boutton">
        <button  class="hvr-backward"  onclick="previousQuestion(3)"><i class="fa-solid fa-arrow-left"></i><span>Précédent</span></button>
        <button class="hvr-forward " onclick="nextQuestion(3)"><span>Suivant</span><i class="fa-solid fa-arrow-right"></i></button></div>    </div>
    

    <!-- Question 4 -->

    <div class="question" id="question4">
        <img src="<?= ROOT_URL ?>assets\question1.png" alt="banniere-question1-animals">
        <h2>Si vous deviez choisir une saison pour représenter votre état d'esprit, laquelle choisiriez-vous ?</h2>
        <div class="reponses">
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
        <div class="ligne-boutton">
        <button  class="hvr-backward"  onclick="previousQuestion(4)"><i class="fa-solid fa-arrow-left"></i><span>Précédent</span></button>
            <button class="hvr-forward " onclick="nextQuestion(4)"><span>Suivant</span><i class="fa-solid fa-arrow-right"></i></button></div>    </div>
    
    <div class="question " id="question5">
    <!-- Bouton pour soumettre les réponses -->
    <div class="reveal">
       
        <img src="<?= ROOT_URL ?>assets\question1.png" alt="banniere-question1-animals">
        <h2>Merci d'avoir fais le quizz !</h2>
        <button type="submit"><a href="like">Voir mes films recommandés</a></button>
    </div>
    </div>
</div>
<script>
    let currentQuestion = 1;

    function nextQuestion(questionNumber) {
        const currentQuestionElement = document.getElementById(`question${questionNumber}`);
        const nextQuestionElement = document.getElementById(`question${questionNumber + 1}`);

        currentQuestionElement.classList.remove('show');
        nextQuestionElement.classList.add('show');
        currentQuestion = questionNumber + 1;
    }

    function previousQuestion(questionNumber) {
        const currentQuestionElement = document.getElementById(`question${questionNumber}`);
        const previousQuestionElement = document.getElementById(`question${questionNumber - 1}`);

        currentQuestionElement.classList.remove('show');
        previousQuestionElement.classList.add('show');
        currentQuestion = questionNumber - 1;
    }
</script>