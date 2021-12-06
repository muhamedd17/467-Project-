<!-- Muhamed Delic -->
<!-- z1905512 -->
<!-- CSCI 467 -->
<!-- Project Part 3 -->
<html>
    <head>
        <title>My Cart</title>

    <head>
    
    <body>
            <center>
            <body style="background-color:Tomato;">
            </center>
        <h1>My Cart</h1>
        <h2>Cart Summary</h2>
        <p><a href="http://students.cs.niu.edu/~z1905512/catalog.php">Forgot Something? Return to Home</a></p>

        <?php
     ?>

        <form action="orderConfirm.php" method="GET">
            First Name: <input type="text" name="fname"><br>
            Last Name: <input type="text" name="lname"><br>
            Home Address: <input type="text" name="address"><br>
            Email Address: <input type="text" name="email"><br>
            16 Digit Credit Card Number: <input type="text" name="card"><br>
            Credit Card Expiration Date: <input type="month" name="exp"><br>
            <input type="submit" name="completeOrder" value="Submit Order">
        </form>    

    </body>
</html>
