<!-- Muhamed Delic -->
<!-- z1905512 -->
<!-- CSCI 467 -->
<!-- Project Part 3 -->
<html><head><title> NIU Auto Parts Catalog Page </title></head>
<h1 style="text-align:left;">
NIU Auto Parts
</h1>
<center>
    <body style="background-color:Tomato;">
    <a href="https://lh3.googleusercontent.com/ej6MYUL3K8rVH3fe1BaXkykOx1xnzdaUdtW89Cf8Axm8yrqEm_wMgRT83U7YNjECCSAu2e53nYCPikeiAym-GLKChNJbNUO1pQ8L-7CRkpf4FIQiTTJhkMshxCtTDf_ifP9Y6lbW_A=w2400?source=screenshot.guru"> <img src="https://lh3.googleusercontent.com/ej6MYUL3K8rVH3fe1BaXkykOx1xnzdaUdtW89Cf8Axm8yrqEm_wMgRT83U7YNjECCSAu2e53nYCPikeiAym-GLKChNJbNUO1pQ8L-7CRkpf4FIQiTTJhkMshxCtTDf_ifP9Y6lbW_A=w600-h315-p-k" /> </a>
    <h2>Products</h2>
</center>

<form action="orderSubmit.php" method="POST">
<input type="submit" name="orderSubmit" value="Add to Cart" style=float:right>
</form>

<?php
require('dbConn.php');
$rs = $pdo2->query("SELECT * FROM parts;");
$rows = $rs->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
echo ' 	<h3>'.$row['description'].'</h3>
<p><img src="'.$row['pictureURL'].'"></p>
<p>Price: $'.$row['price'].' </p>
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
