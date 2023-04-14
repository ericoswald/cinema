<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>


    <form action="index.php" method="post">

        <!-- <input type="hidden" name="salle" value="1">
        <input type="submit" value="Salle 1"> -->
        <select name="salle" id="salle">
            <option value="1">Salle 1</option>
            <option value="2">Salle 2</option>
            <option value="3">Salle 3</option>

        </select>
        <input type="submit" value="Valider">


    </form>

    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=cinemaa', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    var_dump(isset($_POST['salle']));
    $requ = $pdo->prepare('SELECT * FROM places WHERE salle_id = :salle_id');
    $requ->bindValue(':salle_id', isset($_POST['salle']) ? $_POST['salle'] : '1', PDO::PARAM_INT);
    $requ->execute();
    $places = $requ->fetchAll(PDO::FETCH_ASSOC);
    $range = 'A';
    foreach ($places as $place) {
        // var_dump($place['place_id']);
        // var_dump($place['salle_id']);
        // var_dump($place['numero']);
        // var_dump($place['rangee']);
        // var_dump($place['etat']);
        if ($place['rangee'] != $range) {
            $range = $place['rangee'];
            echo '<br>';
        }
        echo '<i id= ' . $place['place_id'] . $place['etat'] . ' class="fa-solid fa-user"></i>';
    }
    var_dump(count($places));
    ?>




</body>
<script src="https://kit.fontawesome.com/f89789cb4a.js" crossorigin="anonymous"></script>
<script>
    const places = document.querySelectorAll('i');
    console.log(places);
    places.forEach(place => {
        console.log("ici : " + place.id);
        place.id.substring(place.id.length - 1) == '0' ? place.style.color = 'black' : place.style.color = 'red';
        let isClicked = false;
        place.addEventListener('click', () => {

            if (place.style.color == 'black' || place.style.color == 'green') {
                if (isClicked) {
                    place.style.color = 'black';
                } else {
                    place.style.color = 'green';
                }
                isClicked = !isClicked;
            }

        })

    })
</script>

</html>