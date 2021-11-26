<!-- catalog.php -->
<html><head><title> NIU Auto Parts Catalog Page </title></head>
<h1 style="text-align:left;">
NIU Auto Parts
</h1>
<center>
    <body style="background-color:Tomato;">
    <h2>Products</h2>
</center>

<form action="orderSubmit.php" method="POST">
<input type="submit" name="orderSubmit" value="Add to Cart" style=float:right>
</form>

<?php
require('dbConn.php');
$rs = $pdo2->query("SELECT * FROM parts;");


//get the row to print
//$rows = $query1->fetchAll(PDO::FETCH_ASSOC); 

//$rs = $pdo->query("SELECT * FROM Inventory;");


$rows = $rs->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
echo ' 	<h3>'.$row['description'].'</h3>
<p><img src="'.$row['pictureURL'].'"></p>
<p> <b>Price: $</b>'.$row['price'].' </p>
<p>Quantity in stock: '.$row['price'].'</p>
<h5>Select Quantity: <input type="number" name="'.$row['number'].'"></h5>
';
}
?>
</html>
<footer>
<center>
Thank you for shopping at NIU Auto Parts
<br>
For more information, please contact Muhamed Delic, Kevin Gebert, and Vlad Oprescu!
<br>
CSCI 467 - Group Project Part 3
</center>
</footer>
