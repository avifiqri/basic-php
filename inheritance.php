<?php 
    class Sport {
        
        function ball(){
            echo "teks tentang bola </br>";
        }
        function badminton() {
            echo "teks tentang badminton</br>";
        }
        function basket(){
            echo "teks ini tentang basket</br>";
        }

    }
    class Dance extends Sport {
       function balet(){
           echo "teks ini berisi tentang balet";
       }
    }

    $sport1 = new Sport();
    echo $sport1->ball();

    $sport2 = new Dance();
    echo $sport2->balet();


?>