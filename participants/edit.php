<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('../config.php');



    // $getP_ID        = '1';
    // $getDir_Name   = 'นางสาว';
    // $getP_Name      ='จิวารีย์ สะ';
    // $getTell      = '0943321234';
    // $getUsername  = 'bah';
    // $getPassword  = '123123';

    $getP_ID   = $_POST['P_ID'];
    $getDir_Name   = $_POST['Dir_Name'];  // $getdata->DirName;
    $getP_Name      =$_POST['P_Name'];   // $getdata->Name;
    $getTell      = $_POST['Tell'];  //$getdata->Tell;
    $getUsername  = $_POST['Username'];   // $getdata->Username;
    $getPassword  = $_POST['Password'];  //$getdata->Password;

    $sql = "UPDATE participants SET  Dir_Name = '$getDir_Name', P_Name = '$getP_Name', Tell = '$getTell'
                                            , Username = '$getUsername', Password =  '$getPassword'
                                            WHERE P_ID = '$getP_ID' ";
    $result = mysqli_query($con, $sql);
    
    if($result){
        $callback = array(
            'status' => 200
            ,'msg' => 'แก้ไขสำเร็จ'
        );
        
    }else{
        $callback = array(
            'status' => 404
            ,'msg' => 'แก้ไขไม่สำเร็จ'
        );
    }

    echo json_encode($callback);
?>