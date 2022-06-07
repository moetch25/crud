<?php 
 require_once "connection.php";

 $query = "SELECT customerName ,city ,country FROM `customers`";

 $runQuery = mysqli_query($conn,$query);

 $result = mysqli_fetch_all($runQuery , MYSQLI_ASSOC);

 var_dump($result);

