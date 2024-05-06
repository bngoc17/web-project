<?php
include("test.php");
?>

<!-- <div> <form action='Sua.php' method = 'POST'><input type='button' name='edit_spham' value='Sửa' onclick="formfix( $row[price],'$row[image_url]','$row[name]')"></form></div> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\css\login1.css">
    <link rel="stylesheet" href="..\css\searchlist.css">
    <script src="hello.js"></script>
</head>

<body>
    <form action='AdminUI.php'><button class='button-user'>Trang Chủ</button></form> <br> <br>
    <span class="searchbox">
        <?php
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                echo "<div class='searchlist' > 
                        <img width='200' height='200' src='$row[image_url]'><br>
                        <span class='searchname'> $row[ID] </span><br>
                        <span class='searchname'> $row[name] </span><br>
                        <span class='searchname'> $row[price] </span><br>
                        <span class='searchname'> 
                            <div class = 'searchdropdown'>description 
                                <div class = 'searchdropdown-content'>
                                    $row[description]
                                </div>
                            </div>
                        </span> <br>
                            <form action='Xoa.php' method = 'POST'>
                                <button type='submit' name='xoathongtin' value='$row[name]'>XÓA SẢN PHẨM</button>
                            </form>
                            <form action='change.php' method = 'POST'>
                                <button type='submit' name='thaydoithongtin' value='$row[name]'>SỬA SẢN PHẨM</button>
                            </form>
                    </div>
                ";
        } else {
            echo "KHONG CO SAN PHAM";
            require("AdminUI.php");
        }
        ?>
    </span>
</body>
</html>
<!-- title-search-paging.php -- >
<form action="title-search-paging.php" method="GET">
<input type="text" size="40" name="search_kw"
value=" <? //empty($_REQUEST['search_kw']) ||print $_REQUEST['search_kw'] ;?>"/>
<input type="submit" value="Search title">
</form><hr>
<h3>Search result</h3>
<?php
//if (isset($_REQUEST['search_kw'])) {
//include 'page.php';
//$paging = search($_REQUEST['search_kw']);

//echo "<br><hr>";
//links to next/prior page
//page_nav_links($paging, $_REQUEST['search_kw']);
//}
?>
</body>

</html>