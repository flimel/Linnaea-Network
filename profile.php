<?php

$conn = new PDO('mysql:dbname=linnaeanetwork', 'root');

$username = substr($_SERVER['PATH_INFO'], 1);

$stmt = $conn->prepare('SELECT name, year FROM info WHERE username = ?');
$stmt->execute(array($username));

$row = $stmt->fetch();
if (!$row)
{
  header('HTTP/1.1 404 Not Found');

  return;
}

require 'profile.html';
