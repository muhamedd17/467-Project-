<html>
    <head>
        <title>My Cart</title>

        <meta charset="UTF-8">
    <head>
    
    <body>
            <center>
            <body style="background-color:Tomato;">
            </center>
        <h1>My Cart</h1>
        <h2>Cart Summary</h2>
        <p><a href="http://students.cs.niu.edu/~z1905512/catalog.php">Forgot Something? Return to Home</a></p>

        <?php
            require('dbConn.php');
            session_start();
            session_unset();
            $sql = 'SELECT * FROM parts;';
            $stm = $pdo2->prepare($sql);
            $stm->execute();
            $res = $stm->fetchAll(PDO::FETCH_ASSOC);
            $productPrice = 0;
            $totalWeight = 0;
            foreach ($res as $row) {
        
                if (isset($_POST[$row["number"]]) && $_POST[$row["number"]] > 0) {
                    $_SESSION["part".$row["number"]] = $_POST[$row["number"]]; #keep track of order
        
                    $productPrice += $_POST[$row["number"]] * $row['price'];
                    $totalWeight += $_POST[$row["number"]] * $row['weight'];
                }
            }

            $shipPrice = 0;

            $sql = "SELECT * FROM Ship;";
            $shipStm = $pdo1->prepare($sql);

            $shipStm->execute();

            $res = $shipStm->fetchAll( PDO::FETCH_ASSOC );
            
            $shipPrice = 0;
            foreach($res as $row){
        
                if($row['bracket'] <= $totalWeight){
                    $shipPrice = $row['price'];
                }
            
            }
            $totalPrice = $productPrice + $shipPrice;
            echo '<p>Items: '.$productPrice.' Shipping & handling: '.$shipPrice.'</p>
                  <p><b>Order Total: '.$totalPrice.' </b></p>';
        

        ?>

        <form action="orderConfirm.php" method="GET">
            First Name: <input type="text" name="fname"><br>
            Last Name: <input type="text" name="lname"><br>
            Home Address: <input type="text" name="address"><br>
            Email Address: <input type="text" name="email"><br>
            16 Digit Credit Card Number: <input type="text" name="card"><br>
            Credit Card Expiration Date: <input type="month" name="exp"><br>
        </form>    

    </body>
</html>
