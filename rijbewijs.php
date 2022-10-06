
<?php

    echo "Hoe oud ben je?" . PHP_EOL;
    $leeftijd = readline() . PHP_EOL;
    if( $leeftijd >= 16.5 ){
       echo "Je mag beginnen met rijlessen.";

    } else {

        echo "helaas, je mag nog niet beginnen met rijlessen.";
    }



?>