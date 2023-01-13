<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
        'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque ea hic impedit maxime nobis placeat recusandae rerum suscipit totam? Consequuntur culpa cupiditate id impedit modi, odio quidem ratione sint!',
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
        'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque ea hic impedit maxime nobis placeat recusandae rerum suscipit totam? Consequuntur culpa cupiditate id impedit modi, odio quidem ratione sint!',
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
        'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque ea hic impedit maxime nobis placeat recusandae rerum suscipit totam? Consequuntur culpa cupiditate id impedit modi, odio quidem ratione sint!',
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
        'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque ea hic impedit maxime nobis placeat recusandae rerum suscipit totam? Consequuntur culpa cupiditate id impedit modi, odio quidem ratione sint!',
    ),
    array(
        'nom' => 'manger une assiette',
        'date' => 2002,
        'realisateur' => 'Consectetur delectus',
        'acteurs' => array(
            'eum fuga','incidunt itaque','maiores modi','optio perspiciatis','placeat veritatis',
        ),
        'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque ea hic impedit maxime nobis placeat recusandae rerum suscipit totam? Consequuntur culpa cupiditate id impedit modi, odio quidem ratione sint!',
    ),
    array(
        'nom' => 'ranger sa chambre',
        'date' => 2004,
        'realisateur' => 'Lorem ipsum',
        'acteurs' => array(
            'dolor sit','amet consectetur','adipisicing elit','Consectetur delectus','eum fuga',
        ),
        'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque ea hic impedit maxime nobis placeat recusandae rerum suscipit totam? Consequuntur culpa cupiditate id impedit modi, odio quidem ratione sint!',
    ),
    array(
        'nom' => 'une façon de parler',
        'date' => 2006,
        'realisateur' => 'incidunt itaque',
        'acteurs' => array(
            'maiores modi','optio perspiciatis','placeat veritatis','Beatae dignissimos','Cupiditate delectus',
        ),
        'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque ea hic impedit maxime nobis placeat recusandae rerum suscipit totam? Consequuntur culpa cupiditate id impedit modi, odio quidem ratione sint!',
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici

foreach ($videotheque as $film) {
    foreach ($film as $propriete => $valeur) {
        if (is_array($valeur)){
            echo "acteur : ";
            foreach ($valeur as $acteurs){
                echo $acteurs . " ";
            }
            echo "<br><br>";
        }else{
            echo $propriete . " : " . $valeur . "<br>";
        }
    }
}
echo "<br><br>";

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici


