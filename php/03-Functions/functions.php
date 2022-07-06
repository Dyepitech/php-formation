<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<?php
function ttc($a, $b, $c) {

    if ($c == true)
        return ($a * $b / 100 + $a);
    else
        return ($a * $b * 100 - $a);
}

function aire_circle($a, $b) {

    return ($a*$b * pi());
}


function aire($a, $b) {

    return ($a*$b);
}

function square($a) {

    return ($a*$a);
}

function moyenne(){
    $eleves = [
        0 => [
            'nom' => 'Matthieu',
            'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
        ],
        1 => [
            'nom' => 'Thomas',
            'notes' => [4, 18, 12, 15, 13, 7]
        ],
        2 => [
            'nom' => 'Jean',
            'notes' => [17, 14, 6, 2, 16, 18, 9]
        ],
        3 => [
            'nom' => 'Enzo',
            'notes' => [1, 14, 6, 2, 1, 8, 9]
        ]
    ];
    $total = 0;
    $elwithmoy = 0;
    $bestnote = 0;
    $bestname = "";
    foreach ($eleves as $key => $eleve) {
        echo $eleve['nom'] . ' à eu ';
        foreach ($eleve['notes'] as $index => $note){
            if ($note > $bestnote){
                $bestnote = $note;
                $bestname = $eleve['nom'];
            }
            $cnt = count($eleve['notes']);
            echo $note;
            $total += $note;
            if ($index < $cnt-1)
                echo ' , ';
        }
        if (round($total / $cnt-1) > 10)
            $elwithmoy++;
        echo '<br /> Sa moyenne est de '. round($total / $cnt-1). ' <br />';
        $total = 0;
    }
    echo 'Il y a ' .$elwithmoy. ' élèves qui ont la moyenne' .' <br />';
    echo $bestname. ' à eu la meilleure note avec: ' .$bestnote.'<br />';

}

function population() {
    //france suede, malte, allemagne
    $populations = [
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
    ];
    $nbtotalue = 0;

    foreach ($populations as $key => $population) {
        if ($population >= 20000000)
            echo 'La ' . $key . ' à '. $population.  ' habitants. <br />';
        if ($key == 'France' || $key == 'Suede' || $key == 'Malte' || $key == 'Allemagne')
            $nbtotalue =  $nbtotalue + $population;
    }
    echo 'la population totale des pays de l\'ue est de : '. $nbtotalue. ' habitants';
}

function capitales()
{
    $capitales = [
        'France' => 'Paris',
        'Espagne' => 'Madrid',
        'Italie' => 'Rome',
    ];

    foreach ($capitales as $key => $capitale) {
        echo 'La capitale de ' . $key . ' est ' . $capitale. '<br />';
    }
}

function time10day()
{
    $tenday = strtotime('15 july 2022');
    $christmas = date_create_from_format('Y-m-d', '2022-12-25');
    $now = date_create_from_format('Y-m-d', '2022-07-05');
    $diff = (array)date_diff($christmas, $now);
    echo 'Dans 10 jours nous seront le ' . date('d/m/Y', $tenday) . ' <br />';

    echo 'Noel est dans ' . $diff['days'] . '  jours';
}

function showdate()
{
    echo 'Aujourd\'hui nous sommes le ' . date('l jS \of F Y') . ' il est ' . date('h:i') . ' et ' . date('s') . ' secondes';
}
?>

<body>
    <h2 class="text-center">Date</h2>

    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
        showdate();
        ?>
    </div>
    <h2 class="text-center">Date2</h2>

    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
        time10day();
        ?>
    </div>

    <h2 class="text-center">Capitales</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
        capitales();
        ?>
    </div>
    <h2 class="text-center">Population</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
        population();
        ?>
    </div>
    <h2 class="text-center">Carré d'un nombre</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
        echo square(10);
        ?>
    </div>
    <h2 class="text-center">Aire d'un Rectangle</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
        echo aire(10, 20);
        ?>
    </div>
    <h2 class="text-center">Aire d'un cercle</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
        echo round(aire_circle(10, 20));
        ?>
    </div>
    <h2 class="text-center">TTC</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
        echo ttc(10, 20, true);
        ?>
    </div>
</body>