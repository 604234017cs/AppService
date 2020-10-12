<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('../config.php');

    $getDirName   = $_POST['DirName'];  // $getdata->DirName;
    $getName      =$_POST['Name'];   // $getdata->Name;
    $getTell      = $_POST['Tell'];  //$getdata->Tell;
    $getUsername  = $_POST['Username'];   // $getdata->Username;
    $getPassword  = $_POST['Password'];  //$getdata->Password;


    // $getID        = 'feeff';
    // $getDirName   = 'fyeff';
    // $getName      ='fefgfgf';
    // $getTell      = '0943321234';
    // $getUsername  = 'fefeff';
    // $getPassword  = 'fefeff';


    $sql = "INSERT INTO participants( Dir_Name, P_Name, Tell, Username, Password)
                        VALUES ( '$getDirName', '$getName', '$getTell', '$getUsername', '$getPassword')";
    $result = mysqli_query($con, $sql);
    
    if($result){
        $callback = array(
            'status' => 200
            ,'msg' => 'ลงทะเบียนสำเร็จ'
        );
        
    }else{
        $callback = array(
            'status' => 404
            ,'msg' => 'ลงทะเบียนไม่สำเร็จ'
        );
    }

    echo json_encode($callback);
?>