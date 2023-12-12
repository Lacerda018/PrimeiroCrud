<?php

    function teste($callback){

        //processo lento

        $callback();
    }

    teste(function (){
        echo "Terminou!";
    });