<link href="hello.js" rel="stylesheet" />
    
<?php 
        /* process add entry if any */
        if (isset($_POST['fix_spham'])) {
            //make connection and select DB
            require("./connection.php");

            
           
            $ma_cho= $_POST['ma_cho'];
            $ten_cho = $_POST['ten_cho'];
            $ten_khac = $_POST['ten_khac'];
            $nguon_goc = $_POST['nguon_goc'];
            $phan_loai = $_POST['phan_loai'];
            $tuoi_tho = $_POST['tuoi_tho'];
            $gia_ban=$_POST['gia_ban'];
                
            $query = "update  giong_cho  set ten_cho='$ten_cho', ten_khac='$ten_khac',nguon_goc='$nguon_goc' ,phan_loai='$phan_loai' , tuoi_tho='$tuoi_tho' ,gia_ban='$gia_ban' where ma_cho=$ma_cho";
            
            $q_result = mysqli_query($conn,$query) 
                or die("Couldn't add new entry: " . mysqli_error($conn));
}
    ?>

<div  class='fix-form'>
                  <div class='fix-form-content'>
                    <h2>Vui lòng Nhập sản Phẩm Cần sửa<span id='add-close' onclick='formfixclose()'>X Đóng</span></h2>
                    <form  action='' method='post'>
                        <p>Vui lòng Nhập đầy đủ Thông tin</p>
                        <input id="ma" name='ma_cho' value=''>
                        <input  id="ten" name='ten_cho'  placeholder='Nhập tên Sản Phẩm ' value=''>
                        <input id="ten_khac" name= "ten_khac"placeholder="Vui lòng nhập Giá ">
                        <input  id="nguon_goc" name= 'nguon_goc' placeholder='Vui lòng nhập Giá' value=''>
                        <input  id="phan_loai" name='phan_loai' placeholder='Vui lòng nhập quà ' value='' >
                        <input id="tuoi_tho" name='tuoi_tho' value='' >
                        <input id="gia_ban" name='gia_ban' value='' >
                        <input type='submit' name='fix_spham' value='Update cho' >
                      </form>
                  </div>
                </div> 


                

   <script src="javascript/style_javascript.js"></script>