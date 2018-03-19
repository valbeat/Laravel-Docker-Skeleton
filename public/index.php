<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>NGINX + PHP + MySQL TEST</title>
</head>
<body>
    <div class="container">

<?php 

$db = new mysqli($_ENV['DATABASE_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'], $_ENV['MYSQL_DATABASE']);

if ($db->connect_error) {
    echo $db->connect_error;
    exit;
}

$sql = "INSERT INTO User (name) VALUES('hoge')";
$db->query($sql);

$sql = "SELECT * FROM User";
$result = $db->query($sql);
if ($result === false) {
    echo $db->error;
    exit;
}
$models = [];
while($row = $result->fetch_assoc()) {
    $models[] = $row;   
}
$db->close();

echo '<pre>';
var_dump($models);
echo '</pre>';

?>
</div>
</body>
</html>