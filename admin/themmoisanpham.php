<!DOCTYPE html>
<?php
    if(isset($_POST['add'])){
        $anhSP = $_FILES['file']['name'];
        $linkup="../img/";
        move_uploaded_file($_FILES['file']['tmp_name'], $linkup.$anhSP);
        $tenSP=$_POST['tenSP'];
        $giaSP=$_POST['giaSP'];
        $soLuongSP=$_POST['soLuongSP'];
        $phanLoaiSP=$_POST['phanLoaiSP'];
        $moTaSP=$_POST['moTaSP'];
        
        require 'database.php';
        $sql= "INSERT INTO sanpham VALUE ('','".$tenSP."','".$giaSP."','".$soLuongSP."','".$phanLoaiSP."','".$anhSP."', '".$moTaSP."')";
        $result=$db ->exec($sql);
        header('location: danhsachsanpham.php');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="iframe.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3>Thêm mới sản phẩm</h3>
        <form action="" class="form-themmoi" method="post" enctype="multipart/form-data">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="tenSP" id="" required><br>
        <label for="">Giá</label>
        <input type="number" name="giaSP" required><br>
        <label for="">Số lượng</label>
        <input type="number" name="soLuongSP" id="" required><br>
        <label for="">Phân loại</label>
        <select name="phanLoaiSP" id="" >
        <option selected value="occho">Óc chó</option>
        <option value="macca">Macca</option>
        </select><br>
        <label for="">Ảnh sản phẩm</label>
        <input type="file" name="file" required/><br>
        <label for="">Mô tả sản phẩm</label><br>
        <textarea name="moTaSP" id="" cols="30" rows="5"></textarea><br>
        <button name="add" type="submit">Lưu thông tin</button>
        
        </form>            
</body>
</html>