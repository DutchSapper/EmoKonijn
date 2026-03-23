<?php
    //*  EmoKonijn.php heeft toegang tot de functies van: Konijnen.php
    include_once "Emokonijn.php";
    include_once "Konijnen.php";

    //om de score bij te houden heeft elke emotie een bestand nodig.
$emotiesOmgekeerd = array_flip($emoties);

// Check of score-map bestaat
if (!is_dir("score")) mkdir("score");

for ($s = 0; $s < 15; $s++){
    if ($rij1[$s]->emotie == $rij2[$s]->emotie) {

        $naamEmotie = $emotiesOmgekeerd[$rij1[$s]->emotie];
        $bestand = "score/" . $naamEmotie . ".txt";

        // maak het bestand aan als het nog niet bestaat
        if (!file_exists($bestand)) file_put_contents($bestand, "0");

        // lees huidige score
        $scoreHuidig = (int) file_get_contents($bestand);

        // verhoog score
        $scoreHuidig++;

        // schrijf terug naar bestand
        file_put_contents($bestand, $scoreHuidig);

        // je kunt deze score nu ook opslaan in een array om later te tonen
        $scores[$s] = $scoreHuidig;
    } else {
        $scores[$s] = null; // geen score
    }
}
    /*Score wordt aangemaakt en en de emotie van de eerste rij konijnen wordt vergeleken met de tweede rij konijnen.
        score wordt geupdate zodra bovenste en onderste emotie overeen komen.
    */      

?>