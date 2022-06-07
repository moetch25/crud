<?php 
 require_once "connection.php";

 $query = "UPDATE customers SET customerName = 'Mohamed' , city ='Giza' WHERE customerNumber = 497";

$runQuery = mysqli_query($conn,$query);

 if ($runQuery) {
     echo "edited Succesfully"; 
 }else{
    echo "error while editing data";
 }