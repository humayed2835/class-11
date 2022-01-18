<?php

// Abstractation
       abstract class Cars{
        abstract function flying();
    }

    class tesla extends Cars{
        function flying()
        {
            echo "Going to flying";
        }
    }

    $tesla = new tesla;
    echo $tesla->flying();


?>