<?php
 include('config.php');
 header("Access-Control-Allow-Origin: *");
 header("Content-Type: application/json; charset=UTF-8");

 $pid = $_GET['pid'];
 $tid = $_GET['tid'];

 echo $pid;
 echo $tid;

 $sql = "SELECT * FROM register WHERE T_ID = '$tid' AND P_ID = '$pid' ";
 $result = mysqli_query($con, $sql);

    $numrow = mysqli_num_rows($result);
    
    if($numrow != null){
        $arr = array();
        while($row = mysqli_fetch_assoc($result)){
            $arr[] = $row;
        }

        echo json_encode($arr);
        mysqli_close($con);
    }else{
        echo json_encode(null);
    }
?> 