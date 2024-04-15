<?php
session_start();
include_once "test.php";
if (isset($_SESSION["usr-signup"])) $usr = $_SESSION["usr-signup"];
if (isset($_SESSION["usr-login"])) $usr = $_SESSION["usr-login"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home2</title>
    <link rel="stylesheet" href="..\css\box.css">
    <link rel="stylesheet" id="font" href="..\css\font.css">
    <link rel="stylesheet" id="navbar" href="..\css\navbar.css">
    <link rel="stylesheet" href="..\css\login.css">
    <script src="..\js\popup.js"></script>
    <script src="..\js\MODE_login.js"></script>
</head>

<body style="z-index: -1;">
    <div>
        <img src="https://cdn-icons-png.flaticon.com/128/3917/3917559.png" alt="" style="width: 35px; height: 35px; position: absolute;">
        <span class="login-button" onclick="login()">
            <button class="button-user" style="position: relative;">
                <?php echo "$usr"; ?>
            </button>
        </span>
        <div id="panel" style="height: 250px;">
            <button class="button-user" style="float: right; margin-top:5px" onclick="login()">Đóng x</button>
            <p class="header">Hello <?php echo "$usr" ?></p> <br>
            <form action="logout.php" method="post"><input type="submit" name="logout" value="Đăng Xuất"></form>
        </div>
    </div>
    <div class="navbar">
        <span class="navbar-a">
            <div class="dropdown"> <span class="text">Cửa hàng</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua hàng</p>
                            <span class="header1"><b>Mac</b></span> <br>
                            <span class="header1"><b>iPad</b></span> <br>
                            <span class="header1"><b>iPhone</b></span> <br>
                            <span class="header1"><b>Apple Watch</b></span> <br>
                            <span class="header1"><b>Phụ kiện</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Liên Kết Nhanh</p>
                            <span class="text"><b>Tình Trạng Đơn Hàng</b></span> <br>
                            <span class="text"><b>Apple Trade In</b></span> <br>
                            <span class="text"><b>Tài Chính</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua Tại Cửa Hàng Đặc Biệt</p>
                            <span class="text"><b>Giáo Dục</b></span> <br>
                            <span class="text"><b>Doanh Nghiệp</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">Mac</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá Tất Cả Mac</p>
                            <span class="header1"><b>MacBook Air</b></span> <br>
                            <span class="header1"><b>MacBook Pro</b></span> <br>
                            <span class="header1"><b>iMac</b></span> <br>
                            <span class="header1"><b>Mac mini</b></span> <br>
                            <span class="header1"><b>Mac Studio</b></span> <br>
                            <span class="header1"><b>Mac Pro</b></span> <br>
                            <span class="header1"><b>Mac Hình</b></span> <br> <br>
                            <span class="text">So Sánh Mac</span> <br>
                            <span class="text">Mac Làm Được Đó</span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua Mac</p>
                            <span class="text"><b>Mua Mac</b></span> <br>
                            <span class="text"><b>Phụ Kiện Mac</b></span> <br>
                            <span class="text"><b>Apple Trade In</b></span> <br>
                            <span class="text"><b>Tài Chính</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Tìm Hiểu Thêm Về Mac</p>
                            <span class="text"><b>Hỗ Trợ Mac</b></span> <br>
                            <span class="text"><b>Apple Care+ Cho Mac</b></span> <br>
                            <span class="text"><b>MacOS Sonoma</b></span> <br>
                            <span class="text"><b>Các Ứng Dụng Của Apple</b></span> <br>
                            <span class="text"><b>Tính Liên Tục</b></span> <br>
                            <span class="text"><b>IClound+</b></span> <br>
                            <span class="text"><b>Mac Cho Doanh Nghiệp</b></span> <br>
                            <span class="text"><b>Giáo Dục</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">iPad</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá Tất Cả iPad</p>
                            <span class="header1"><b>iPad Pro</b></span> <br>
                            <span class="header1"><b>iPad Air</b></span> <br>
                            <span class="header1"><b>iPad</b></span> <br>
                            <span class="header1"><b>iPad mini</b></span> <br>
                            <span class="header1"><b>Apple Pencil</b></span> <br>
                            <span class="header1"><b>Bàn Phím</b></span> <br>
                            <span class="header1"><b>Mac Hình</b></span> <br> <br>
                            <span class="text">So Sánh iPad</span> <br>
                            <span class="text">Tại Sao Nên Dùng iPad</span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua Mac</p>
                            <span class="text"><b>Mua iPad</b></span> <br>
                            <span class="text"><b>Phụ Kiện iPad</b></span> <br>
                            <span class="text"><b>Apple Trade In</b></span> <br>
                            <span class="text"><b>Tài Chính</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Tìm Hiểu Thêm Về Mac</p>
                            <span class="text"><b>Hỗ Trợ iPad</b></span> <br>
                            <span class="text"><b>Apple Care+ Cho iPad</b></span> <br>
                            <span class="text"><b>iPadOS 17</b></span> <br>
                            <span class="text"><b>Các Ứng Dụng Của Apple</b></span> <br>
                            <span class="text"><b>IClound+</b></span> <br>
                            <span class="text"><b>Giáo Dục</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">iPhone</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá Tất Cả iPhone</p>
                            <span class="header1"><b>iPhone Pro</b></span> <br>
                            <span class="header1"><b>iPhone 15</b></span> <br>
                            <span class="header1"><b>iPhone 14</b></span> <br>
                            <span class="header1"><b>iPhone 13</b></span> <br>
                            <span class="header1"><b>iPhone SE</b></span> <br>
                            <span class="text">So Sánh iPhone</span> <br>
                            <span class="text">Chuyển Từ Android</span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua iPhone</p>
                            <span class="text"><b>Mua iPhone</b></span> <br>
                            <span class="text"><b>Phụ Kiện iPhone</b></span> <br>
                            <span class="text"><b>Apple Trade In</b></span> <br>
                            <span class="text"><b>Tài Chính</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Tìm Hiểu Thêm Về iPhone</p>
                            <span class="text"><b>Hỗ Trợ iPhone</b></span> <br>
                            <span class="text"><b>Apple Care+ Cho iPhone</b></span> <br>
                            <span class="text"><b>iOS 17</b></span> <br>
                            <span class="text"><b>Các Ứng Dụng Của Apple</b></span> <br>
                            <span class="text"><b>Quyền Riêng Tư Trên iPhone</b></span> <br>
                            <span class="text"><b>IClound+</b></span> <br>
                            <span class="text"><b>Ví, Pay</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">Watch</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá Tất Cả Watch</p>
                            <span class="header1"><b>Apple Watch Series 9</b></span> <br>
                            <span class="header1"><b>Apple Watch Ultra 2</b></span> <br>
                            <span class="header1"><b>Apple Watch SE</b></span> <br>
                            <span class="header1"><b>iApple Watch Nike</b></span> <br>
                            <span class="text">So Sánh Watch</span> <br>
                            <span class="text">Tại Sao Nên Dùng Apple Watch</span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua Watch</p>
                            <span class="text"><b>Mua Apple Watch</b></span> <br>
                            <span class="text"><b>Apple Watch Studio</b></span> <br>
                            <span class="text"><b>Dây Đeo Apple Watch</b></span> <br>
                            <span class="text"><b>Phụ Kiện Apple Watch</b></span> <br>
                            <span class="text"><b>Apple Trade In</b></span> <br>
                            <span class="text"><b>Tài Chính</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Tìm Hiểu Thêm Về Watch</p>
                            <span class="text"><b>Hỗ Trợ Watch</b></span> <br>
                            <span class="text"><b>Apple Care+</b></span> <br>
                            <span class="text"><b>2atchOS 10</b></span> <br>
                            <span class="text"><b>Các Ứng Dụng Của Apple</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">AirPods</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá AirPods</p>
                            <span class="header1"><b>Khám Phá Tất Cả AirPods</b></span> <br>
                            <span class="header1"><b>AirPods Pro (thế hệ thứ 2)</b></span> <br>
                            <span class="header1"><b>AirPods (thế hệ thứ 2)</b></span> <br>
                            <span class="header1"><b>AirPods (thế hệ thứ 3)</b></span> <br>
                            <span class="header1"><b>AirPods Max</b></span> <br>
                            <span class="text">So Sánh AirPods</span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua AirPods</p>
                            <span class="text"><b>Mua AirPods</b></span> <br>
                            <span class="text"><b>Phụ Kiện AirPods</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Tìm Hiểu Thêm Về AirPods</p>
                            <span class="text"><b>Hỗ Trợ AirPods</b></span> <br>
                            <span class="text"><b>Apple Care+ Cho Tai Nghe</b></span> <br>
                            <span class="text"><b>Apple Music</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">TV & Nhà</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá TV & Nhà</p>
                            <span class="header1"><b>Khám Phá TV & Nhà</b></span> <br>
                            <span class="header1"><b>Apple TV 4K</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua TV & Nhà</p>
                            <span class="text"><b>Mua Apple TV 4K</b></span> <br>
                            <span class="text"><b>Mua Phụ Kiện TV & Nhà</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Tìm Hiểu Thêm Về TV & Nhà</p>
                            <span class="text"><b>Hỗ Trợ Apple TV</b></span> <br>
                            <span class="text"><b>Apple Care+</b></span> <br>
                            <span class="text"><b>Các Ứng Dụng Apple TV</b></span> <br>
                            <span class="text"><b>Apple TV+</b></span> <br>
                            <span class="text"><b>Apple Music</b></span> <br>
                            <span class="text"><b>AirPlay</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">Giải Trí</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá Giải Trí</p>
                            <span class="header1"><b>Khám Phá Giải Trí</b></span> <br>
                            <span class="header1"><b>Apple One</b></span> <br>
                            <span class="header1"><b>Apple TV+</b></span> <br>
                            <span class="header1"><b>Apple Music</b></span> <br>
                            <span class="header1"><b>Apple Arcade</b></span> <br>
                            <span class="header1"><b>Apple Podcasts</b></span> <br>
                            <span class="header1"><b>Apple Books</b></span> <br>
                            <span class="header1"><b>App Store </b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Hỗ trợ</p>
                            <span class="text"><b>Hỗ trợ Apple TV+</b></span> <br>
                            <span class="text"><b>Hỗ trợ Apple Music</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">Phụ Kiện</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Mua Phụ Kiện</p>
                            <span class="header1"><b>Mua Tất Cả Phụ Kiện</b></span> <br>
                            <span class="header1"><b>Mac</b></span> <br>
                            <span class="header1"><b>iPad</b></span> <br>
                            <span class="header1"><b>iPhone</b></span> <br>
                            <span class="header1"><b>Apple Watch</b></span> <br>
                            <span class="header1"><b>AirPods</b></span> <br>
                            <span class="header1"><b>TV & Nhà</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá Phụ Kiện</p>
                            <span class="text"><b>Sản Xuất Bởi Apple</b></span> <br>
                            <span class="text"><b>Beats by Dr.Dre</b></span> <br>
                            <span class="text"><b>AirTag</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <div class="dropdown"><span class="text">Hỗ Trợ</span>
                <div class="dropdown-content">
                    <div class="hover">
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Khám Phá Hỗ Trợ</p>
                            <span class="header1"><b>iPhone</b></span> <br>
                            <span class="header1"><b>Mac</b></span> <br>
                            <span class="header1"><b>iPad</b></span> <br>
                            <span class="header1"><b>Watch</b></span> <br>
                            <span class="header1"><b>AirPods</b></span> <br>
                            <span class="header1"><b>Music</b></span> <br>
                            <span class="header1"><b>TV</b></span> <br>
                            <span class="text">Khám Phá Hỗ Trợ</span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Trợ Giúp</p>
                            <span class="text"><b>Cộng Đồng</b></span> <br>
                            <span class="text"><b>Kiểm Tra Bảo Hành</b></span> <br>
                            <span class="text"><b>Sửa Chữa</b></span> <br>
                            <span class="text"><b>Liên Hệ Chúng Tôi</b></span> <br>
                        </div>
                        <div class="hoverlist">
                            <p class="text" style="color: gray;">Chủ Đề Hữu Ích</p>
                            <span class="text"><b>Mua Apple Care+</b></span> <br>
                            <span class="text"><b>ID Apple & Mật Khẩu</b></span> <br>
                            <span class="text"><b>Thanh Toán & Gói Đăng Ký</b></span> <br>
                            <span class="text"><b>Tìm</b></span> <br>
                            <span class="text"><b>Trợ Năng</b></span> <br>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="navbar-a">
            <img src="https://cdn-icons-png.flaticon.com/128/3917/3917132.png" width="15px" height="15px" style="border-radius: 0%; padding-right: 10px; padding-top: 2px;" class="searchbar" onclick="search()"></span>
        <span class="navbar-a"><img src="https://cdn-icons-png.flaticon.com/128/3916/3916630.png" width="15px" height="15px" style="border-radius: 0%; padding-left: 10px; padding-top: 2px;"></span>
    </div>
    <span class="navbar-a"><img src="..\KieuHoa & BaoNgoc_transparent.png" alt="" width="200" height="200" style="position: absolute; margin-left: 85%; top: -5px;"></span>
    <span class="login-button"><button id="btn-toggle" class="button-user" style="margin-top:30px" onclick="chuyen();">CHANGE MODE</button></span>
    <div id="searchbar" style="display: none;">
        <form action="search.php" method="get">
            <span><button name="product" type="submit" style="position: relative; left:850px">Tìm theo tên sản phẩm</button></span>
            <span><button name="price" type="submit" style="position: relative; left:850px">Tìm theo giá sản phẩm</button></span>
        </form>
        <form action="search_accessory.php" method="get">
            <span><button name="accessory" type="submit" style="position: relative; left:870px">Tìm theo phụ kiện</button></span>
            <span><button name="price_accessory" type="submit" style="position: relative; left:870px">Tìm theo giá phụ kiện</button></span>
        </form>
    </div>
    <div class="smoltitle">
        <div class="title">
            <span class="hr"><b>Cửa Hàng.</b><b style="color: gray;">Cách tốt nhất để mua sản phẩm bạn thích.</b></span>
        </div>
        <div class="title">
            <img src="https://cdn-icons-png.flaticon.com/128/3917/3917559.png" alt="" width="35" height="35">
            <div class="help">
                <span class="text"> <b>Bạn cần hỗ trợ mua sắm?</b><br>
                    <span style="color: var(--sk-body-link-color, #06c)">Hỏi Chuyên Gia</span>
                </span>
            </div>
        </div>
    </div>
    <div class="list">
        <div class="smol">
            <img width="120" height="100" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-13-mac-nav-202310?wid=400&amp;hei=260&amp;fmt=png-alpha&amp;.v=1696964122666">
            <div class="header2_underline"><b>Mac</b></div>
        </div>
        <div class="smol">
            <img width="120" height="100" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-13-iphone-nav-202309?wid=400&amp;hei=260&amp;fmt=png-alpha&amp;.v=1692971740452">
            <div class="header2_underline"><b>iPhone</b></div>
        </div>
        <div class="smol">
            <img width="120" height="100" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-13-ipad-nav-202210?wid=400&amp;hei=260&amp;fmt=png-alpha&amp;.v=1664912135437">
            <div class="header2_underline"><b>iPad</b></div>
        </div>
        <div class="smol">
            <img width="120" height="100" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-13-watch-nav-202309_GEO_VN?wid=400&amp;hei=260&amp;fmt=png-alpha&amp;.v=1693703821972">
            <div class="header2_underline"><b>Apple Watch</b></div>
        </div>
        <div class="smol">
            <img width="120" height="100" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-13-airpods-nav-202209?wid=400&amp;hei=260&amp;fmt=png-alpha&amp;.v=1660676485885">
            <div class="header2_underline"><b>AirPods</b></div>
        </div>
        <div class="smol">
            <img width="120" height="100" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-13-airtags-nav-202108?wid=400&amp;hei=260&amp;fmt=png-alpha&amp;.v=1625783380000">
            <div class="header2_underline"><b>AirTag</b></div>
        </div>
        <div class="smol">
            <img width="120" height="100" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-13-appletv-nav-202210?wid=400&amp;hei=260&amp;fmt=png-alpha&amp;.v=1664628458484">
            <div class="header2_underline"><b>Apple TV 4k</b></div>
        </div>
        <div class="smol">
            <img width="120" height="100" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-13-accessories-nav-202403?wid=400&amp;hei=260&amp;fmt=png-alpha&amp;.v=1707850611597">
            <div class="header2_underline"><b>Phụ Kiện</b></div>
        </div>
    </div>
    <p class="smoltitle"> <span class="hr1"> <b>Thế hệ mới nhất.</b> <b style="color: gray;">Xem ngay có gì mới.</b></span></p>
    <div class="list">
        <div class="big">
            <div class="textimg">
                <span class="text">MACBOOK AIR</span> <br>
                <span class="header1"><b>Được thiết kế để đi muôn nơi.</b></span> <br>
                <span class="header2">Từ 24.999.000đ hoặc 1.018.000đ/thángmỗi tháng trong 24 tháng*</span>
            </div>
            <img width="400" height="500" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-40-macbook-air-202402?wid=800&amp;hei=1000&amp;fmt=p-jpg&amp;qlt=95&amp;.v=1707259289595" class="rf-ccard-img-full">
        </div>
        <div class="big">
            <div class="textimg" style="color: white;">
                <span class="text">IPHONE 15 PRO</span> <br>
                <span class="header1"><b>Titan</b></span> <br>
                <span class="header2">Từ 28.999.000đ hoặc 1.181.000đ/thángmỗi tháng trong 24 tháng*</span>
            </div>
            <img width="400" height="500" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-40-iphone-15-pro-202309?wid=800&amp;hei=1000&amp;fmt=p-jpg&amp;qlt=95&amp;.v=1692910040844" class="rf-ccard-img-full">
        </div>
        <div class="big">
            <div class="textimg" style="color: white;">
                <span class="text">APPLE WATCH SERIES 9</span> <br>
                <span class="header1"><b>Thông minh hơn. Sáng hơn. Quyền năng hơn.</b></span> <br>
                <span class="header2">Từ 10.499.000đ hoặc 427.000đ/thángmỗi tháng trong 24 tháng*</span>
            </div>
            <img width="400" height="500" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-40-watch-s9-202309_GEO_VN?wid=800&amp;hei=1000&amp;fmt=jpeg&amp;qlt=90&amp;.v=1693501347518" class="rf-ccard-img-full">
        </div>
    </div>
    <p class="smoltitle">
        <span class="hr1"><b>Hỗ trợ tại đây.</b><b style="color: gray;">Ngay khi bạn muốn, mọi việc bạn cần.</b></span>
    </p>
    <div class="smoltitle">
        <div class="support">
            <div class="textimg">
                <span class="text">CHUYÊN GIA APPLE</span> <br>
                <span class="header1"> <b>Mua hàng với tư vấn trực tiếp từ Chuyên Gia trực tuyến.</b></span>
            </div>
            <img width="480" height="500" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-50-specialist-help-202309?wid=960&amp;hei=1000&amp;fmt=p-jpg&amp;qlt=95&amp;.v=1701194078821" class="rf-ccard-img-full">
        </div>
        <div class="support">
            <div class="textimg">
                <span class="text"></span> <br>
                <span class="header1"> <b>Dịch vụ và hỗ trợ. Chúng tôi luôn sẵn sàng hỗ trợ.</b></span>
            </div>
            <img width="480" height="500" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-50-genius-202108?wid=960&amp;hei=1000&amp;fmt=p-jpg&amp;qlt=95&amp;.v=1626375544000" class="rf-ccard-img-full">
        </div>
    </div>
    <p class="smoltitle"> <span class="hr1"> <b>Apple Store tạo nên mọi khác biệt. <span style="color: gray;">Thêm nhiều lý do để mua sắm cùng chúng tôi.</span></b> </span> </p>
    <div class="list">
        <div class="benefit">
            <img src="https://cdn-icons-png.flaticon.com/128/3916/3916639.png" alt="" width="30" height="30" style="border-radius: 0%"> <br> <span class="header1"><b>Trải nghiệm<span style="color: var(--sk-body-link-color,#06c);">mua sắm được cá nhân hóa</span> với <span style="color: var(--sk-body-link-color,#06c); ;">ứng dụng Apple Store.</b></span> </span>
        </div>
        <div class="benefit">
            <img src="https://cdn-icons-png.flaticon.com/128/7653/7653265.png" alt="" width="30" height="30" style="border-radius: 0%"> <br> <span class="header1"><b>Thanh toán <span style="color: green;">lãi suất thấp,</span> thời hạn đến 6 tháng. Tuỳ bạn chọn* </b></span>
        </div>
        <div class="benefit">
            <img src="https://cdn-icons-png.flaticon.com/128/3917/3917293.png" alt="" width="30" height="30" style="border-radius: 0%"> <br> <span class="header1"><b><span style="color: var(--sk-body-link-color,#06c);">Đổi thiết bị cũ đủ điều kiện,</span> Đổi thiết bị cũ đủ điều kiện, nhận điểm tín dụng để mua thiết bị mới.<sup class="text">1</sup></p> </b></span>
        </div>
        <div class="benefit">
            <img src="https://cdn-icons-png.flaticon.com/128/3917/3917436.png" alt="" width="30" height="30" style="border-radius: 0%"> <br> <span class="header1"><b>Giao hàng miễn phí </b> </span>
        </div>
    </div>
    <p class="smoltitle"> <span class="hr1"> <b>Phụ kiện. <span style="color: gray;">Tạo nét riêng cho quà mà họ thích.</span></b></span></p>
    <div class="list">
        <div class="big">
            <span class="header1img"> <b>Đón máy mới về.</b> <br>
                <span class="price">Khám phá các màu mới tinh cho phụ kiện yêu thích của bạn.</span>
            </span>
            <img width="400" height="500" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-40-accessories-202403?wid=800&amp;hei=1000&amp;fmt=p-jpg&amp;qlt=95&amp;.v=1707850589330" class="rf-ccard-img-full">
        </div>
        <div class="biglist">
            <img width="200" height="200" alt="Ốp Lưng Silicon MagSafe Màu&nbsp;Xanh Dương Nhạt cho iPhone 15, được khắc logo Apple ở giữa, gắn với bề mặt iPhone 15 Màu Xanh Dương, nhìn thấy được qua phần lỗ khoét camera." src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MWND3?wid=400&amp;hei=400&amp;fmt=jpeg&amp;qlt=90&amp;.v=1708125477348" style="margin-top: 30%; margin-bottom: 30%; margin-left: 17%;"><br>
            <span class="tag">Mới</span><br>
            <span class="name"><b>Ốp Lưng Silicon MagSafe cho iPhone 15 - Màu Xanh Dương</b></span> <br>
            <span class="price">1.429.000đ</span>
        </div>
        <div class="biglist">
            <img width="200" height="200" alt="Hình ảnh mặt trước của Ví Vải Tinh Dệt MagSafe màu Xanh Thái Bình Dương cho iPhone, khe nhét thẻ ở phía trên, logo Apple được khắc ở trung tâm." src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MT263?wid=400&amp;hei=400&amp;fmt=jpeg&amp;qlt=90&amp;.v=1699475074951" style="margin-top: 30%; margin-bottom: 30%; margin-left: 17%;"><br>
            <span class="tag"> </span><br>
            <span class="name"> <b>Ví Vải Tinh Dệt MagSafe cho iPhone - Xanh Thái Bình Dương </b><br>
                <span class="price">1.699.000đ</span>
            </span>
        </div>
    </div>
    <p class="smoltitle"> <span class="hr1"> <b>To rõ, trong trẻo. <span style="color: grey;">Lựa chọn hoàn hảo cho âm thanh tròn đầy, chất lượng cao.</span></b> </span> </p>
    <div class="list">
        <div class="big">
            <span class="header1img"> <b>Tặng 6 tháng sử dụng Apple Music miễn phí.</b><br>
                <span class="price">Đi kèm với AirPods hoặc một số sản phẩm Beats.⁺</span>
            </span>
            <img width="400" height="500" alt="" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/store-card-40-applemusic-202110?wid=800&amp;hei=1000&amp;fmt=p-jpg&amp;qlt=95&amp;.v=1633644705000" class="rf-ccard-img-full">
        </div>
        <div class="biglist">
            <img width="200" height="200" alt="Bên Trong AirPods Pro Và Hộp Sạc MagSafe, Tai Nghe Bên Phải Và Bên Trái Có Micrô Khử Tiếng Ồn Ở Phần Trên Mỗi Tai Nghe, Đầu Silicon Ở Đầu Mỗi Tai Nghe. Phần Trên Của Hộp Sạc MagSafe, Được Gắn Kết Bởi Bản Lề Màu Bạc." src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MTJV3?wid=400&amp;hei=400&amp;fmt=jpeg&amp;qlt=90&amp;.v=1694014871985" style="margin-top: 20%; margin-bottom: 30%; margin-left: 17%;"><br>
            <span class="tag">Khắc Miễn Phí </span><br>
            <span class="name"><b>AirPods Pro (thế hệ thứ 2) với Hộp Sạc MagSafe (USB-C)</b> <br> <br>
                <span class="price">6.199.000đ</span>
            </span>
        </div>
        <div class="biglist">
            <img width="200" height="200" alt="Mặt trước của AirPods Max màu Bạc bên cạnh mặt bên của vỏ ngoài tai nghe AirPods Max." src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-silver-202011?wid=400&amp;hei=400&amp;fmt=jpeg&amp;qlt=90&amp;.v=1604021221000" style="margin-top: 30%; margin-bottom: 30%; margin-left: 17%;"><br>
            <span class="tag">Khắc Miễn Phí </span><br>
            <span class="name"> <b>Airpods Max - Bạc</b><br> <br>
                <span class="price">13.199.000đ</span>
            </span>
        </div>
    </div>
</body>

</html>
