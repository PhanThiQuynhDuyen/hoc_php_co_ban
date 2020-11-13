<!-- <meta charset="UTF-8"> -->
<?php
    $data = file("question.txt") or die ("Không thể mở file");
    array_shift($data);
    $arrQuestion = array();
    foreach ($data as $key => $value){
        echo "<pre>";
        list($id, $question) = explode("|", $value);
        $arrQuestion[$id] = array("question" => $question);
        echo "</pre>";
        
    }
    // echo "<pre>";
    // print_r($arrQuestion);
    // echo "</pre>";
?>