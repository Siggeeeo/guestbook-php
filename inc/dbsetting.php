<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'guestbook';

try
{
  $con = new PDO("mysql:host=$servername;dbname=$databasename;charset=utf8mb4", $username, $password);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e)
{
  die("Connection failed:". $e->getMessage());
}
?>