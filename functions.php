<?php
    function name()
    {
        
    }

    function redirectTo($location){
        header("Location: " .$location);
        exit;
    }
?>