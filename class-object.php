
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        </head>
        <body>
 <?php
    class Book {
        var $title;
        var $name;
        var $price;
    }

        $book1 = new Book;

        $book1->title = "gerimis mengundang </br>";
        $book1->name = "rita sugiharto </br>";
        $book1->price = "50000 </br>"; 
        

        $book2 = new Book;
        $book2->title = "jangan menyerah </br>";
        $book2->name = "Dmasiv </br>";
        $book2->price= 40000;

        echo $book1->name;
        echo $book1->title;
        echo $book1->price;

        echo $book2->title;
        echo $book2->name;
        echo $book2->price;

?>
            
        </body>

</html>