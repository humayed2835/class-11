<?php

    // parent class
    class Cars{
        public $color = "red";
        function forwards(){
            echo "Going forwards<br>";
        }
        function backwards(){
            echo "going backwards<br>";
        }
    }

    // child Class
    class tesla extends Cars{
        function flying(){
            return "going to flying<br>";
        }
        function backwards()
        {
            return "teslta going backwards<br>";
        }
    }

    $toyata = new tesla;
    echo $toyata->flying();
    echo $toyata->forwards();
    echo $toyata->backwards();



?>