<?php 
$conn= new mysqli('localhost', 'root','root','prueba_gdlwebcamp',3307);
if($conn->connect_errno){
    echo $error -> $conn->connect_errno;
}

?>