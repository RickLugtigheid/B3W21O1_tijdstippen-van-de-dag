<?php
    //get the current time
    $timeHours = date("G")+1;//+1 because it otherwise doesn't display good on my client
    $dateTime = date($timeHours.":i");
    
    /*
    Ochtend is van 6u tot 12u
    Middag is van 12u tot 18u
    Avond is van 18u tot 24u en
    Nacht is van 24u tot 6u.
    */
    //check for time of the day to display
    if($timeHours >= 6 && $timeHours < 12){
        $timeOfDay = "morgen";
    }elseif($timeHours >= 12 && $timeHours < 18){
        $timeOfDay = "middag";
    }elseif($timeHours >= 18 && $timeHours < 24){
        $timeOfDay = "avond";
    }else{
        $timeOfDay = "nacht";
    }