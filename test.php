<?php
 include('config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

//  $id = $_POST['id'];
//  $sql = "SELECT * FROM training where  L_ID ='$id'";

// $id = $_POST['id'];
// echo $id;
$sql = "SELECT * FROM `training` WHERE training.T_ID = '1'";

 $result = mysqli_query($con, $sql);
 
 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 