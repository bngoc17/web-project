<script src="hello.js"></script>
<?php
include ("test.php");
    $luu = "SELECT * from products"; 
    $result = mysqli_query($conn, $luu);
    $so_o = $result->num_rows; // so luong hang trong bang 
    $i = 1;
            if ($so_o > 0) {
                while ($row = $result->fetch_assoc()) echo
                
                "<div class='searchlist' > 
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
                    <div>

                       
                        <div><form action='Xoa.php' method = 'POST'><button type='submit' name='xoathongtin' value='$row[name]'>XÓA SẢN PHẨM</button></form></div>
                    </div>
                        
                </div>
                    ";
                $i++;
            } 
                else { echo "KHONG CO SAN PHAM";
                require("AdminUI.php");
                
                }

?>

<!-- <div> <form action='Sua.php' method = 'POST'><input type='button' name='edit_spham' value='Sửa' onclick="formfix( $row[price],'$row[image_url]','$row[name]')"></form></div> -->
