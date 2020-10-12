<?php
 include('config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

//  $getregis_id        = '2';

 $id = $_GET['regis_id'];

 $sql = "SELECT * FROM cer WHERE regis_id = '".$id."'";
 $result = mysqli_query($con, $sql);
 
 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 