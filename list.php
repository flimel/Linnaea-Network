<?php

$conn = new PDO('mysql:dbname=linnaeanetwork', 'root')

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta content="HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" name="generator" />

  <title></title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>Name</th>

        <th>Linnaea year</th>
      </tr>
    </thead>

    <tbody>
<?php foreach ($conn->query('SELECT name, year FROM info') as $row): ?>
      <tr>
        <td><a href="profile.html"><?= $row[0] ?></a></td>

        <td><?= $row[1] ?></td>
      </tr>
<?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>