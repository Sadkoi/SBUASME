<?php
    $handle = fopen("restricted/eventsTable.txt", "r");

    $readInArray = array();
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $lineArray = explode("|",$line);
            array_push($readInArray,$lineArray);
        }

        fclose($handle);
    }
    
    function getEventTitle($eventNumber){
        global $readInArray;
        echo $readInArray[$eventNumber][0];
    }

    function getEventImage($eventNumber){
        global $readInArray;
        echo $readInArray[$eventNumber][1];
    }

    function getEventDay($eventNumber){
        global $readInArray;
        echo $readInArray[$eventNumber][2];
    }

    function getEventDate($eventNumber){
        global $readInArray;
        echo $readInArray[$eventNumber][3];
    }

    function getStartTime($eventNumber){
        global $readInArray;
        echo $readInArray[$eventNumber][4];
    }

    function getEndTime($eventNumber){
        global $readInArray;
        echo $readInArray[$eventNumber][5];
    }

    function getEventLocation($eventNumber){
        global $readInArray;
        echo $readInArray[$eventNumber][6];
    }

    function getEventDescription($eventNumber){
        global $readInArray;
        echo $readInArray[$eventNumber][7];
    }
?>