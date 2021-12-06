<!-- Vlad Oprescu -->
<!-- z1665498 -->
<!-- CSCI 467 -->
<!-- Project Part 3 -->
<?php
// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE - CHANGE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "test";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=blitz.cs.niu.edu;dbname=csci467",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// (C) SAVE ORDER TO DATABASE
if ($result=="") {
  try {
    $stmt = $pdo->prepare("INSERT INTO `orders` (`name`, `email`, `qty`) VALUES (?,?,?)");
    $stmt->execute([$_POST["name"], $_POST["email"], $_POST["qty"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

// (D) SEND ORDER VIA EMAIL
if ($result=="") {
  $to = "z1665498@students.niu.edu"; // Get the order
  $subject = "ORDER RECEIVED";
  $message = "";
  foreach ($_POST as $k=>$v) { $message .= "$k - $v\r\n"; }
  if (!@mail($to, $subject, $message)) { $result = "Error sending mail!"; }
}
