<?php
 include('../config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

 $id = $_GET['id']; 

 $sql = "SELECT evaluate.Completeness,COUNT(evaluate.Completeness ) as num FROM evaluate WHERE T_ID='".$id."'
 GROUP BY evaluate.Completeness ";
 $result = mysqli_query($con, $sql);
 
 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 