<?php

$conn = new PDO('mysql:dbname=linnaeanetwork', 'root');

session_start();

$username = $_SESSION['username'];

if ('POST' === $_SERVER['REQUEST_METHOD'])
{
  $stmt = $conn->prepare('UPDATE info SET name = ?, username = ?, year = ? WHERE username = ?');
  $stmt->execute(array($_POST['name'], $_POST['username'], $_POST['year'], $username));

  header('Location: list.php');
}

$stmt = $conn->prepare('SELECT name, username, year FROM info WHERE username = ?');
$stmt->execute(array($username));

$row = $stmt->fetch();
if (!$row)
{
  header('HTTP/1.1 404 Not Found');

  return;
}

require 'edit.html';
