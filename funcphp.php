<?php

$host = '127.0.0.1';
$db = 'test3';
$user = 'root';
$pass = '';
$charset = 'utf8';
+ $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];


$pdo = new PDO($dsn, $user, $pass, $opt);

$stmt = $pdo->query('SELECT Email FROM Site');
while ($row = $stmt->fetch())
{
echo $row['Email'] . "\n";
}


$sql = "INSERT INTO Enter (Email, Password) VALUES (:Email,:Password)";
$q = $pdo->prepare($sql);
$q->execute(array(':Email'=>$Email,
':Password'=>$Password));

if(isset($_POST['Email'])) $Email = $_POST['Email'];
if(isset($_POST['Password'])) $Password = $_POST['Password'];
?>