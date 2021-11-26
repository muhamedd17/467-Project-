<?php

  $username='z1905512';
  $password='1998Aug06';

  try { // if something goes wrong, an exception is thrown
    $dsn = "mysql:host=courses;dbname=z1905512";
    $pdo = new PDO($dsn, $username, $password);
    
  }
  catch(PDOexception $e) { // handle that exception
    echo "Connection to database failed: " . $e->getMessage();
  }

?>
