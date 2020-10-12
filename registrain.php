
<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include('config.php');

    // $contentdata = file_get_contents("php://input");
    // $getdata = json_decode($contentdata);

    // $user = $getdata->user;
    // $pass = $getdata->pass;

    $Pid = $_GET['Pid'];


    // $pass = $_POST['pass'];

    // $sql = "SELECT * FROM participants WHERE Username = '$user' AND Password = '$pass' ";
    $sql = "SELECT * FROM register,participants,training WHERE register.P_ID = participants.P_ID AND register.T_ID = training.T_ID AND participants.P_ID = '$Pid' ";

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