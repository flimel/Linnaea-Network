<?php

if ('POST' === $_SERVER['REQUEST_METHOD'])
{
  $conn = new PDO('mysql:dbname=linnaeanetwork', 'root');

  $stmt = $conn->prepare('INSERT INTO info (name, username, year) VALUES (?, ?, ?)');
  $stmt->execute(array($_POST['name'], $_POST['username'], $_POST['year']));

  header('Location: thankyou.html');
}

require 'create.html';
