
<?php
// (A) PROCESS RESULT
$order = "";

// (B) CONNECT TO DATABASE 
$dbhost = "courses";
$dbname = "z1905512";

$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=blitz.cs.niu.edu;dbname=csci467",
    $dbuser1, $dbpassword1, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// put the order in the database
if ($order=="") {
  try {
    $statement = $pdo->prepare("INSERT INTO `orders` (`name`, `email`, `qty`) VALUES (?,?,?)");
    $statement->execute([$_POST["name"], $_POST["email"], $_POST["qty"]]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

// send a confirmation 
if ($result=="") {
  $to = "z1665498@students.niu.edu"; 
  $subject = "Your Order has been recieved";
  $message = "";
 }
}
