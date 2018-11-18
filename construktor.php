<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        </head>
        <body>
            
            <?php 
            /* create class and object */
            class Book {
                var $title;
                var $name;
                var $price;
                // create function consttuct //
                function __construct( $aTitle, $aName, $aPrice){
                    //you can create a pronoun on construct
                    $this->title  = $aTitle;
                    $this->name  = $aName;
                    $this->price  = $aPrice;
                  
               }
            }
            // you can create new Book to print an object
                $book1 = new Book("cinta dan rangga", "nggk tau", 100000);
       
                $book2 = new Book("cinta dalam hati", "kalo ini tau", 200000);
        // you can print with echo
                echo $book1->title;
            ?>

            
        </body>

</html>