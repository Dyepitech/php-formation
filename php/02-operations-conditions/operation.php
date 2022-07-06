<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <h2 class="text-center">Major en php</h2>

    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center">
        <?php
            $var1 = 15;
            $var2 = 5;
            $var3 = 8;
            $r1 = $var1 + $var2 + $var3;
            $r2 = $var1 * ($var2 - $var3);
            $r3 = ($var3-$var2) / $var1;

            echo '<p class="text-red-400">' .$var1. ' + ' .$var2. ' + ' .$var3. ' = '. $r1 .'</p>';
            echo '<p class="text-red-400">' .$var1. ' x '. '('. $var2. ' - ' .$var3. ') = ' . $r2. '</p>';
            echo '<p class="text-red-400">'. '(' .$var3. '-' .$var2. ') '. '/ ' .$var1. ' = '. $r3 . '</p>';

            if ($r1 < 20 || $r2 < 20 || $r3 < 20)
                echo '<p class="text-red-400">Une des opérations renvoie moins de 20</p>';
        ?>
    </div>
    </div>
</body>

</html>