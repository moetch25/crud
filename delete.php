<?php 
 require_once "connection.php";
  $query = "DELETE FROM customers WHERE customerNumber = 497";

$runQuery = mysqli_query($conn,$query);

 if ($runQuery) {
     echo "deleted Succesfully"; 
 }else{
    echo "error while deleting data";
}