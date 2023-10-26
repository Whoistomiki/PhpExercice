<?php
/*
$prenom = 'Marc';
$nom = 'Doe';
$note =10;
$note2 = 20;
$moyenne = ($note+$note2) / 2;

echo 'Bonjour '.$prenom.' '.$nom.', vous avez eu '.(($note+$note2) / 2).' de moyenne';
echo "\nBonjour $prenom $nom, vous avez eu $moyenne de moyenne";

$notes = [10, 20];
echo $note = $notes[1];

$eleve = [
    'prenom' => 'Marc',
    'nom' => 'Doe',
    'notes' => [10, 20, 15]
];
$eleve ['prenom'] = 'Thomas';
$eleve ['notes'][3] = 18;
$eleve ['notes'][] = 20; // Ajoute une valeur à la fin du tableau si besoin d'en faire plusieurs on peut en mettre pleins à la suie
echo $eleve['prenom'] . ' ' . $eleve['nom'];
print_r($eleve['notes']); // Affiche le tableau avec les valeurs print_r est une formulation de echo pour les tableaux

$classe = [

        [
            'prenom' => 'Marc',
            'nom' => 'Doe',
            'notes' => [10, 20, 15]
        ],
        [
            'prenom' => 'Jean',
            'nom' => 'Doe',
            'notes' => [10, 10, 12]
        ],
        [
            'prenom' => 'Eric',
            'nom' => 'Doe',
            'notes' => [10, 18, 14]
        ]
];
echo $classe[1]['notes'][2]; // Tableau dans un tableau

// 1ère solution 

$note = readline('Entrez votre note : '); // Screen intéractif avec l'utilisateur 
if ($note >= 10) {
    if ($note == 10) { // Égalite double égale sinon source de bug par défaut avec un seule égale qui veut dire un assignement
    echo 'Vous avez juste la moyenne';
    }
    echo 'Bravo vous avez la moyenne';
}
else {
    echo 'Dommage vous n\'avez pas la moyenne';
}

// 2ème solution

$note = readline('Entrez votre note : '); 
if ($note > 10) {
    echo 'Bravo vous avez la moyenne';
}
elseif ($note == 10) { // Notion de else if qui serait plus adapté à ce qu'on aimerait à savoir de l'utilisateur les doubles égales sont pas top
    echo 'Vous avez juste la moyenne';
}
else {
    echo 'Dommage vous n\'avez pas la moyenne';
}

// 3ème solution

$note = (int)readline('Entrez votre note : '); // Int ici nous permet de forcer la valeur à être un entier et éviter tout problèmes
if ($note > 10) {
    echo 'Bravo vous avez la moyenne';
}
elseif ($note === 10) { 
    echo 'Vous avez juste la moyenne'; // === permet de vérifier que la valeur est bien un entier
}
else {
    echo 'Dommage vous n\'avez pas la moyenne';
}
*/

// 1ère solution mais on se répète beaucoup
/* $action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)');
if ($action === 1) {
    echo 'J\'attaque';
}
elseif ($action === 2) {
    echo 'Je défends';
}
elseif ($action === 3) {
    echo 'Je passe mon tour';
}
else {
    echo 'Commande inconnue';
} 
*/

// 2ème solution mais beaucoup plus pratique et facile à lire avec le switch case
/* $action = (int)readline('Entrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)');
switch ($action) {
    case 1:
        echo 'J\'attaque';
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3:
        echo 'Je passe mon tour';
        break;
    default:
        echo 'Commande inconnue';
        break;
} */

// $heure = (int)readline('Entrez une heure :');
// 1ère solution avec le if
/* if ($heure >= 8 && $heure <= 12 || $heure >= 14 && $heure <= 18) { // Opérateur logique && et ||
    echo 'Le magasin est ouvert';
}
else {
    echo 'Le magasin est fermé';
} */

// 2ème solution
/* if ((8 > $heure || $heure > 12) && (14 > $heure || $heure > 18)) { // Opérateur logique && et ||
    echo 'Le magasin est fermé';
}
else {
    echo 'Le magasin est ouvert';
} */

// Opérateur ET && / OU ||

// VRAI && VRAI = VRAI
// VRAI && FAUX = FAUX
// FAUX && FAUX = FAUX

// VRAI || VRAI = VRAI
// VRAI || FAUX = VRAI
// FAUX || FAUX = FAUX

// Double égale (==) vérifie une égalité avec une valeur a peu près identique
// Triple égale (===) vérifie une égalité et le type de la variable et même valeurs

// Boucle While
// $chiffre = null;
/* while ($chiffre !== 10) { // Tant que le chiffre est différent de 10 on continue la boucle !== veut dire différent != veut dire différent mais pas le même type !=== veut dire différent et même type
    $chiffre = (int)readline('Entrez un chiffre entre 1 et 10: ');
}
*/

// Boucle For
/* for ($i = 0; $i < 10; $i++) { // On initialise la variable $i à 0, on dit que tant que $i est inférieur à 10 on continue la boucle et on incrémente $i de 1 à chaque tour de boucle
                                  // $i++ veut dire $i = $i + 1 / si on veut incrémenter de +2 en 2 il faut faire $i = $i + 2 ou $i += 2
    echo "- $i \n";
}
*/


// Boucle ForEach simple et pratique
/* $notes = [10,15,16,20];

foreach($notes as $note) { // Pour chaque note dans le tableau notes on affiche la note
    echo "- $note \n";
} 
*/

// Boucle ForEach dans un autre tableau du tableau
// $eleves = [
//     'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
//     'cm1' => ['Emilie', 'Julie', 'Jeanne']
// ];

// foreach ($eleves as $classe => $listEleves) { // Pour chaque classe dans le tableau eleves on affiche la classe et les élèves
//     echo "La classe $classe : \n";
//     foreach ($listEleves as $eleve) { // Ici on affiche les élèves dans une autre boucle foreach car on a un tableau dans un tableau
//         echo "- $eleve \n";
//     }
// }


// 1ère solution
// $notes = [];
// $action = null;

// while ($action !== 'fin') {
//     $action = readline('Entrez une note ou tapez fin pour terminer la saisie: ');
//     if ($action !== 'fin') {
//         $notes[] = (int)$action;
//     }
// }

// 2ème solution avec un true

// $notes = [];
// while (true) {
//     $action = readline('Entrez un chiffre ou tapez fin pour terminer la saisie: ');
//     if ($action === 'fin') {
//         break; // Permet de sortir de la boucle
//     }
//     else {
//     $notes[] = (int)$action;
// }
// }

// foreach ($notes as $note) {
    //     echo "- $note \n"; // Permet d'afficher la liste des notes qu'on a taper dans le tableau
// }    


// Système de créneaux horaires en boucle un peu plus complexes avec différents cas de figure
// $creneaux = [];

// while(true) {
//     $debut = (int)readline('Heure d\'ouverture: ');
//     $fin = (int)readline('Heure de fermeture: ');
//     if ($debut >= $fin) {
//         echo 'Le créneau ne peut pas être enregistré car l\'heure d\'ouverture ($debut) est supérieur à l\'heure de fermeture ($fin)';
//     }
//     else {
//         $creneaux[] = [$debut, $fin];
//         $action = readline('Voulez-vous entrer un nouveau créneau (n) ?');
//         if ($action === 'n') {
//             break;
//         }
//     }
// }

// echo 'Le magasin est ouvert de ';
// foreach ($creneaux as $k => $creneau) { // K est la clé du tableau diminutif de key
//     if ($k > 0) { 
//         echo 'et de ';
//     }
//     echo "{$creneau[0]}h à {$creneau[1]}h "; // {} permet d'interpoler correctement une variable dans une chaine de caractère
// }

// $heure = (int)readline('A quelle heure voulez-vous visiter le magasin ? ');
// $creneauTrouve = false;
// foreach ($creneaux as $creneau) {
//     if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
//         $creneauTrouve = true;
//         break;
//     }
// }
// if ($creneauTrouve) {
//     echo 'Le magasin sera ouvert';
// }
// else {
//     echo 'Désolé le magasin sera fermé';
// }

// $notes = [10, 20, 13];
// // var_dump($sum); // var_dump permet d'afficher le résultat de la variable
// $sum = array_sum($notes); // array_sum permet de faire la somme des valeurs d'un tableau
// $count = count($notes); // count permet de compter le nombre de valeurs dans un tableau

// echo "Vous avez " . round($sum / $count, 2) . " de moyenne "; // On affiche la moyenne des notes

// $notes = [10, 20, 13];
// array_push($notes, 15); // Ajoute une valeur à la fin du tableau
// // $notes [] = 15; // Ajoute une valeur à la fin du tableau avec une autre méthode

// print_r($notes); // print_r permet d'afficher le tableau avec les valeurs
// var_dump($notes); // var_dump permet d'afficher encore plus de précision que print_r

// $notes = [10, 20, 13];
// // $notes2 = $notes; // On fait une copie du tableau notes dans le tableau notes2
// $notes2 = &$notes ; // On fait une référence à la variable notes pour que les deux variables soient liées
// $notes2[] = 15; // On ajoute une valeur au tableau notes2 lorsqu'il y a pas le & les deux tableaux ne sont pas liés mais avec le & ils sont liés et le dernier chiffre ajouté sera dans les deux tableaux
// var_dump($notes, $notes2); // On affiche les tableaux notes et notes2

// while(true) {
// $mot = readline('Veuillez entrer un mot : ');
// if ($mot === '') {
//     exit('fin du programme '); // Permet de sortir du programme exit ou die sont similaires
// }
//     $reverse = strtolower(strrev($mot)); // strrev permet d'inverser une chaine de caractère
//     if (strtolower($mot) === $reverse) { // strtolower permet de mettre en minuscule le mot
//     echo 'Le mot est un palindrome ';
// }
// else {
//     echo 'Le mot n\'est pas un palindrome ';
// }
// }

$insultes = ['merde','con'];    
$asterisque = [];
foreach ($insultes as $insulte) {
    $asterisque[] = substr($insulte, 0, 1) . str_repeat('*', strlen($insulte) - 1); // ici on récupère la première lettre du mot et on la concatène avec des astérisques
}
// foreach ($insultes as $insulte) { // Pour chaque insulte dans le tableau insultes on remplace les insultes par des astérisques
//     $asterisque[] = str_repeat('*', strlen($insulte)); // str_repeat permet de répéter une chaine de caractère et strlen permet de compter le nombre de caractère dans une chaine de caractère
// }
$phrase = readline('Entrez une phrase : ');
$phrase = str_replace($insultes, $asterisque, $phrase);

echo $phrase . "\n";