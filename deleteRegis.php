<?php
 include('config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");


// $getregis_id        = '19';

$getregis_id = $_POST['regis_id'];

 $sql = "DELETE FROM register WHERE regis_id = $getregis_id";   
 $result = mysqli_query($con, $sql);
 
 $callback= array(
     'status' => 200
     ,'msg' => 'ลบข้อมูลสำเร็จ'
 );

 echo json_encode($callback);



?> 