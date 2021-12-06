<!-- Muhamed Delic -->
<!-- z1905512 -->
<!-- CSCI 467 -->
<!-- Project Part 3 -->
<html><head><title> NIU Auto Parts Employee UI </title></head>
<body style="background-color:Tomato;">
<h1>Choose which employee you are:</h1>

<?
echo '<form method='POST'action='employee.php'>
 <input type='submit' name='workstation' value='Workstation Employee' style=float:left />
 <form method='POST'action='receiving.php'>
 <input type='submit' name='receiving' value='Receiving Desk Employee' style=float:left />
 <input type='submit' name='admin' value='Administrator Employee' style=float:left />
 ';
?>
</body>
</html>
