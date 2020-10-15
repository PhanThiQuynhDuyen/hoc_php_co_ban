<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mô phỏng máy tính</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
        $n1 = "";
        $n2 = "";
        $calculation = "";
        $result="";
        $flat = true;
        if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['pheptoan'])) {
            # code...
            $n1 = $_POST['number1'];
            $n2 = $_POST['number2'];
            $calculation=$_POST['pheptoan'];
            if (is_numeric($n1) && is_numeric($n2)) {
                
                switch ($calculation) {
                    case '+':
                        $result = $n1 + $n2;
                        break;
                    case '-':
                        $result = $n1 - $n2;
                        break;
                    case '*':
                        $result = $n1 * $n2;
                        break;
                    case '/':
                        $result = $n1 / $n2;
                        break;
                    case '%':
                        $result = $n1 % $n2;
                        break;
                    default:
                        # code...
                        $result = $n1 + $n2;
                        $calculation = "+";
                        break;
                }

            } else{
                $flat = false;
            }
        }
        if(isset($_POST['delete'])){
            $n1 = "";
        $n2 = "";
        $calculation = "";
        $result="";
        }

    ?>
    <div class="content">
        <h1>Mô phỏng máy tính điện tử</h1>
        <form action="#" method="post">
            <div class="row">
                <span>Số thứ nhất: </span>
                <input type="text" name="number1" value="<?php echo $n1; ?>">
            </div>
            <div class="row">
                <span>Phép toán: </span>
                <input type="text" name="pheptoan" value="<?php echo $calculation; ?>">
            </div>
            <div class="row">
                <span>Số thứ 2: </span>
                <input type="text" name="number2" value="<?php echo $n2; ?>">
            </div>
            <div class="row">
                <input style="margin-left: 45%;" type="submit" name="submit" value="Xem kết quả">
                <input type="submit" name="delete" value="Xoá">
            </div>
            <div class="row">
                <!-- <p>Kết quả của phép toán </p> -->
                <?php
                    $daubang = "";
                    if(isset($_POST['submit'])){
                        $daubang = "=";
                    }
                    if ($flat==true) {
                        echo "<p>Kết quả của phép toán: $n1 $calculation $n2 $daubang $result </p>";
                    } else {
                        echo "<p>Không thực hiện được phép toán.</p>";
                    }
                    //Xoá toàn bộ giá trị trên giao diện
                    
                ?>
            </div>
        </form>

    </div>
</body>
</html>