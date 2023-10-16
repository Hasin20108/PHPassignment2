<?php

    include 'book.php';
    include 'customer.php';

    if(isset($_GET['save_info'])){
        $book = new Book ($_GET['isbn'],$_GET['title'],$_GET['author'],$_GET['available']);

        echo $book;
        
    }


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hw child">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
        <div class="container vertical-center">
            <h1 class="center color">Book Class</h1>
            <hr>
            <label for="psw"><b>ISBN</b></label>
            <input type="text" placeholder="Enter ISBN Number" name="isbn" id="psw" required>
            <label for="email"><b>Title</b></label>
            <input type="text" placeholder="Enter Title" name="title" id="email" required>
            <label for="psw"><b>Author</b></label>
            <input type="text" placeholder="Enter Author Name" name="author" id="psw" required>
            <label for="psw"><b>Available</b></label>
            <input type="text" placeholder="Enter Available Number" name="available" id="psw" required>
            <hr>

            <button type="submit" class="registerbtn center" name="save_info">Create Book</button>
        </div>
        </form>
        <a href="SeeBook.php">
            <button type="submit" class="registerbtn center" name="save_info">See Book</button>
         </a>
    </div>
    <div class="hw"></div>
    <div class="hw"></div>
 

</body>
</html>
