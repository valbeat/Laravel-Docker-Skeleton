<?php
$dsn = sprintf('mysql:host=%s:3306;dbname=%s',  $_ENV['DATABASE_HOST'], $_ENV['MYSQ_DATABASE']);
$user = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];
$dbh = new PDO($dsn, $user, $password);
$sql = "SELECT version();";
foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row) {
    print_r($row);
}
$sql = "show tables;";
foreach ($dbh->query($sql, PDO::FETCH_ASSOC) as $row) {
    print_r($row);
}