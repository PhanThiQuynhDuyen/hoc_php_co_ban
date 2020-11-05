<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mô phỏng máy ATM</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php 
        $money = 0;
        if (isset($_GET["number"]) && is_numeric($_GET["number"])) {
           $money = $_GET["number"];
        }
    ?>
    <div class="content">
        <div class="header">
            <div class="left">
                <img src="atm.jpg" alt="Hình ảnh">
            </div>
            <div class = "right">
                <h2>Mô phỏng Máy ATM</h2>
                <p>Vui lòng nhập vào số tiền mà quý khách muốn thực hiện giao dịch</p>
                <form action="" method="get">
                    <div class="row">
                        <input type="text" placeholder="Nhập số tiền" name="number" value="<?php echo number_format($money) ;?>">
                        <input type="submit" name="submit" value="Rút tiền">
                    </div>
                </form>
            </div>
        </div>
        <?php 
            define("one", 1000);
            define("two", 2000);
            define("five", 5000);
            define("one_0", 10000);
            define("two_0", 20000);
            define("five_0", 50000);
            define("one_00", 100000);
            define("two_00", 200000);
            define("five_00", 500000);

            
            $five00 = 0;
            $two00 = 0;
            $one00 = 0;
            $five0 = 0;
            $two0 = 0;
            $one0 = 0;
            $five = 0;
            $two = 0;
            $one = 0;
            $flag = false;
            if (is_numeric($money) && $money > 1000) {
                $flag = true;
                //500.000
                while ($money >= five_00) {
                    $five00 += 1;
                    $money = $money - five_00;
                }
                //200.000
                while ($money >= two_00) {
                    $two00 += 1;
                    $money = $money - two_00;
                }
                //100.000
                while ($money >= one_00) {
                    $one00 += 1;
                    $money = $money - one_00;
                }
                //50.000
                while ($money >= five_0) {
                    $five0 += 1;
                    $money = $money - five_0;
                }
                //20.000
                while ($money >= two_0) {
                    $two0 += 1;
                    $money = $money - two_0;
                }
                //10.000
                while ($money >= one_0) {
                    $one0 += 1;
                    $money = $money - one_0;
                }
                //5.000
                while ($money >= five) {
                    $five += 1;
                    $money = $money - five;
                }
                //2.000
                while ($money >= two) {
                    $two += 1;
                    $money = $money - two;
                }
                //10.000
                while ($money >= one) {
                    $one += 1;
                    $money = $money - one;
                }
                //Tính tổng tiền
                $total = ($five00 * five_00) + ($two00 * two_00) + ($one00 * one_00) + 
                            ($five0 * five_0)+ ($two0 * two_0) + ($one0 * one_0) + 
                            ($five * five)+ ($two * two) + ($one * one);
            }
        ?>
        <div class="main">
            <table style="width:100%">
                <tr>
                    <th style="width:50%">Mệnh giá</th>
                    <th style="width:25%; text-align: center;">Số lượng</th>
                    <th style="width:25%; text-align: right;">Thành tiền</th>
                </tr>
                <?php 
                    //500.000
                    if ($five00 > 0) {
                       echo 
                       '<tr>
                            <td style="width:50%">'.number_format(five_00).'</td>
                            <td style="width:25%; text-align: center;">'.$five00.'</td>
                            <td style="width:25%; text-align: right;">'.number_format($five00 * five_00).'</td>
                        </tr>';
                    }
                    //200.000
                    if ($two00 > 0) {
                        echo 
                        '<tr>
                             <td style="width:50%">'.number_format(two_00).'</td>
                             <td style="width:25%; text-align: center;">'.$two00.'</td>
                             <td style="width:25%; text-align: right;">'.number_format($two00 * two_00).'</td>
                        </tr>';
                    }
                    //100.000
                    if ($one00 > 0) {
                        echo 
                        '<tr>
                             <td style="width:50%">'.number_format(one_00).'</td>
                             <td style="width:25%; text-align: center;">'.$one00.'</td>
                             <td style="width:25%; text-align: right;">'.number_format($one00 * one_00).'</td>
                        </tr>';
                    }

                    //50.000
                    if ($five0 > 0) {
                        echo 
                        '<tr>
                             <td style="width:50%">'.number_format(five_0).'</td>
                             <td style="width:25%; text-align: center;">'.$five0.'</td>
                             <td style="width:25%; text-align: right;">'.number_format($five0 * five_0).'</td>
                        </tr>';
                    }
                    //20.000
                    if ($two0 > 0) {
                        echo 
                        '<tr>
                             <td style="width:50%">'.number_format(two_0).'</td>
                             <td style="width:25%; text-align: center;">'.$two0.'</td>
                             <td style="width:25%; text-align: right;">'.number_format($two0 * two_0).'</td>
                        </tr>';
                    }
                    //10.000
                    if ($one0 > 0) {
                        echo 
                        '<tr>
                             <td style="width:50%">'.number_format(one_0).'</td>
                             <td style="width:25%; text-align: center;">'.$one0.'</td>
                             <td style="width:25%; text-align: right;">'.number_format($one0 * one_0).'</td>
                        </tr>';
                    }

                    //5.000
                    if ($five > 0) {
                        echo 
                        '<tr>
                             <td style="width:50%">'.number_format(five).'</td>
                             <td style="width:25%; text-align: center;">'.$five.'</td>
                             <td style="width:25%; text-align: right;">'.number_format($five * five).'</td>
                        </tr>';
                    }
                    //20.000
                    if ($two > 0) {
                        echo 
                        '<tr>
                             <td style="width:50%">'.number_format(two).'</td>
                             <td style="width:25%; text-align: center;">'.$two.'</td>
                             <td style="width:25%; text-align: right;">'.number_format($two * two).'</td>
                        </tr>';
                    }
                    //10.000
                    if ($one > 0) {
                        echo 
                        '<tr>
                             <td style="width:50%">'.number_format(one).'</td>
                             <td style="width:25%; text-align: center;">'.$one.'</td>
                             <td style="width:25%; text-align: right;">'.number_format($one * one).'</td>
                        </tr>';
                    }
                ?>
                
            </table>
            <hr>
            <div class="row">
                <?php 
                    if ($flag == true) {
                        echo '<h2>Tổng tiền: '.number_format($total).' </h2>';
                    }
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>