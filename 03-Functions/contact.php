<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<?php
    if (isset($_POST['email']) AND isset($_POST['sujet']) AND isset($_POST['message'])){
        $mail = htmlspecialchars($_POST['email']);
        $sujet = htmlspecialchars($_POST['sujet']);
        $message = htmlspecialchars($_POST['message']);
        $isok = false;
        if(false == filter_var($mail, FILTER_VALIDATE_EMAIL))
            exit('Cet email n\'est pas valide');
        else if (strlen($message) < 15)
            exit('Le message doit contenir au minimum 15 caractères');
        else if (!$sujet && (strcmp(strtolower($sujet), 'proposition de stage') !== 0) && (strcmp(strtolower($sujet), 'proposition d\'emploi') !== 0) && (strcmp(strtolower($sujet), 'demande de projet') !== 0)){
            var_dump($sujet);
            exit('Le sujet n\'est pas valide');
        }
        else
            $isok = true;

    }

?>

<body>
    <h2 class="text-center">Calculator</h2>
    <div class="bg-gray-200 max-w-lg mx-auto p-4 text-center flex justify-center">
        <form action="" method="post" style="width: 210px;">
            <label for="fname" class="mb-5">Email</label>
            <input class="mt-5 mb-5" type="email" id="email" name="email" placeholder="mail">
            <br />
            <label for="lname" class="mb-5">Sujet</label>
            <input class="mt-5 mb-5" type="text" id="sujet" name="sujet" placeholder="sujet">
            <br />
            <label for="lname"class="mt-5">Message</label>
            <input class="mt-5 mb-5" type="text" id="message" name="message" placeholder="message">

            <p><input class="mt-5" type="submit" value="Envoyer le message" action="contact.php"></p>

            <?php 
                if (isset($isok))
                    echo '<p> Votre message à bien été envoyé </p>';
            ?>
        </form>
    </div>
</body>