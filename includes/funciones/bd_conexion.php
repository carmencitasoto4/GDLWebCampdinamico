<?php 
/*$conn= new mysqli('localhost', 'root','root','prueba_gdlwebcamp',3307);
if($conn->connect_errno){
    echo $error -> $conn->connect_errno;
}*/


$conn= new mysqli('us-cdbr-east-05.cleardb.net', 'b953cd2e7d885c','935445dd','heroku_04372a61cd00d42',3306);
if($conn->connect_errno){
    echo $error -> $conn->connect_errno;
}
?>
