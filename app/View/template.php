<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explorez le monde magique du cinéma sur notre site dédié aux passionnés du septième art. Plongez dans un univers riche en émotions, découvrez les dernières actualités cinématographiques, les critiques de films, les bandes-annonces captivantes et les informations sur vos acteurs et réalisateurs préférés. Notre site vous offre une expérience immersive où vous pouvez vous tenir au courant des sorties cinéma, explorer des genres variés, et trouver des recommandations personnalisées en fonction de vos goûts. Rejoignez notre communauté de cinéphiles et partagez votre amour du cinéma à travers des discussions animées et des échanges enrichissants. Que vous soyez un amateur passionné ou un professionnel du cinéma, notre site est votre porte d'entrée vers l'univers fascinant du grand écran. Plongez dans l'art du cinéma avec nous !">
    <meta name="keywords" content="cinéma, films, acteurs, réalisateurs">
    <meta name="author" content="Eric OSWALD">
    <meta name="robots" content="index, follow">
    <meta name="language" content="fr">
    <meta name="category" content="cinéma">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Kalam&display=swap" rel="stylesheet">

    <link href=<?= ROOT_URL . "CSS/hover.css" ?> rel="stylesheet" media="all">

    <title> <?php echo $title; ?> </title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href=<?= ROOT_URL . "CSS/main.css" ?> type="text/css" media="all">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>

    <header>
        <a href=<?= "home" ?>><img src="<?= ROOT_URL ?>assets\logocinema.png" alt="LogoDuSite"></a>
        <nav id="principal">
            <ul>
                <li><a href="films">films</a></li>
                <li><a href="salles">salles</a></li>
                <li><a href="event">événements</a></li>
                <li><a href="offer">cartes et offres</a></li>
                <li class="quelfilm"><a href="quizz">quel film ? </a></li>
            </ul>
        </nav>
        <nav id="secondaire">
            <a href="films"><i class="fa-solid fa-magnifying-glass search-icone"></i></a>
            <a href="reserver"><i style="rotate : -45deg" class="fa-solid fa-ticket ticket-icon"></i></a>
            <a href="account"><i class="fa-regular fa-user account-icon"></i></a>
        </nav>
    </header>

    <?php include($mainTemplate); ?>

    <footer></footer>

    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>


<script src="https://kit.fontawesome.com/f89789cb4a.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    $('.single-item').slick({
        slidesToShow: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 20000,
        arrows: false,

        speed: 2000,

    });
</script>

</html>