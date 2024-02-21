<?php include_once "./db.php";
if(isset($_POST['subject'])){
    $Que->save(['text'=>$_POST['subject'],'subject_id'=>0,'vote'=>0]);
    // 根據剛才新增的主題資料去找到主題的資料id
    // 使用max()找到最大的id
    $subject_id=$Que->max('id');
}
if(isset($_POST['option'])){
    foreach($_POST['option'] as $option){
        $Que->save(['text'=>$option,'subject_id'=>$subject_id,'vote'=>0]);
    }
}
to("../back.php?do=que");