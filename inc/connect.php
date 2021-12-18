<?php
$servername = "localhost";                /// $servername = "localhost";
$username = "root";                       // $username = "id17492787diegor";
$password = "";                           // $password = "rCL[V<Zh/-Op-5/"; 
$dbname = "site_de_atividades_iff_2021";  // $dbname = "id17492787_site_de_atividades_iff_2021";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>