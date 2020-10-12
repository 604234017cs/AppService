<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    // header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    include('config.php');

    // $getT_ID   = $_POST['T_ID ']; 
    // $getL_ID   = $_POST['L_ID ']; 
     $Tid = $_POST['T_ID'];
    $getClarity   = $_POST['Clarity']; 
    $getAbility   =$_POST['Ability'];   
    $getContentAssociation = $_POST['ContentAssociation'];  
    $getCompleteness  = $_POST['Completeness'];   
    $getBeforeTraining   = $_POST['BeforeTraining'];  
    $getAfterTraining  = $_POST['AfterTraining'];  
    $getApplied = $_POST['Applied'];  
    $getKnowledgeGained   = $_POST['KnowledgeGained'];  
    $getTransferable   = $_POST['Transferable'];  
    $getSuggestion = $_POST['Suggestion'];


    // $getT_ID        = '1'; 
    // $getL_ID        = '2';

    // $getClarity = '2';
    // $getAbility ='1';
    // $getContentAssociation = '2' ;
    // $getCompleteness = '5';
    // $getBeforeTraining = '5' ;
    // $getAfterTraining  = '4';
    // $getApplied = '3';
    // $getKnowledgeGained  = '5'; 
    // $getTransferable = '3'; 
    // $getSuggestion = 'veeeeeee';
    
    // T_ID, L_ID,   ' $getT_ID', '$getL_ID',



   
   
    // $Tid = $_POST['Tid'];
    $sql = "INSERT INTO evaluate( T_ID, Clarity, Ability , ContentAssociation, Completeness , BeforeTraining, 
                        AfterTraining, Applied , KnowledgeGained , Transferable, Suggestion )
                        VALUES ('$Tid','$getClarity', '$getAbility ', '$getContentAssociation', '$getCompleteness '
                                , '$getBeforeTraining',' $getAfterTraining', ' $getApplied', 
                                ' $getKnowledgeGained', ' $getTransferable', '$getSuggestion')
                                ";
    $result = mysqli_query($con, $sql);
    
    if($result){
        $callback = array(
            'status' => 200
            ,'msg' => 'สำเร็จ'
        );
        
    }else{
        $callback = array(
            'status' => 404
            ,'msg' => 'ไม่สำเร็จ'
        );
    }

    echo json_encode($callback);
?>