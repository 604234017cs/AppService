<?php
 include('../config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");


 $sql = "SELECT * FROM lecturer";
 $result = mysqli_query($con, $sql);
 
 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 