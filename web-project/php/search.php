<?php
include("test.php");
session_start();
@$search = $_GET["search"];
@$price_search = $_GET["price_search"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search result</title>
    <link rel="stylesheet" href="..\css\box.css">
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\navbar.css">
    <link rel="stylesheet" href="..\css\login.css">
    <link rel="stylesheet" href="..\css\searchlist.css">
    <script src="..\js\popup.js"></script>
</head>

<body>
    <span class="login-button">
        <?php
        if (isset($_SESSION["usr-signup"]) || isset($_SESSION["usr-login"])) echo "
                <form action='home2.php'><button class='button-user'>Trang Chủ</button></form>
            ";
        else echo "
                <form action='..\home.php'><button class='button-user'>Trang Chủ</button></form>
            ";
        ?>
    </span>
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
            <img src="https://cdn-icons-png.flaticon.com/128/3917/3917132.png" width="15px" height="15px" style="border-radius: 0%; padding-right: 10px; padding-top: 2px;" class="searchbar" onclick="search()">
        </span>
        <span class="navbar-a"><img src="https://cdn-icons-png.flaticon.com/128/3916/3916630.png" width="15px" height="15px" style="border-radius: 0%; padding-left: 10px; padding-top: 2px;"></span>
    </div>
    <span class="navbar-a"><img src="..\KieuHoa & BaoNgoc_transparent.png" alt="" width="200" height="200" style="position: absolute; margin-left: 85%; top: -5px;"></span>
    <div id="searchbar" style="display: none;" style="left:700px;">
        <form action="search.php" method="get">
            <p><button name="product" type="submit" style="position: relative; left:850px">Tìm theo tên sản phẩm</button></p>
            <p><button name="price" type="submit" style="position: relative; left:850px">Tìm theo giá</button></p>
        </form>
    </div>
    <p>
    <form action="search.php" method="get">
        <?php
        if (isset($_GET["product"]) || isset($search))
            echo "<input type='text' size='75%' style='height: 30px; width:75%; float:left; margin-top:35px' placeholder='Search' name='search'><input type='submit' hidden /> <br> <br> <br>";
        if (isset($_GET["price"]) || isset($price_search))
            echo "<input type='text' size='50%' style='height: 30px; width:50%; float:left; margin-top:35px' placeholder='Price Search' name='price_search'><input type='submit' hidden /> <br> <br> <br>";
        ?>
    </form>
    </p>
    <br> <br>
    <?php if (!empty($search)) echo "<p class='login'>Kết quả tìm kiếm cho: $search</p>" ?>
    <?php if (!empty($price_search)) echo "<p class='login'>Sản phẩm có giá dưới: $price_search</p>" ?> <br> <br>
    <span class="header1">
        <span class="searchbox">
            <?php
            $search = trim($search);
            $price_search = trim($price_search);
            $mul_search = str_replace(" ", "%' OR name LIKE '%", $search);
            $query = "SELECT * FROM products WHERE name LIKE '%$mul_search%' ORDER BY name";
            $price_querry = "SELECT * FROM products WHERE price <= '$price_search' ORDER BY price";
            $result = mysqli_query($conn, $query);
            $price_result = mysqli_query($conn, $price_querry);
            if ($result->num_rows > 0 && empty("$price_search")) {
                while ($row = $result->fetch_assoc())
                    echo "<div class='searchlist'> 
                        <img width='200' height='200' src='$row[image_url]'><br>
                        <span class='searchname'> $row[name] </span><br>
                        <span class='searchname'> $row[price] </span><br>
                        <span class='searchname'> 
                            <div class = 'searchdropdown'>description 
                                <div class = 'searchdropdown-content'>
                                    $row[description]
                                </div>
                            </div>
                        </span>
                    </div>
                    ";
            } else if (empty("$price_search")) echo "";
            if ($price_result->num_rows > 0 && $price_search > 0 && !empty("$price_search")) {
                while ($price_row = $price_result->fetch_assoc())
                    echo "<div class='searchlist'> 
                        <img width='200' height='200' src='$price_row[image_url]'><br>
                        <span class='searchname'> $price_row[name] </span><br>
                        <span class='searchname'> $price_row[price] </span><br>
                        <span class='searchname'> 
                            <div class = 'searchdropdown'>description 
                                <div class = 'searchdropdown-content'>
                                    $price_row[description]
                                </div>
                            </div>
                        </span>
                    </div>
                    ";
            } else if (empty("$search")) echo "";
            $mul_search = str_replace(" ", "%' OR name LIKE '%", $search);
            $query = "SELECT * FROM accessories WHERE name LIKE '%$mul_search%' ORDER BY name";
            $price_querry = "SELECT * FROM accessories WHERE price <= '$price_search' ORDER BY price";
            $result = mysqli_query($conn, $query);
            $price_result = mysqli_query($conn, $price_querry);
            if ($result->num_rows > 0 && empty("$price_search")) {
                while ($row = $result->fetch_assoc())
                    echo "<div class='searchlist'> 
                        <img width='200' height='200' src='$row[image_url]'><br>
                        <span class='searchname'> $row[name] </span><br>
                        <span class='searchname'> $row[price] </span><br>
                        <span class='searchname'> 
                            <div class = 'searchdropdown'>description 
                                <div class = 'searchdropdown-content'>
                                    $row[description]
                                </div>
                            </div>
                        </span>
                    </div>
                    ";
            } else if (empty("$price_search")) echo "";
            if ($price_result->num_rows > 0 && $price_search > 0 && !empty("$price_search")) {
                while ($price_row = $price_result->fetch_assoc())
                    echo "<div class='searchlist'> 
                        <img width='200' height='200' src='$price_row[image_url]'><br>
                        <span class='searchname'> $price_row[name] </span><br>
                        <span class='searchname'> $price_row[price] </span><br>
                        <span class='searchname'> 
                            <div class = 'searchdropdown'>description 
                                <div class = 'searchdropdown-content'>
                                    $price_row[description]
                                </div>
                            </div>
                        </span>
                    </div>
                    ";
            } else if (empty("$search")) echo "";
            ?>
        </span>
    </span>
</body>

</html>
