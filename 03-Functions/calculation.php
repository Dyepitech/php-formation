<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<?php
    if (isset($_POST['nb1']) AND isset($_POST['nb2']) AND isset($_POST['operator'])){
        $resultat;
        $nb1 = htmlspecialchars($_POST['nb1']);
        $nb2 = htmlspecialchars($_POST['nb2']);
        $operator = htmlspecialchars($_POST['operator']);
        
        if ($operator == 'add')
            $resultat = $nb1 + $nb2;
        if ($operator == 'sous')
            $resultat = $nb1 - $nb2;
        if ($operator == 'multiply')
            $resultat = $nb1 * $nb2;
        if ($operator == 'divide')
            $resultat = $nb1 / $nb2;
    }
    
    if (isset($_POST['nb3'])){
        $resultat2;
        $nb3 = htmlspecialchars($_POST['nb3']);
        $operator = htmlspecialchars($_POST['currency']);

        if ($operator == 'euros')
            $resultat2 =  $nb3 / 18856; 
        if ($operator == 'bitcoin')
            $resultat2 =  18856 * $nb3; 
    }

?>

<body>
    <h2 class="text-center">Calculator</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <form action="" method="post">
            <label for="fname">Nombre 1</label>
            <input type="text" id="nb1" name="nb1" placeholder="NB1">
            <br />
            <label for="lname">Nombre 2</label>
            <input type="text" id="nb2" name="nb2" placeholder="NB2">
            <select id="operator" name="operator">
                <option value="multiply">*</option>
                <option value="divide">/</option>
                <option value="add">+</option>
                <option value="sous">-</option>
            </select>

            <p><input type="submit" value="Calculer" action="calculation.php"></p>
        </form>
        <?php 
            if (isset($resultat))
                echo '<p> Le resultats est de : ' . $resultat;
        ?>
    </div>
    <h2 class="text-center">Converter</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <form action="" method="post">
            <label for="fname">Nombre 1</label>
            <input type="text" id="nb3" name="nb3" placeholder="NB3">
            <br />
            <select id="currency" name="currency">
                <option value="euros">Euro en bitcoin</option>
                <option value="bitcoin">Bitcoin en euro</option>
            </select>

            <p><input type="submit" value="Calculer" action="calculation.php"></p>
        </form>
        <?php 
            if (isset($resultat2))
                echo '<p> Le resultats est de : ' . $resultat2; 
        ?>
    </div>
</body>