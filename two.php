<?php

    // parent class
    class Cars{
        protected $color = "red";

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
        function car_name(){
            return $this->color;
        }
        function backwards()
        {
            return "teslta going backwards<br>";
        }
    }

    $tesla = new tesla;

   echo $tesla->car_name();

   



?>