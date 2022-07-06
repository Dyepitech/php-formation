<!DOCTYPE html>
<html lang="fr">

<?php

function multiplication(){ 
    echo ' <tr> x ';
    for($i = 0; $i <= 11; $i++) {
        echo '<td> '. $i. ' </td>';
        for($j = 0; $j <= 11; $j++){
            echo '<td> ' .($i*$j). ' </td>';
        }
        echo '<br / > </tr>';
    }
}

// function multiplication(){ 
//     $size = 11;
    
//     echo 'x ';
//     for ($k = 0; $k < $size; $k++)
//         echo ' ' .$k. ' ';
//     echo ' <br />';
//     $k = 0;
//     for ($i = 0; $i < $size; $i++)
//     {
//         echo ' ' .$k++. ' ';
//         for ($j = 0; $j < $size; $j++){
//             echo $j * $i. ' ';
//         }
//         echo '<br />';
//     }
// }

function multiplefive(){
    for ($i = 1; $i <= 10; $i++) {
        echo '5 x ' . $i. ' = '. 5*$i;
        echo '<br />';
    }
}

function trianglerectangle(){ 
    $size = 10;
    for ($i = 0; $i < $size; $i++)
    {
        for ($j = $i; $j < $size; $j++){
            echo '😈';
        }
        echo '<br />';
    }
}

function squarestar(){ 
    $size = 10;

    for ($i = 0; $i < $size; $i++)
    {
        for ($j = 0; $j < $size; $j++){
            echo '🖕';
        }
        echo '<br />';
    }

}

function superstar() {
    for($i = 0; $i < 10; $i++)
        echo '*';
}

function pairs() {
    for ($i = 0; $i != 100; $i++){
        if (($i % 2) == 0)
            echo $i . ' ';
        else
            echo ' ';
    }
}

function rebours() {
    for ($i = 10; $i != -1; $i--)
        echo $i . ' ';
}

function pgcd($a, $b)
{
    while ($b > 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }
    return $a;
}


function fizzbuzz($nb1) {
    if ($nb1 % 15 == 0){
        echo 'FizBuzz ';
        return;
    }
    if ($nb1 % 3 == 0){
        echo 'Fiz ';
        return;
    }
    else if ($nb1 % 5 == 0){
        echo 'Buzz ';
        return;
    }
    else
        echo $nb1;
}

function foreachloop($firstnames) {
    foreach ($firstnames as $index => $firstname) {
        echo '<h3>'. $index. ' : '. $firstname. '</h3>';
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <h2 class="text-center">Nombres de 10 à 0</h2>

    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
            rebours();
        ?>
    </div>
    <h2 class="text-center">Nombres pairs</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
            pairs();
        ?>
    </div>
    <h2 class="text-center">PGCD</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
            echo pgcd(100,10);
        ?>
    </div>
    <h2 class="text-center">FizBuzz</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
            for ($i = 0; $i < 100; $i++)
                echo '<br />' . fizzbuzz($i);
        ?>
    </div>
    <h2 class="text-center">ForEach</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
            $firstnames = ['Fiorella', 'Marina', 'Matthieu'];
            foreachloop($firstnames);
        ?>
    </div>
    <h2 class="text-center">SuperStar</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
            superstar();
        ?>
    </div>
    <h2 class="text-center">SquareStar</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
            squarestar();
        ?>
    </div>
    <h2 class="text-center">TriangleRectangle</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4">
        <?php
            trianglerectangle();
        ?>
    </div>
    <h2 class="text-center">Table de 5</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4">
        <?php
            multiplefive();
        ?>
    </div>
    <h2 class="text-center">Table de multiplication</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 flex">
        <?php
            echo '<table>';
            multiplication();
            echo '</table>';
        ?>
    </div>
</body>

</html>