<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12 Cung Hoàng Đạo</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
        $day = "";
        $month = "";
        $image = "";
        $name = "";
        $time = "";
        $result = '<div class="result">
                            <h4>Bạn chưa nhập dữ liệu</h4>
                        </div>';
        if (isset($_POST['day']) && isset($_POST['month'])) {
            $day = $_POST['day'];
            $month = $_POST['month'];
            $flag = true;
            if (is_numeric($day) && is_numeric($month)) {
                switch ($month) {
                    //Tháng 1
                    case '1':
                        if ($day <= 20) {
                            $image = "capricorn";
                            $name = "Cung Ma Kết";
                            $time = "22/12 – 19/01";
                        }
                        if ($day >= 21) {
                            $image = "Aquarius";
                            $name = "Cung Bảo Bình";
                            $time = "21/01 – 19/02";
                        }
                        if ($day <1 || $day >31) {
                            $flag = false;
                        }
                        break;
                    //Tháng 2
                    case '2':
                        if ($day <= 19) {
                            $image = "Aquarius";
                            $name = "Cung Bảo Bình";
                            $time = "21/01 – 19/02";
                        }
                        if ($day >= 20) {
                            $image = "pisces";
                            $name = "Cung Song Ngư";
                            $time = "20/02 – 20/03";
                        }
                        if ($day <1 || $day >29) $flag = false;
                        break;
                    //Tháng 3
                    case '3':
                        if ($day <= 20) {
                            $image = "pisces";
                            $name = "Cung Song Ngư";
                            $time = "20/02 – 20/03";
                        }
                        if ($day >= 21) {
                            $image = "aries";
                            $name = "Cung Bạch Dương";
                            $time = "21/03 – 20/04";
                        }
                        if ($day <1 || $day >31) $flag = false;
                        break;
                    //Tháng 4
                    case '4':
                        if ($day <= 20) {
                            $image = "aries";
                            $name = "Cung Bạch Dương";
                            $time = "21/03 – 20/04";
                        }
                        if ($day >= 21) {
                            $image = "taurus";
                            $name = "Cung Kim Ngưu";
                            $time = "21/04 – 21/05";
                        }
                        if ($day <1 || $day >30) $flag = false;
                        break;
                    //Tháng 5
                    case '5':
                        if ($day <= 21) {
                            $image = "taurus";
                            $name = "Cung Kim Ngưu";
                            $time = "21/04 – 21/05";
                        }
                        if ($day >= 22) {
                            $image = "gemini";
                            $name = "Cung Song Tử";
                            $time = "22/05 – 21/06";
                        }
                        if ($day <1 || $day >31) $flag = false;
                        break;
                    //Tháng 6
                    case '6':
                        if ($day <= 21) {
                            $image = "gemini";
                            $name = "Cung Song Tử";
                            $time = "22/05 – 21/06";
                        }
                        if ($day >= 22) {
                            $image = "cancer";
                            $name = "Cung Cự Giải";
                            $time = "22/06 – 23/07";
                        }
                        if ($day <1 || $day >30) $flag = false;
                        break;
                    //Tháng 7
                    case '7':
                        if ($day <= 23) {
                            $image = "cancer";
                            $name = "Cung Cự Giải";
                            $time = "22/06 – 23/07";
                        }
                        if ($day >= 24) {
                            $image = "leo";
                            $name = "Cung Sư Tử";
                            $time = "24/07 – 23/08";
                        }
                        if ($day <1 || $day >31) $flag = false;
                        break;
                    //Tháng 8
                    case '8':
                        if ($day <= 23) {
                            $image = "leo";
                            $name = "Cung Sư Tử";
                            $time = "24/07 – 23/08";
                        }
                        if ($day >= 24) {
                            $image = "virgo";
                            $name = "Cung Xử Nữ";
                            $time = "24/08 – 23/09";
                        }
                        if ($day <1 || $day >31) $flag = false;
                        break;
                    //Tháng 9
                    case '9':
                        if ($day <= 23) {
                            $image = "virgo";
                            $name = "Cung Xử Nữ";
                            $time = "24/08 – 23/09";
                        }
                        if ($day >= 24) {
                            $image = "libra";
                            $name = "Cung Thiên Bình";
                            $time = "24/09 – 23/10";
                        }
                        if ($day <1 || $day >30) $flag = false;
                        break;
                    //Tháng 10
                    case '10':
                        if ($day <= 23) {
                            $image = "libra";
                            $name = "Cung Thiên Bình";
                            $time = "24/09 – 23/10";
                        }
                        if ($day >= 24) {
                            $image = "scoppio";
                            $name = "Cung Hổ Cáp";
                            $time = "24/10 – 22/11";
                        }
                        if ($day <1 || $day >31) $flag = false;
                        break;
                    //Tháng 11
                    case '11':
                        if ($day <= 22) {
                            $image = "scoppio";
                            $name = "Cung Hổ Cáp";
                            $time = "24/10 – 22/11";
                        }
                        if ($day >= 23) {
                            $image = "sagittarius";
                            $name = "Cung Nhân Mã";
                            $time = "23/11 – 21/12";
                        }
                        if ($day <1 || $day >30) $flag = false;
                        break;
                     //Tháng 12
                     case '12':
                        if ($day <= 21) {
                            $image = "sagittarius";
                            $name = "Cung Nhân Mã";
                            $time = "23/11 – 21/12";
                        }
                        if ($day >= 22) {
                            $image = "capricorn";
                            $name = "Cung Ma Kết";
                            $time = "22/12 – 19/01";
                        }
                        if ($day <1 || $day >30) $flag = false;
                        break;
                    default:
                        $flag = false;
                        break;
                }
                if ($flag == true) {
                    $result = '<div class="result">
                                    <img src="images/'.$image.'.jpg" alt="'.$image.'"/>
                                    <p>'.$name.' <span>('.ucfirst($image).': '.$time.')</span></p>
                                </div>';
                } else {
                    $result = '<div class="result">
                            <h4>Dữ liệu không hợp lệ</h4>
                        </div>';
                }
            } else {
                $flag = false;
                $result = '<div class="result">
                            <h4>Dữ liệu không hợp lệ</h4>
                        </div>';
            }
        }
        //delete giá trị
        if (isset($_POST['delete'])) {
            $day = "";
            $month = "";
            $result = '<div class="result">
                            <h4>Đã xoá dữ liệu</h4>
                        </div>';
        }
        
    ?>
    <div class="content">
        <h1>Bạn thuộc cung hoàng đạo nào?</h1>
        <form action="#" method="post">
            <div class="row">
                <span>Ngày sinh: </span>
                <input type="text" name="day" value="<?php echo $day; ?>">
            </div>
            <div class="row">
                <span>Tháng sinh: </span>
                <input type="text" name="month" value="<?php echo $month; ?>">
            </div>
            <div class="row">
                <input style="margin-left: 37%;" type="submit" name="submit" value="Xem cung hoàng đạo">
                <input type="submit" name="delete" value="Xoá">
            </div>
        </form>
        <!-- <div class="result">
            <img src="images/aries.jpg" alt="aries"/>
            <p>Cung Ma Kết <span>(Aries: 21/3 – 20/4)</span></p>
        </div> -->
        <?php 
            echo $result;
        ?>
    </div>
</body>
</html>