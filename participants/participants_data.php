<?php
 include('../config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

 
// //  true
 $id = $_POST['id'];
 $sql = "SELECT * FROM register INNER JOIN training ON register.T_ID = training.T_ID where P_ID ='$id'";
 $result = mysqli_query($con, $sql);
 
// $id = $_POST['id'];
// $sql = "SELECT register.P_ID, training.T_Name, training.Date
// FROM training,register  where  register.P_ID ='$id'";
// $result = mysqli_query($con, $sql);

//  $sql = 'SELECT training.T_Name, training.Date, training.Address, training.Time, lecturer.L_Name
//  FROM training,lecturer
//  WHERE training.L_ID =  lecturer.L_ID';


 $arr = array();
 while($row = mysqli_fetch_assoc($result)){
     $arr[] = $row;
 }
 mysqli_close($con);
 echo json_encode($arr);

?> 