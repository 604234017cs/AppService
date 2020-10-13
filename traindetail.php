
<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('config.php');

    

    $Tid = $_GET['Tid'];
    $Pid = $_GET['Pid'];
    // $sql = "SELECT * FROM training
    // INNER JOIN lecturer ON training.L_ID = lecturer.L_ID 
    // INNER JOIN register ON register.T_ID = training.T_ID
    //     WHERE training.T_ID ='$Tid'";
    // $sql = "SELECT * FROM training,lecturer
    // WHERE training.L_ID = lecturer.L_ID AND training.T_ID ='$Tid'";
    // $sql = "SELECT * FROM lecturer 
    // INNER JOIN training ON training.L_ID = lecturer.L_ID 
    // INNER JOIN register ON register.T_ID = training.T_ID 
    // INNER JOIN cer ON cer.regis_id = register.regis_id 
    // WHERE training.T_ID = '$Tid'";
    // $sql = "SELECT * FROM lecturer 
    // INNER JOIN training ON training.L_ID = lecturer.L_ID AND training.T_ID = '$Tid'
    // INNER JOIN register ON register.T_ID = training.T_ID 
    // INNER JOIN cer ON cer.regis_id = register.regis_id ";


    $sql = "SELECT * FROM lecturer 
    INNER JOIN training ON training.L_ID = lecturer.L_ID AND training.T_ID = '$Tid' 
    INNER JOIN register ON register.T_ID = training.T_ID AND register.P_ID = '$Pid' 
    -- INNER JOIN cer ON cer.regis_id = register.regis_id";
    $result = mysqli_query($con, $sql);

    // $numrow = mysqli_num_rows($result);

    // if($numrow == 1){
    //     $arr = array();
    //     while($row = mysqli_fetch_assoc($result)){
    //         $arr[] = $row;
    //     }
    //     echo json_encode($arr);
    //     mysqli_close($con);
    // }else{
    //     echo json_encode(null);
    // }
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        $arr[] = $row;
    }
    mysqli_close($con);
    echo json_encode($arr);
?>