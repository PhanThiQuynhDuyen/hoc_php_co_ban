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

        if (isset($_GET["loop"])) {
            # code...
            $url = $_SERVER["REQUEST_URI"];
            // echo "Đây là URL hiện tại của bạn: http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            echo $url;
            list($chuoi1, $chuoi2) = explode("?",$url);
            echo $chuoi2;
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
                <input type="text" placeholder="6" name="number" value="6">
            </div>
            <h5>Chọn mẫu tam giác:</h5>
            <div class="row">
                <div class="type">
                    <input type="image" name="type1" value="type1" src="images/tamgiac1.jpg">
                    <input style="margin: 0px 40px;" type="image" name="type2" value="type2" src="images/tamgiac2.jpg">
                    <input type="image" name="type3" value="type3" src="images/tamgiac3.jpg">
                  
                </div>
            </div>
            <!-- <div class="row"">
                <input type="submit" name="submit" value="Xem kết quả">
            </div> -->
        </form>
        <div class="result">
            <!-- <img src="images/aries.jpg" alt="aries"/>
            <p>Cung Ma Kết <span>(Aries: 21/3 – 20/4)</span></p> -->
        </div>
        
    </div>
</body>
</html>