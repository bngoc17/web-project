<?php
 
    if (isset($_POST["xoathongtin"])){
        require("test.php");
        
        $ten_hang = $_POST["xoathongtin"];
        echo "<h1>". $ten_hang . "</h1> <h2> hello </h2>" ;

        $query = "DELETE FROM products WHERE name = '$ten_hang'";
 //       $s_query = "SELECT $ten_hang FROM giong_cho WHERE ma_cho=" .$ten_hang;
        $sq_result = mysqli_query($conn,$query) or die("Retrieving data failed: " . mysqli_error($conn));
}
    require ("AdminUI.php");

?>




