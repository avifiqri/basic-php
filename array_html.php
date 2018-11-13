<?php $students = [["yusuf", 15041998, "pekalongan", ],
                ["roby", 15061995, "bekasi"]
];  ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        </head>
        <body>
            <?php foreach($students as $student) :?>
            <ul>
                <li>nama: <?= $student[0]; ?></li>
                <li>kelahiran : <?= $student[1]; ?></li>
                <li>kota : <?= $student[2]; ?></li>
            </ul> 
            <?php endforeach ?>

            
        </body>

</html>