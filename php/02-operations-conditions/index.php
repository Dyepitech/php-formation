<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <h2 class="text-center">Opérations en PHP</h2>
    <?php
    $nombre1 = 3;
    $nombre2 = 4;
    $nombre3 = 5;

    $resultats1 = $nombre1 + $nombre2;
    ?>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <p>3 + 4 = <?= $resultats1; ?></p>
        <p>4 x 5 = <?= $nombre2 * $nombre3; ?></p>
        <p>5 / 3 = <?= round($nombre3 / $nombre1); ?></p>
        <p>5 % 3 = <?= $nombre3 % $nombre1; ?></p>
        <p>2 <sup>3</sup> = <?= 2 ** 3; ?></p>
    </div>
    <h2 class="text-center">Opérations d'incrémentation</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <p>Résultat1 + 3 = <?= $resultats1 += 3 ?></p>
        <p>Résultat1 ++ = <?= $resultats1++ ?> (Vaut 10 car le ++ est a droite mais vaut 11 au prochain print) </p>
        <p>Résultat1 ++ = <?= ++$resultats1 ?></p>

        <p>
            <?php
            define('DEBUG', true);
            $sentence = 'Hello ';
            $sentence .= 'Fiorella';
            echo $sentence;

            ?>
        </p>
    </div>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
    <?php

        echo $a; // Affiche une NOTICE, mais le script ne s'arrête pas
        echo 1 / 0; // Affiche un WARNING, division par zéro
        
        echo 3;
        echo 4; // Affiche une ERROR Parse error: syntax error
        echo 6;
    ?>
    </div>
</body>

</html>