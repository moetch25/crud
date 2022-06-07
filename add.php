<?php 
 require_once "connection.php";

 $query = "INSERT INTO customers (customerNumber ,customerName ,city ) VALUES('497' ,'Mohamed','Giza')";

 $runQuery = mysqli_query($conn,$query);

 if ($runQuery) {
     echo "Added Succesfully"; 
 }else{
    echo "error while adding data";
 }