<?php
    class Konijn {
        public $oren;
        public $emotie;
        public $voeten;


        public function __construct(&$emoties){
            $this->oren = $this->genereerOren();
            $this->voeten = $this->genereerVoeten();
            $this->emotie = $this->genereerEmotie($emoties);
        }
        
        
        //genereerOren is de functie die de oren van het konijn genereerd.
        function genereerOren(){
            return "()_()";
        }
            
            //genereerVoeten is de functie die de voeten van het konijn genereerd.
        function genereerVoeten(){
            return '("")("")';
        }
        
        /* De functie genereerEmotie genereerd de random emotie voor de konijnen,doormiddel van een associated array.
        Uit deze array word een random key gepakt,die key wordt gebruikt om de emotie in ASCII te koppelen.*/
        function genereerEmotie(&$emoties){
            
            $emoKey = (array_rand($emoties,1));
            $randEmo = $emoties[$emoKey];
            
            unset($emoties[$emoKey]);
            return $randEmo;
        
        }
    }

/** $emotiesMaster zorgt voor de juiste aantal emoties voor het genereren van 2x rij van 15 konijnen.
 *  $emotiesMaster is de master array die niet aangepast moet worden om de juiste score te bepalen, $emoties mag gebruikt worden om aan te passen.
 */
$emotiesMaster = [
    "blij" => "(^_^)",
    "verwonderd" => "(O.O)",
    "boos" => "(@_@)",
    "teleurgesteld" => "(>_<)",
    "verdrietig" => "(T_T)",
    "slaperig" => "(-_-)",
    "verliefd" => "(♥‿♥)",
    "in de war" => "(?_?)",
    "nadenkend" => "(¬_¬)",
    "geschrokken" => "(O_O!)",
    "trots" => "(^‿^)",
    "verveeld" => "(~_~)",
    "ondeugend" => "(^.-)",
    "bang" => "(;_;)",
    "cool" => "(⌐■.■)"
];

$emoties = $emotiesMaster;

//Eerste loop om de eerste rij aan konijnen te maken. 
$rij1 = []; for ($i = 0; $i < 15; $i++) { 
    $konijn = new Konijn($emoties); 
    $rij1[] = $konijn; } 
    
//De array van Emoties wordt gereset voor de volgende loop. 
$emoties = $emotiesMaster; 

//tweede loop om de tweede rij aan konijnen te maken. 
$rij2 = []; for ($i = 0; $i < 15; $i++) {
    $konijn = new Konijn($emoties); 
    $rij2[] = $konijn; }

?>


