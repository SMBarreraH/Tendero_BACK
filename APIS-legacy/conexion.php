<?php
$hostname='127.0.0.1';
$username ='encargalodev';
$password='encargalo33';
$database ='dbencargalov2';

$conexion = mysqli_connect($hostname,$username,$password,$database);

if( mysqli_connect_errno() ){
    echo "Conexion fallida: " . mysqli_connect_error();
}else{
    echo "Conexion exitosa";
}



?>