<?php
/*
./noyau/connexion.php
CREATION D'UNE INSTANCE PDO $connexion
*/
// Paramètre de connexion
$dsn = "mysql:host=" . DBHOTE . ";dbname=" . DBNAME;
$param = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try{
  $connexion = new PDO($dsn,DBUSER,DBPWD,$param);

} catch(PDOException $e) {
  echo "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}
