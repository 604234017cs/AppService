<?php
 include('config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

//  $id = $_POST['id'];
//  $sql = "SELECT * FROM training where  L_ID ='$id'";

$id = $_POST['id'];
// echo $id;
$sql = "SELECT participants.P_ID,participants.Dir_Name, participants.P_Name,participants.Tell,register.regis_id 
        FROM register 
        INNER JOIN participants ON register.P_ID = participants.P_ID 
        WHERE T_ID = '$id'";

 $result = mysqli_query($con, $sql);
 
 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 