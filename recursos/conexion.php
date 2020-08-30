<?php
//print('base');
// Carga la configuración 
$config = parse_ini_file('config.ini'); 

// Conexión con los datos del 'config.ini' 
$connection = mysqli_connect('127.0.0.1:3306','root','root','mmv'); 

// Si la conexión falla, aparece el error 
if($connection === false) { 
 echo 'Ha habido un error <br>'.mysqli_connect_error(); 
} else {
 echo 'Conectado a la base de datos';
}
?>