<?php
include("test.php");
session_start();
@$search = $_GET["search"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search result</title>
    <link rel="stylesheet" href="..\css\box.css">
    <link rel="stylesheet" href="..\css\font.css">
    <link rel="stylesheet" href="..\css\login.css">
    <link rel="stylesheet" href="..\css\searchlist.css">
    <script src="..\js\login.js"></script>
    <script src="..\js\search.js"></script>
</head>

<body>
    <span class="login-button">
        <?php
        if (isset($_SESSION["usr-signup"]) || isset($_SESSION["usr-login"])) echo "
                <form action='home2.php'><button class='button-user'>Trang Chủ</button></form>
            ";
        else echo "
                <form action='home.php'><button class='button-user'>Trang Chủ</button></form>
            ";
        ?>
    </span>
    <img src="..\KieuHoa & BaoNgoc_transparent.png" alt="" width="200" height="200" style="position: absolute; margin-left: 85%; top: -5px;">
    <p>
    <form action="search.php" method="get">
        <input type="text" size="75%" style="height: 30px; width:75%; float:left; margin-top:35px" placeholder="Search" name="search"><input type="submit" hidden /> <br> <br>
    </form>
    </p>
    <p class="login">Kết quả tìm kiếm cho: <?php echo "$search" ?></p>
    <span class="header1">
        <span class="searchbox">
            <?php
            function hello()
            {if(isset($_POST["submit"])){include("test.php");
            $query = "SELECT * FROM products";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) echo
                "<div class='searchlist'> 
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
                    ";}
            }}
            ?>
        </span>
    </span>
</body>

</html>