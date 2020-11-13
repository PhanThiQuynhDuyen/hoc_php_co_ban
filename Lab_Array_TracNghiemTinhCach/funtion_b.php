<!-- <meta charset="UTF-8"> -->
<?php 
    $data = file("options.txt") or die ("Không thể mở file");
    array_shift($data);
    $arrOptions = array();
    foreach ($data as $key => $value){
        $tmd = explode("|", $value);
        list($questionID, $optionID, $answer, $point) = explode("|", $value);
        $arrOptions[$questionID][$optionID]["option"] = $answer;
        $arrOptions[$questionID][$optionID]["point"] = $point;
        
    }
    // echo "<pre>";
    //     print_r($arrOptions);
    //     echo "</pre>";
?>