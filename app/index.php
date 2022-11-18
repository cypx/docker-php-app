<?php
$host = 'mysql';
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');
    
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}
    
echo '<h1>Successful database connection!</h1>'.PHP_EOL;
echo '<img src="./assets/ok.png" />'.PHP_EOL;