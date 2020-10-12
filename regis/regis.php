<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('../config.php');

    // $getT_ID  =  '1'; 
    // $getP_ID  =  '2';


    $getT_ID   = $_POST['T_ID'];  
    $getP_ID   =$_POST['P_ID']; 
    $sql = "INSERT INTO register(T_ID, P_ID) VALUES ('$getT_ID','$getP_ID')";
    $result = mysqli_query($con, $sql);

    if($result){
        $callback = array(
            'status' => 200
            ,'msg' => 'ลงทะเบียนสำเร็จ'
        );
        echo json_encode($callback);
    }else{
        $callback = array(
            'status' => 404
            ,'msg' => 'ลงทะเบียนไม่สำเร็จ'
        );
        echo json_encode($callback);
    }

   
?>