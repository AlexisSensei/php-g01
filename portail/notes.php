<?php require "layout/head.php"; ?>
<?php require "layout/menu.php"; ?>

<?php

$unite = [
    "Culture digitale 1",
    "MÉTIER ANIMATION 3D",
    "MÉTIER COMMUNICATION DIGITALE & E-BUSINESS 1",
    "MÉTIER CRÉATION & DESIGN 1",
    "MÉTIER DÉVELOPPEMENT WEB 1",
    "MÉTIER JEUX VIDÉO 1"
];

$matieres = [
    "HTML / CSS",
    "Algo", 
    "Javascript"
];

$supertableaudenotes = [
    "Algo" => [
        "Commentaire" => "Très bon travail, code optimisé, bien joué !",
        "Note" => "14.8",
        "Moyenne" => "15.06"
    ],
    "HTML" => [
        "Commentaire" => "Le commentaire d'HTML",
        "Note" => "13.8",
        "Moyenne" => "5.06"
    ],
    "JS" => [
        "Commentaire" => "le commentaire de JS",
        "Note" => "17.4",
        "Moyenne" => "12.26"
    ],
];
foreach($supertableaudenotes as $matiere => $tableau) {
    echo '<pre>';
    var_dump($tableau);
    echo '</pre>';

    echo "<h1>$matiere</h1>";
    echo "<p>Note : $tableau[Note] </p>";
    echo "<p>Moyenne : $tableau[Moyenne] </p>";
    echo "<p> $tableau[Commentaire] </p>";
}
//echo $supertableaudenotes['Algo']['Commentaire'];

?>

<?php
// SYNTAXE N°1 : PHP FRIENDLY
echo "<h1>$unite[4]</h1>";
echo "<ul class='liste-matiere'>";
foreach($matieres as $matiere) {
    echo "<li>$matiere</li>";
}
echo "</ul>";

?>





<?php 

$var = $tweets->fetchAll();
/*

$var = [
    [0] => [
        'tweet' => 'Blablabla',
        'user'  => 'Alexis',
        'date'  => 22/03/2022
    ],
    [1] => [
        'tweet' => 'Blublublu',
        'user'  => 'Nico',
        'date'  => 21/03/2022
    ],
]

*/
?>





<!-- Syntaxe n°2 : HTML FRIENDLY -->
<h1><?= $unite[4] ?></h1>
<ul class="liste-matiere">
    <?php foreach($matieres as $matiere) { ?>
        <li>
            <?= $matiere ?>
        </li>
    <?php } ?>
</ul>


<?php require "layout/foot.php"; ?>

