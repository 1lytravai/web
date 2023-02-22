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
    <link rel="stylesheet" href="footer.css">
    <style>
        .banner img {
            width: 100%;
        }
        h2 {
            margin: auto 0;
        }
        .care-services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        .care-services img {
            width: 200px;
            height: 200px;
            margin: 40px;
        }
        .container .care-services p, p.reasons {
            font-size: 20px;
            font-weight: bold;
        }
        .reason-choices img {
            position: relative;
            width: 70px;
            height: 70px;
            margin: 30px 0px;
        }
        .reason-choices {
            position: relative;
        }
        p.info {
            font-size: 18px;
            font-weight: normal;
            width: 350px;
        }
        .items .accessories img {
            width: 150px;
            height: 150px;
        }
        .insurance-process {
            display: flex;
            justify-content: space-around;
        }
        .step img {
            position: relative;
            width: 80px;
            height: 80px;
            left: 50px;
        }
        .introduction {
            color: #fff;
            background-color: #000;
            margin: 50px 50px;
            padding: 10px 10px;
        }
        .introduction p {
            margin: 0 250px 50px;
        }
        .imgs-show {
            display: flex;
            justify-content: space-around;
        }
        .imgs-show img {
            border-radius: 10px;
            width: 315px;
            height: 210px;
        }
        .info-store .title {
            position: relative;
            font-size: 30px;
            line-height: 50px;
            margin-top: 40px;
            margin-bottom: 15px;
            left: -250px;
        }
        .locate-store {
            display: flex;
        }
        .locate-store p {
            font-size: 20px;
            margin-left: 15px;
        }
        .worktime-store ul {
            font-size: 20px;
            margin-left: 25px;
            margin-top: -30px
        }
        .phonenum-store a {
            font-size: 20px;
            margin-left: 15px;
            text-decoration: none;
        }
        .description {
            font-size: 15px;
            line-height: 22px;
            color: black;
            margin-bottom: 10px;
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <div class="banner">
        <a href="https://www.topzone.vn/topcare#intro">
            <img src="//cdn.tgdd.vn/2022/08/banner/-nen--Topcare-banner-desktop-2400x600-min-1920x480.png" alt="TopCare">
        </a>
    </div>
    <div class="container">
        <h2 style="text-align: center; margin-top: 20px; font-weight: bold;">Dịch vụ sửa chữa TopCare</h2>
        <div class="care-services row">
            <div class="ip-repair col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/repair_service/iphone.png">
                <p class="text-center">Sửa chữa iPhone</p>
                <div class="servieces-name text-center">
                    <span>Pin</span>
                    <span>Camera</span>
                    <span>Rung</span>
                </div>
                <div class="text-center">
                    <a href="#" style="text-decoration: none;">Xen bảng giá</a>
                </div>
            </div>
            <div class="ipad-repair col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/repair_service/ipad.png">
                <p class="text-center">Sửa chữa iPad</p>
                <div class="servieces-name text-center">
                    <span>Đổi máy</span>
                </div>
                <div class="text-center">
                    <a href="#" style="text-decoration: none;">Xen bảng giá</a>
                </div>
            </div>
            <div class="mac-repair col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/repair_service/macbook.png">
                <p class="text-center">Sửa chữa Macbook</p>
                <div class="servieces-name text-center">
                    <span>Logic Board</span>
                    <span>Pin</span>
                    <span>Bàn phím</span>
                </div>
                <div class="text-center">
                    <a href="#" style="text-decoration: none;">Xen bảng giá</a>
                </div>
            </div>
            <div class="watch-repair col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/repair_service/watch.png">
                <p class="text-center">Sửa chữa Watch</p>
                <div class="servieces-name text-center">
                    <span>Đổi máy</span>
                </div>
                <div class="text-center">
                    <a href="#" style="text-decoration: none;">Xen bảng giá</a>
                </div>
            </div>
            <div class="airport-repair col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/repair_service/airpod.png">
                <p class="text-center">Sửa chữa Airpod</p>
                <div class="servieces-name text-center">
                    <span>Đổi máy</span>
                </div>
                <div class="text-center">
                    <a href="#" style="text-decoration: none;">Xen bảng giá</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12"></div>
        </div>

        <div class="reasons row" style="background-color: #F5F5F7; margin-top: 70px;">
            <h2 style="text-align: center; margin-top: 30px; font-weight: bold;">Lý do lựa chọn TopCare</h2>
            <div class="reason-choices col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/why_choose/icon_1.png">
                <p class="reasons">Chính hãng Apple</p>
                <p class="info">TopCare là trung tâm dịch vụ ủy quyền chính thức của Apple. Tất cả linh kiện sửa chữa tại TopCare đều do Apple cung cấp chính hãng.</p>
            </div>
            <div class="reason-choices col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/why_choose/icon_2.png">
                <p class="reasons">Chứng chỉ Apple</p>
                <p class="info">100% đội ngũ chuyên viên và kỹ thuật viên của TopCare được đào tạo và cấp chửng chỉ bởi Apple.</p>
            </div>
            <div class="reason-choices col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/why_choose/icon_3.png">
                <p class="reasons">Bảo mật tuyệt đối</p>
                <p class="info">Thông tin khách hàng cung cấp được bảo vệ nghiêm ngặt theo tiêu chuẩn kiểm soát cao nhất.</p>
            </div>
            <div class="reason-choices col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/why_choose/icon_4.png">
                <p class="reasons">Dịch vụ đẳng cấp</p>
                <p class="info">Với phương châm lấy khách hàng làm trọng tâm. TopCare cam kết mang đến chất lượng phục vụ vượt trội dành cho khách hàng.</p>
            </div>
            <div class="reason-choices col-xl-4 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/why_choose/icon_5.png">
                <p class="reasons">Tiết kiệm</p>
                <p class="info">TopCare thường xuyên có những chương trình ưu đãi giúp khách hàng tiết kiệm hơn khi sửa chữa sản phẩm.</p>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12"></div>
        </div>

        <div class="row items" style="text-align: center; margin-top: 30px; font-weight: bold;">
            <h2 style="text-align: center; font-weight: bold; margin-bottom: 40px;">Phụ kiện chính hãng Apple tại TopCare</h2>
            <div class="accessories col-xl-3 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/accessory/img_1.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px;">Tai nghe</p>
            </div>
            <div class="accessories col-xl-3 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/accessory/img_2.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px;">Cáp | Sạc</p>
            </div>
            <div class="accessories col-xl-3 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/accessory/img_3.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px;">Ốp lưng | Bao da</p>
            </div>
            <div class="accessories col-xl-3 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/accessory/img_4.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px;">Dây Apple Watch</p>
            </div>
            <div class="accessories col-xl-3 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/accessory/img_5.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px;">AirTag</p>
            </div>
            <div class="accessories col-xl-3 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/accessory/img_6.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px;">Chuột | Trackpad</p>
            </div>
            <div class="accessories col-xl-3 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/accessory/img_7.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px;">Apple TV</p>
            </div>
            <div class="accessories col-xl-3 col-md-6 col-sm-12">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/accessory/img_8.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px;">Bàn Phím</p>
            </div>
        </div>

        <p><i>Lưu ý: Các sản phẩm đươc trưng bày tại TopCare. Quý khách vui lòng đến và mua trực tiếp với nhiều khuyến mãi hấp dẫn.</i></p>

        <h2 style="text-align: center; font-weight: bold; margin-top: 70px; background-color: #F5F5F7; padding-bottom: 30px; padding-top: 30px;">Quy trình bảo hành TopCare</h2>
        <div class="insurance-process" style="background-color: #F5F5F7;">
            <div class="step">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/warranty/icon_1.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px; text-align: center; width: 185px;">1. Kiểm tra tổng quan trước sửa chữa</p>
            </div>
            <div class="step">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/warranty/icon_2.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px; text-align: center; width: 185px;">2. Đặt linh kiện</p>
            </div>
            <div class="step">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/warranty/icon_3.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px; text-align: center; width: 185px;">3. Sửa chữa | Thay thế</p>
            </div>
            <div class="step">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/warranty/icon_4.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px; text-align: center; width: 185px;">4. Kiểm tra tổng quan sau sửa chữa</p>
            </div>
            <div class="step">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/warranty/icon_5.png">
                <p style="font-weight: normal; font-size: 20px; margin-top: 30px; text-align: center; width: 185px;">5. Trả sản phẩm</p>
            </div>
        </div>

        <div class="introduction" id="intro">
            <h2 style="font-weight: bold; text-align: center; margin: 50px 0 50px 0">TopCare Nguyễn Văn Luông - Đẳng cấp khác biệt</h2>
            <div class="text-center">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/logo.png">
                <p class="text-center">Tại TopCare Nguyễn Văn Luông, khách hàng yêu mến hệ sinh thái Apple sẽ trải nghiệm đầy đủ và đa dạng nhất các dịch vụ bảo hành chính hãng Apple từ iPhone, iPad đến những chiếc tai nghe AirPods... trong một không gian đẳng cấp và hiện đại.</p>
            </div>
            <div class="imgs-show">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/img_11-min.JPG">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/img_1-min.JPG">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/img_2-min.JPG">
                <!-- <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/img_3-min.JPG">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/img_4-min.JPG">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/img_5-min.JPG">
                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/img_6-min.JPG"> -->
            </div>
            <div class="info-store">
                <p class="title">TopCare Nguyễn Văn Luông</p>
                <div class="locate-store">
                    <img width="24" height="24" src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/icon_1.png">
                    <div>
                        <p>Số 249 Nguyễn Văn Luông, Phường 11, Quận 6, Thành Phố Hồ Chí Minh. <a href="https://goo.gl/maps/zuFh7ESP6vGtAm6RA">Xem chỉ đường</a></p>
                    </div>
                </div>
                <div class="worktime-store">
                    <img width="24" height="24" src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/icon_2.png">
                    <ul>
                        <li>T2 - T7: 8h - 20h (không nghỉ trưa)</li>
                        <li>Chủ Nhật: 8h - 17h (không nghỉ trưa)</li>
                    </ul>
                </div>
                <div class="phonenum-store">
                    <img width="24" height="24"g src="//cdn.tgdd.vn/mwgcart/topzone/images/topcare/introduce/icon_3.png">
                    <a href="tel:18001783">1800 1783</a>
                </div>
            </div>
        </div>
        <div class="news row" style="text-align: center; margin-top: 30px; font-weight: bold;">
            <h2 style="text-align: center; font-weight: bold; margin-bottom: 40px;">Tin tức Tekzone</h2>
            
            <div class="1st-news col-xl-4 col-md-6 col-sm-12">
                <a style="text-decoration: none;" href="https://www.topzone.vn/tekzone/cach-hien-thanh-cong-cu-tren-macbook-1458753">
                    <img src="https://cdn.tgdd.vn/Files/2022/08/23/1458753/thietkechuacoten-318x154.jpg">
                    <p style="font-weight: bold; font-size: 17px; color: #000;">Cách hiện thanh công cụ trên MacBook vô cùng đơn giản, giúp bạn có trải nghiệm tốt hơn khi sử dụng</p>
                    <p class="description">Thanh công cụ được coi là một trợ thủ đắc lực trên MacBook mà chắc hẳn ai cũng phải sử dụng đến. Tuy nhiên một số trường hợp MacBook không hiện thanh công cụ trên màn hình. Và đây là giải pháp dành cho bạn, sau đây mình sẽ hướng dẫn các bạn cách hiện thanh công cụ trên MacBook.</p>
                </a>
            </div>
            <div class="2nd-news col-xl-4 col-md-6 col-sm-12">
                <a style="text-decoration: none;" href="https://www.topzone.vn/tekzone/tin-hot-han-hoan-chao-don-cua-hang-topcare-dau-tien-sap-khai-truong-1460154">
                    <img src="https://cdn.tgdd.vn/Files/2022/08/26/1460154/khaitruongtopcare-5-318x154.jpg">
                    <p style="font-weight: bold; font-size: 17px; color: #000;">Tin HOT: Hân hoan chào đón cửa hàng TopCare đầu tiên sắp khai trương vào Đại lễ 2/9 này, hãy đến trải nghiệm ngay</p>
                    <p class="description">Có lẽ bạn chưa biết để chào mừng Lễ Quốc Khánh, cửa hàng TopCare đầu tiên sẽ chính thức được khai trương đấy. Quá HOT đúng không nào? Hãy xem ngay thông tin chi tiết ở phía bên dưới và đừng quên tranh thủ ghé đến cửa hàng để trải nghiệm các dịch vụ cực xịn sò bạn nhé!</p>
                </a>
            </div>
            <div class="3rd-news col-xl-4 col-md-6 col-sm-12">
                <a style="text-decoration: none;" href="https://www.topzone.vn/tekzone/cach-hien-thanh-cong-cu-tren-macbook-1458753">
                    <img src="https://cdn.tgdd.vn/Files/2022/08/23/1458744/thumb-318x154.jpg">
                    <p style="font-weight: bold; font-size: 17px; color: #000;">Bỏ túi ngay 4 cách ẩn ứng dụng trên iPhone 11 mà các bạn phải biết, dễ làm và tiện lợi vô cùng nha</p>
                    <p class="description"> Bạn là người với nhiều công việc khác nhau và cần tải nhiều ứng dụng trên điện thoại? Nhưng làm thế nào để ẩn bớt các ứng dụng trên iPhone khi không cần sử dụng đến? Cập nhật ngay những cách ẩn ứng dụng trên iPhone 11 đơn giản, hiệu quả nhất.</p>
                </a>
            </div>
        </div>
    </div>
    <?php
            require_once("./chatbox.html");
    ?>
</body>
</html>