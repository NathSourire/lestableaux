<?php
$tab=array(59=>'Nord', 62=>'Pas-de-calais', 02=>'Aines',60=>'Oise',80=>'Somme');
// $tab[0][0] = 'Nord';
// $tab[0][1] = 59;
// $tab[1][0] = 'Pas de calais';
// $tab[1][1] = 62;
// $tab[2][0] = 'Aines';
// $tab[2][1] = 02;
// $tab[3][0] = 'Oise';
// $tab[3][1] = 60;
// $tab[4][0] = 'Somme';
// $tab[4][1] = 80;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 5</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 5</h1>
            <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
        </div>
    </header>
    <main class="container- fluid">
    <div class="row">
        <?php var_dump($tab) ?>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>