<?php

  $username1='z1905512';
  $password1='1998Aug06';
  $username2='student';
  $password2='student';

  try { // if something goes wrong, an exception is thrown
    $dsn1 = "mysql:host=courses;dbname=z1905512";
    $pdo1 = new PDO($dsn1, $username1, $password1);
    
  }
  catch(PDOexception $e1) { // handle that exception
    echo "Connection to database failed: " . $e1->getMessage();
  }

  try {
    $dsn2 = "mysql:host=blitz.cs.niu.edu;dbname=csci467";
    $pdo2 = new PDO($dsn2, $username2, $password2);
  }
  catch(PDOexception $e2) {
    echo "Connection to database failed: " . $e2->getMessage();
  }
?>
