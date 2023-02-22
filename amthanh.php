<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="chatbox.css">
    <script src="chatbox.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background-color: #3e3e3f;
        }
        img {
            width: 100%;
            height: 320px;
            border-radius: 30px;
        }
        .choices {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }
        a {
            text-decoration: none;
            color: #f5f5f7;
            font-size: 15px;
            margin: 20px 32px 4px 0;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px;
        }
        .items {
            width: 400px;
            background: #323232;
            border-radius: 25px;
            padding: 30px;
            margin-top: 40px;
            cursor: pointer;
            position: relative;
        }
        .products .items img {
            position: relative;
            width: 235px;
            height: 235px;
            left: 50px;
        }
        .products .items h4 {
            padding: 12px 0;
            text-align: center;
            font-size: 15px;
            line-height: 20px;
            color: #fff;
        }
        .products .items .price{
            color: #fff;
            text-align: center;
            display: block;
            font-size: 18px;
        }                     
        .item-off {
            color: #757575;
            font-size: 14px;
            line-height: 16px;
            padding-top: 5px;
            text-align: center;
        }  
    </style>
</head>
<body>
    <p style="color: #fff; font-size: 40px; margin-top: 20px;" class="text-center">Âm thanh</p>
    <img src="//cdn.tgdd.vn/2022/05/banner/2400-600-1920x480-2.png">
    <div class="choices">
        <a href="https://www.topzone.vn/phu-kien">
            Tất cả
        </a>
        <a href="https://www.topzone.vn/phu-kien-iphone">
            Airpords
        </a>
        <a href="https://www.topzone.vn//phu-kien-mac">
            Earpods
        </a>
        <a href="https://www.topzone.vn//phu-kien-ipad">
            Beats
        </a>
        <a href="https://www.topzone.vn//phu-kien-apple-watch">
            Hardman Kardon
        </a>
        <a href="https://www.topzone.vn//sac-du-phong">
            Sony
        </a>
        <a href="https://www.topzone.vn//adapter-sac">
            JBL
        </a>
    </div>
    
    <div class="products">
        <div class="col-xl-4 col-sm-12 col-md-6 items">
            <img src="https://cdn.tgdd.vn/Products/Images/54/253802/s16/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-261121-033421-650x650.png">
            <h4>Airpod Pro Hộp sạc MagSafe</h4>
            <strong class="price">5.390.000₫</strong>
        </div>
        <div class="col-xl-4 col-sm-12 col-md-6 items">
            <img src="https://cdn.tgdd.vn/Products/Images/54/250701/s16/airpods-3-thumb-650x650.png">
            <h4>Airpod 3</h4>
            <strong class="price">4.490.000₫</strong>https://cdn.tgdd.vn/Products/Images/54/250701/s16/airpods-3-thumb-650x650.png
            <p class="item-off">Sản phẩm chỉ nhận tại cửa hàng</p>
        </div>
        <div class="col-xl-4 col-sm-12 col-md-6 items">
            <img src="https://cdn.tgdd.vn/Products/Images/54/236331/s16/airpods-max-select-bac-thumb-650x650.png">
            <h4>Airpods Max</h4>
            <strong class="price">12.590.000₫</strong>
        </div>
        <div class="col-xl-4 col-sm-12 col-md-6 items">
            <img src="https://cdn.tgdd.vn/Products/Images/54/236026/s16/12-650x650.png">
            <h4>Airpod Pro Hộp sạc không dây</h4>
            <strong class="price">4.990.000₫</strong>
        </div>
        <div class="col-xl-4 col-sm-12 col-md-6 items">
            <img src="https://cdn.tgdd.vn/Products/Images/54/236025/s16/11-650x650.png">
            <h4>Airpod 2 Hộp sạc không dây</h4>
            <strong class="price">3.490.000₫</strong>
        </div>
        <div class="col-xl-4 col-sm-12 col-md-6 items">
            <img src="https://cdn.tgdd.vn/Products/Images/54/236025/s16/11-650x650.png">
            <h4>Airpod 2 Hộp sạc thường</h4>
            <strong class="price">3.390.000₫</strong>
        </div>
    </div>
    <?php
        require_once("./chatbox.html");
    ?>
</body>
</html>