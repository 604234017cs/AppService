
<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('config.php');

    

    $Tid = $_GET['Tid'];
    

    $sql = "SELECT * FROM training,lecturer WHERE training.L_ID = lecturer.L_ID AND training.T_ID = '$Tid'";
    $result = mysqli_query($con, $sql);

    $numrow = mysqli_num_rows($result);

    if($numrow == 1){
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