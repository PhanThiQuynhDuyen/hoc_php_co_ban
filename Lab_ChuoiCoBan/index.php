<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuỗi cơ bản</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
        <div class="main">
            <h2>Chuỗi cơ bản</h2>
            <div class="row">
                <span>Câu 1: </span>Lấy thông tin từ chuỗi url
                <?php 
                    require_once "url.php";
                    echo "<p> - ID: </p>
                    <p> - Name: </p>
                    <p> - Album: </p>
                    <p> - Singer: </p>
                    <p> - Type: </p>"
                ?>

            </div>
            <div class="row">
                <span>Câu 2: </span>Chuẩn hóa chuỗi đơn giản
            </div>
        </div>
    </div>
</body>
</html>