<html>

    <?php 
        include_once 'Book.php';
        include_once 'Customer.php';

        $Customer1 = new Customer(1, "Bakhtiar", "Hasin","bakhtiarhasin2000@gmail.com");
        $Customer2 = new Customer(2, "Farhan", "Yusuf", "farhan1345@gmail.com");
        
        $book1 = new Book(5007, "Paradoxical Sajid", "Arif Azad", 10);
        $book2 = new Book(5007, "Rahe Belayat", "Dr. Khondokar Abdullah Jahangir", 10);
        
        
    ?>
    <h3>Customer List</h3>
    <?php
        echo $Customer1;echo '<br>';
        echo $Customer2;echo '<br>';
    ?>

    <h3>Book List</h3><br>
    <?php
        echo $book1->sethgfTitle("ahdhhadh");
        echo $book1;echo '<br>';
        echo $book1->getCopy();echo '<br>';
        echo $book2;echo '<br>';
    ?>

</html>

