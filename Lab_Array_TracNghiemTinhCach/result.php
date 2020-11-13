<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm tính cách</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
        $total = 0;
        $data = file("question.txt") or die ("Không thể mở file");
        array_shift($data);
        foreach ($data as $key => $value){
            // list($id, $question) = explode("|", $value);
            $tmd = explode("|", $value);
            $id = $tmd[0];
            
            $total = $total + (int)$_POST[$id];
        }
        // echo $total;
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        $dataResult = file("result.txt") or die ("Không thể mở file");
        array_shift($dataResult);
        foreach ($dataResult as $key => $value){
            list($min, $max, $content) = explode("|", $value);
            if ($total >= $min && $total <= $max) {
                # code...
                $result = $content;
                break;
            }
        }
    ?>
    <div class="content">
        <div class="main">
            <h2>Kết quả trắc nghiệm tính cách</h2>
            <div class="row">
                <p>
                    <span>Tổng điểm của bạn là: </span> <?php echo $total; ?>
                </p>
            </div>
            
            <div class="row">
                <p>
                    <span>Kết quả bài trắc nghiệm của bạn: </span> <?php echo $result; ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>