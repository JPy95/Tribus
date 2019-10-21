<?php
// Valores de Parametros
$host = 'tribusdb.mysql.database.azure.com';
$username = 'tribus@tribusdb';
$password = 'Unibh@2019';
$db_name = 'tribusdb';

//Estabelece a conexão
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
//Close the connection
//mysqli_close($conn);
?>