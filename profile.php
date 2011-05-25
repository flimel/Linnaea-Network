<?php

$conn = new PDO('mysql:dbname=linnaeanetwork', 'root');

$row = $conn->query('SELECT name, year FROM info')->fetch();

require 'profile.html';
