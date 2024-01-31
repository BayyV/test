<?php
$hostname='us-cluster-east-01.k8s.cleardb.net';
$database='heroku_633baf75972dde1';
$username='b45675cb6b24c2';
$password='3ff3c9c7';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>