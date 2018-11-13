<?php
$a = ["senin", "selassa", "rabu", "kamis", "jum'at"];

 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
            .kotak {
                background-color: green;
                text-align: center;
                line-height: 50px;
                float: left;
                margin: 3px;
                height: 50px;
                weight: 50px;
            }
            .clear {clear:both}
            </style>
        </head>
        <body>
         

           <?php for($i = 0; $i < count($a); $i++) { ?>
            <div class="kotak" > <?php echo $a[$i]; ?> </div>
            <?php } ?>

            <div class= "clear">
            <?php foreach($a as $u) { ?>
                <div class= "kotak"> <?php echo $u; ?> </div>
                <?php }?> 
           </div>

            <div class= "clear">
            <?php foreach($a as $u) : ?>
                <div class= "kotak"> <?= $u; ?> </div>
                <?php endforeach?> 
           </div>

        </body>

</html>