<?php 
/*$conn= new mysqli('localhost', 'root','root','prueba_gdlwebcamp',3307);
if($conn->connect_errno){
    echo $error -> $conn->connect_errno;
}*/


$conn= new mysqli('remotemysql.com', 'gSMAo2fsHd','UbYqwskT16','gSMAo2fsHd',3306);
if($conn->connect_errno){
    echo $error -> $conn->connect_errno;
}
?>