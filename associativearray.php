

            <form   action= "associativearray.php" method = "post">
               name <input type = "text" name = "nama"></br>
                <input type = "submit">
            </form ></br>
<?php
        $collage = array("yusuf" => "B+" , "farid" => "A", "pawit" => "B-");
        $return = $collage[$_POST["nama"]];

        echo "predikat : $return"
        

?>