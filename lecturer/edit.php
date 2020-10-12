<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('../config.php');

    // $getL_ID        = '1';
    // $getDir_Name   = 'นางสาว';
    // $getL_Name      ='จิวารีย์ สะ';
    // $getTell      = '0943321234';
    // $getWorkplace = 'มรภ.สงขลา';
    // $getUsername  = 'muna';
    // $getPassword  = '123';

    $getL_ID      = $_POST['L_ID'];
    $getDir_Name   = $_POST['Dir_Name'];  // $getdata->DirName;
    $getL_Name      =$_POST['L_Name'];   // $getdata->Name;
    $getTell      = $_POST['Tell'];  //$getdata->Tell;
    $getWorkplace = $_POST['Workplace'];  //$getdata->Workplace;
    $getUsername  = $_POST['Username'];   // $getdata->Username;
    $getPassword  = $_POST['Password'];  //$getdata->Password;


    
    $sql = "UPDATE lecturer SET Dir_Name = '$getDir_Name', L_Name = '$getL_Name', Tell = '$getTell'
                                , Workplace = '$getWorkplace' , Username = '$getUsername', Password =  '$getPassword'
                                WHERE L_ID = '$getL_ID' ";
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