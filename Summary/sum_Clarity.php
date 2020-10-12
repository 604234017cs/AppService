<?php
 include('../config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

//  $id = $_POST['id'];
$id = $_GET['id']; 
 $sql = "SELECT evaluate.Clarity,COUNT(evaluate.Clarity) as num FROM evaluate WHERE T_ID='".$id."'
 GROUP BY evaluate.Clarity ";
 $result = mysqli_query($con, $sql);
 
 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 
