<?php



$questions = [
    "Quelle est le type de pokémon dans la première arène de kanto ?\n1.Roche\n2.Eau\n3.Electrique\n",
    "Quel est le nom du personnage principal de Naruto ?\n1.Boruto\n2.Naruto\n3.Sasuke\n",
    "Quel genre de jeu est Call of duty ?\n1.Sportif\n2.Course\n3.Guerre\n",
    "Quel est l'objet préféré du personnage principal de One piece (Luffy) ?\n1.Un chapeau\n2.Un short\n3.Des claquettes\n",
    "Qui est Dark Vador pour Luke Skywalker dans Star Wars ?\n1.Sa soeur\n2.Sa mère\n3.Son père\n"
];


$reponses = [1, 2, 3, 1, 3];
$score = 0;

echo    "###################################################\n";
echo    "######## Qui veux gagner des puntos ?! ##########\n";
echo    "###################################################\n";

echo "\n";

echo    "###################################################\n";
echo "                   score : $score\n";
echo    "###################################################\n\n";

echo "Voici les règles du quizz : vous avez cinq questions avec trois réponses possibles. Sélectionnez votre réponse en indiquant un chiffre : chaque bonne réponse vaut 10 points. Essayez de marquer le maximum de points et amusez-vous !\n\n";

$NB_QUESTIONS = count($questions);

for($i = 0; $i < $NB_QUESTIONS; $i++){
    echo "Question : ".$questions[$i]."\n";
    
    var_dump($i); // index des questions et reponses
     $reponse = trim(fgets(STDIN));
    echo "La bonne réponse : ".$reponses[$i]."\n";
    if($reponse == $reponses[$i]){
        echo "Bien joué !\n\n";
        $score = $score + 10;
        echo "le score augmente de 10 puntos\n";
        echo    "###################################################\n";
        echo "                   score : $score\n";
        echo    "###################################################\n\n";
    }
    else{
        echo "Mauvaise réponse !\n";
        echo "score : $score\n";
        echo    "###################################################\n";
        echo "                   score : $score\n";
        echo    "###################################################\n\n";
    }  
} 
// echo $score." puntos\n";

echo "########### Partie Terminé ###########\n";
echo ($score / $NB_QUESTIONS * 10) ." % de bonne réponse\n\n";

echo "Bien joué, tu as ruiné la banque, prends tes puntos!\n";