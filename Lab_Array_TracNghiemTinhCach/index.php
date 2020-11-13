<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm tính cách</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php 
        require_once "funtion_a.php";
        require_once "funtion_b.php";
        $arr = array();
        foreach ($arrQuestion as $key => $value){
            $arr[$key]["question"] = $value["question"];
            $arr[$key]["sentences"] = $arrOptions[$key];
        }
        // echo "<pre>";
        // print_r($arr);
        // echo "</pre>";
    ?>
    <div class="content">
        <div class="main">
            <h2>Trắc nghiệm tính cách</h2>
            <form action="result.php" method="post" name="mainForm">
                <?php 
                    $i = 1;
                    foreach($arr as $key => $value){
                        echo '<div class="row">';
                        echo '<p>
                                <span>Câu hỏi '.$i.': </span>'.$value["question"].'
                            </p>';
                        echo'<ul>';
                        foreach ($value["sentences"] as $keyC => $valueC){
                            echo '<li>
                                     <label for="">
                                        <input type="radio" name="'.$key.'" value="'.$valueC["point"].'">'.$valueC["option"].'
                                    </label>
                                </li>';
                        }
                        echo' </ul>';
                        echo' </div>';
                        $i++;
                    }
                ?>
                <div class="row">
                    <input type="submit" name="submit" value="Xem kết quả">
                </div>
            </form>
        </div>
    </div>
</body>
</html>