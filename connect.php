<?php
$severname = 'localhost';
$username ='hirwaghislain';
$password = '';
$database = 'crudphp';

$conn = new mysqli($severname,$username,$password,$database);
if(!$conn){
    // die(mysqli_error($conn));
    echo "connection failed!!!";

}
else{

    // echo "connection successfully !!!!!";
}


?>