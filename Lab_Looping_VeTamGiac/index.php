<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In tam giác</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php 
        $n=6;
        $flat = true;
        $result = "";
        if (isset($_GET["loop"])) {
            # code...
            $url = $_SERVER["REQUEST_URI"];
            // echo "Đây là URL hiện tại của bạn: http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            list($local, $ur) = explode("?",$url);
            list($loop,$number,$types) = explode("&",$ur);
            list($type) = explode(".", $types);
            if (isset($_GET["number"])) {
                # Xử lý chức năng vẽ tam giác
                $n = $_GET["number"];
                if (is_numeric($n)) {
                    switch ($_GET["loop"]) {
                        //Vòng lặp for
                        case "for":
                            if ($type == "type1") {
                                for ($i=1; $i <= $n; $i++) { 
                                    $result.= str_repeat("*", $i) . "<br />";
                                }
                            }
                            if ($type == "type2") {
                                for ($i=$n; $i >=1 ; $i--) { 
                                    $result.= str_repeat("*", $i) . "<br />";
                                }
                            }
                            if ($type =="type3") {
                                for ($i=1; $i <=$n ; $i++) { 
                                    $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                                    $character = str_repeat("*", 2*$i-1);
                                    $result .= $space . $character.'<br />';
                                }
                            }

                            //Vòng lặp while
                            case "while":
                                if ($type == "type1") {
                                    $i = 1;
                                    while ($i <= $n){
                                        $result.= str_repeat("*", $i) . "<br />";
                                        $i++;
                                    }
                                }
                                if ($type == "type2") {
                                    $i=$n;
                                    while ($i >= 1){
                                        $result.= str_repeat("*", $i) . "<br />";
                                        $i--;
                                    }
                                }
                                if ($type =="type3") {
                                    $i=1;
                                    while ($i <= $n){
                                        $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                                        $character = str_repeat("*", 2*$i-1); 
                                        $result .= $space . $character.'<br />';
                                        $i++;
                                    }
                                }
                                break;

                            //Vòng lặp do..while
                            case "do..while":
                                if ($type == "type1") {
                                    $i = 1;
                                    do {
                                        $result.= str_repeat("*", $i) . "<br />";
                                        $i++;
                                     }
                                     while ($i <= $n);
                                }

                                if ($type == "type2") {
                                    $i=$n;
                                    do {
                                        $result.= str_repeat("*", $i) . "<br />";
                                        $i--;
                                    } while ($i >= 1);
                                }
                                if ($type =="type3") {
                                    $i=1;
                                   do {
                                        $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                                        $character = str_repeat("*", 2*$i-1);
                                        $result .= $space . $character.'<br />';
                                        $i++;
                                   } while ($i <= $n);
                                }
                        default:
                            
                            break;
                    }
                } else {
                    $flat = false;
                }
            }
        }
        
    ?>
    <div class="content">
        <h1>In Tam Giác</h1>
        <form method="get" action="">
            <h5>Chọn vòng lặp:</h5>
            <div class="row">
                <input type="radio" id="1" name="loop" value="for" checked>
                <label for="1">for</label>
            </div>
            <div class="row">
                <input type="radio" id="2" name="loop" value="while">
                <label for="2">while</label>
            </div>
            <div class="row">
                <input type="radio" id="3" name="loop" value="do..while">
                <label for="3">do..while</label>
            </div>
            <div class="row" style="margin-top: 10px;">
                <label>Số hàng: </label>
                <input type="text" placeholder="6" name="number" value="<?php echo $n;?>">
            </div>
            <h5>Chọn mẫu tam giác:</h5>
            <div class="row">
                <div class="type">
                    <input type="image" name="type1" value="type" src="images/tamgiac1.jpg">
                    <input style="margin: 0px 40px;" type="image" name="type2" value="type2" src="images/tamgiac2.jpg">
                    <input type="image" name="type3" value="type3" src="images/tamgiac3.jpg">
                  
                </div>
            </div>
        </form>
        <div class="result">
            <p>Kết quả</p>
            <h4>
                <?php 
                    echo $result;
                ?>
            </h4>
        </div>
    </div>
</body>
</html>