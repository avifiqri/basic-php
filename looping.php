<?php 

//for($i = 0; $i < 5; $i++) :
  //  echo "hay yusuf</br>";
//endfor;

//$o = 1;
//do{
 //   echo "yusuf ganteng</br>";
//$o++;        
// } while($o < 4);
?>


</br>
<?php 

//$i = 0;
//while($i < 3) :
    //echo "yusuf ganteng</br>";
  //  $i++;
//endwhile;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <style>
            .warna {
                background-color: yellow;
            }
            </style>
        </head>
        <body>

            <table border="1" cellpadding= "40" cellspacing = "4">
             <?php for($i = 0; $i < 5; $i++) :?>
            <?php if ($i % 2 ==0) : ?>
            <tr class= "warna">
            <?php else : ?>
            <tr>

            <?php endif; ?>             
                <?php for($j= 0; $j < 4; $j++) : ?>
                    <td><?php echo "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>

        <?php endfor; ?>

            </table>
        </body>

</html>