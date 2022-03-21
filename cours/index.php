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
    $prenom = $_GET['prenom'];
    ?>
    <h2>Bonjour <?php echo $prenom; ?></h2>

    <form action="index.php" method="GET">

        <input type="text" class="text" name="prenom">
        <input type="password" name="pass" id="">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>