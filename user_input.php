<?php

/*$fruits = array("apple","orange", "mango");
 echo $fruits["apple"];
echo $fruits[0];
*/?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        </head>
        <body>
            <form   action= "user.php" method = "get">
                <input type = "text" name = "num1"></br>
                <input type = "text" name = "num2"></br>
                <input type = "submit">
            </form ></br>
            <?php
                echo $_GET["num1"] + $_GET["num2"];
            ?></br>

            <form   action= "user.php" method = "get">
               name :  <input type = "text" name = "nama"></br>
               age :  <input type = "number" name = "age"></br>
               hobi :  <input type = "text" name = "hobi"></br>
               work :  <input type = "text" name = "work"></br>
                <input type = "submit">

            </form ></br>
            <?php
                $name =  $_GET["nama"];
                $age =  $_GET["age"];
                $hobi =  $_GET["hobi"];
                $work =  $_GET["work"];

                echo "your name is : $name </br>";
                echo "your age is : $age </br>";
                echo " your hobi is :  $hobi </br>";
                echo "your work in :  $work  </br>" ;
            ?>
        </body>

</html>