<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require "tpl/menu.php"; ?>
    <h1>Accueil</h1>
    <?php 
    //$prenom = $_GET['prenom'];
    ?>
    <h2>Bonjour <?php //echo $prenom; ?></h2>

    <form action="index.php" method="GET">

        <input type="text" class="text" name="prenom">
        <input type="password" name="pass" id="">
        <input type="submit" value="Envoyer">
    </form>

    <?php 
        // Coucou 
        /* 

        Coucou encore

        */
        $unite = [
            "Culture digitale 1",
            "MÉTIER ANIMATION 3D",
            "MÉTIER COMMUNICATION DIGITALE & E-BUSINESS 1",
            "MÉTIER CRÉATION & DESIGN 1",
            "MÉTIER DÉVELOPPEMENT WEB 1",
            "MÉTIER JEUX VIDÉO 1"
        ];
        echo '<pre>';
        var_dump($unite);
        echo '</pre>';

        foreach($unite as $ue) {
            echo "$ue <br>";
        }


        echo $unite[0];
        echo $unite[1];
        echo $unite[2];
        echo $unite[3];
        echo $unite[4];
        echo $unite[5];
    ?>
</body>
</html>