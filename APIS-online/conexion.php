<?php
$hostname='127.0.0.1';
$username ='encargalodev';
$password='12345';
$database ='dbencargaloF';

$conexion = mysqli_connect($hostname,$username,$password,$database);

if( mysqli_connect_errno() ){
    echo "Conexion fallida: " . mysqli_connect_error();
}else{
    
}



?>