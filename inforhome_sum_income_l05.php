<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST,GET ,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,X-Requested-with");
header("Content-Type: application/json; charset-utf-8");
include('config.ini.php');



$sql = "SELECT inforhome.income,COUNT(inforhome.income) as num FROM inforhome 
        INNER JOIN student ON inforhome.stu_id = student.stu_id WHERE student.level_id = 'l05' 
        GROUP BY inforhome.income,student.level_id";
$result = mysqli_query($con,$sql);

$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
mysqli_close($con);
echo json_encode($arr);

?>