<?php
    //*  EmoKonijn.php heeft toegang tot de functies van: Konijnen.php
    include_once "Konijnen.php";

    //om de score bij te houden heeft elke emotie een bestand nodig.
    $emotiesOmgekeerd = array_flip($emotiesMaster);

    // Check of score-map bestaat
    if (!is_dir("score")) mkdir("score");

    /*Score wordt aangemaakt en en de emotie van de eerste rij konijnen wordt vergeleken met de tweede rij konijnen.
        score wordt geupdate zodra bovenste en onderste emotie overeen komen.
    */    
    $scores = [];

    for ($s = 0; $s < 15; $s++) {

        //Er wordt gekeken welke emoties er aanwezig zijn.
        $naamEmotie = array_search($rij1[$s]->emotie, $emotiesMaster);
        $bestand = "score/" . $naamEmotie . ".txt";

        //Als het bestand nog niet bestaat wordt het bestand aangemaakt met de naam van de emotie met een score van 0.
        if (!file_exists($bestand)) file_put_contents($bestand, "0");

        //De huidige score wordt gelezen.
        $scoreHuidig = (int) file_get_contents($bestand);

        //Er wordt gecontroleerd of de emoties het zelfde zijn en schrijven dit naar het bestand.
        if ($rij1[$s]->emotie == $rij2[$s]->emotie) {
            $scoreHuidig++;
            file_put_contents($bestand, $scoreHuidig);
        }

        //De score wordt opgeslagen zodat er altijd een weergaven van de score is.
        $scores[$s] = $scoreHuidig;
    }

?>