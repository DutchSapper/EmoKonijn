<!DOCTYPE html>
<html>
<head>
    <title>Emokonijn</title>
</head>
<body>

    <h1>PHP - Emokonijn</h1>

    <h2>Hoe vaak komen scores voor? </h2>
    <p>De score van het bovenste konijn wordt bijgehouden per konijn en appart in een folder "score"</p>
    <?php
        //*  EmoKonijn.php heeft toegang tot de functies van: Konijnen.php, score.php

        include_once "Konijnen.php";
        include_once "Score.php";


        /* De konijnen worder in een tabel weergegeven om alles netjes op een rij te krijgen.
        doormiddel van CSS worden de konijnen in het midden gezet.*/

        //Eerste rij 1 aan 15 konijnen.
        echo"<table>";
        echo "<tr>";
        foreach ($rij1 as $konijn) {
            echo "<td>" . $konijn->oren . "</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($rij1 as $konijn) {
            echo "<td>" . $konijn->emotie . "</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($rij1 as $konijn) {
            echo "<td>" . $konijn->voeten . "</td>";            
        }
        echo "</tr>";
        
        //een lege regel tussen de twee rijen.
        echo "<tr><td colspan='15'>&nbsp;</td></tr>";

        //tweede rij met 15 konijnen.
        echo "<tr>";
        foreach ($rij2 as $konijn) {
            echo "<td>" . $konijn->oren . "</td>";
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($rij2 as $konijn) {
            echo "<td>" . $konijn->emotie . "</td>";           
        }
        echo "</tr>";

        echo "<tr>";
        foreach ($rij2 as $index => $konijn) {
            echo "<td>";

            echo $konijn->voeten;

            // score hoort bij bovenste konijn
            $score = $scores[$index] ?? 0;

            echo "<br>Score: " . $score;

            echo "</td>";
        }

        echo "</tr>";
        echo"</table>";

    ?>

    <!-- De style zorgt ervoor dat de konijnen in het midden van hun cell binnen de tabel komen
     dit zorgt ook voor de gelijke tussen ruimte van de cellen. -->
    <style>
    table { 
        font-family: monospace; 
    }

    td, th {
        text-align: center;
        padding-right: 15px;
    }
    </style>


</body>
</html>