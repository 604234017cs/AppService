<?php
 include('config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

//  $getregis_id        = '2';

 $pid = $_GET['pid'];
 $tid = $_GET['tid'];

 $sql = "SELECT * FROM participants 
 INNER JOIN register ON register.P_ID = participants.P_ID
 INNER JOIN cer ON cer.regis_id = register.regis_id
 INNER JOIN training ON training.T_ID = register.T_ID
 WHERE register.P_ID ='$pid' AND register.T_ID ='$tid'";
 $result = mysqli_query($con, $sql);
 
 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 