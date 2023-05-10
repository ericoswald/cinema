<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <title> </title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href=<?= ROOT_URL ."CSS/main.css" ?> type="text/css" media="all">
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
                <li><a href="">films</a></li>
                <li><a href="">salles</a></li>
                <li><a href="">événements</a></li>
                <li><a href="">cartes et offres</a></li>
                <li class="quelfilm"><a href="quizz">quel film ? </a></li>
            </ul>
        </nav>
        <nav id="secondaire">
        <a href=""><i class="fa-solid fa-magnifying-glass search-icone"></i></a>
            <a href=""><i style="rotate : -45deg" class="fa-solid fa-ticket ticket-icon"></i></a>
            <a href=""><i class="fa-regular fa-user account-icon"></i></a>
        </nav>
    </header>

    <?php include($mainTemplate); ?>

    <footer></footer>

    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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