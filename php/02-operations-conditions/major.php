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
        $age = 16;

        if ($age >= 18)
            echo '<p class="text-green-500"> Vous pouvez entrer </p>';
        else if ($age > 16)
            echo '<p class="text-orange-400"> Vous êtes bientot majeur </p>';
        else if ($age > 14)
            echo '<p class="text-blue-400"> Vous êtes jeune </p>';
        else
            echo '<p class="text-red-400"> Vous êtes trop jeune</p>';
        ?>

        <?php
        $age = 7;

        if ($age > 17) { ?>
            <p>Vous pouvez entrer</p>
        <?php } elseif ($age >= 16 && $age < 18) { ?>
            <p>Interdit, Vous etes presque majeur</p>

        <?php } elseif ($age >= 14 && $age < 16) { ?>
            <p>Interdit, Vous etes jeune</p>
        <?php } else { ?>
            <p>Interdit, vous etes trop jeune</p>
        <?php }
        ?>

    </div>
    </div>
</body>

</html>