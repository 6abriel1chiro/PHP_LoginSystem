<?php
$hostname="localhost";
$user="root";
$password="";
$dbname="schooldatabase";
// Establishing Connection with Server..

$connection =mysqli_connect($hostname,$user,$password,$dbname); //mysql_connect($hostname,$user,$password,$dbname);

if(!$connection){
   
     //die('No se pudo conectar : ' . mysql_connect_error());
       echo "Not conected";
}
else{
echo"Conected";
}
