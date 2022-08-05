<!DOCTYPE html>
<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        require 'database.php';
        $sql1="SELECT * FROM sanpham where sanpham_ID='".$id."'";
        $result1=$db->query($sql1);
        $rs=$result1->fetch();
    }

    if(isset($_POST['edit'])){
        $sanpham_ID=$_POST['id'];
        $tenSP=$_POST['tenSP'];
        $giaSP=$_POST['giaSP'];
        $soLuongSP=$_POST['soLuongSP'];
        $maPhanLoai=$_POST['maPhanLoai'];
        $anhSP=$_FILES['anhSP']['name'];
        if($_FILES['anhSP']['name']!=''){
        $linkup="../img/";
        move_uploaded_file($_FILES['anhSP']['tmp_name'], $linkup.$anhSP);
        }else{
            $anhSP=$_POST['img_old'];
        }
        $moTaSP=$_POST['moTaSP'];
        require 'database.php';
        $sql= "UPDATE sanpham SET tenSP='".$tenSP."',giaSP='".$giaSP."',soLuongSP='".$soLuongSP."',maPhanLoai='".$maPhanLoai."',anhSP='".$anhSP."', moTaSP='".$moTaSP."' WHERE sanpham_ID='$sanpham_ID'";
        $result=$db ->exec($sql);

        header("location: danhsachsanpham.php");
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
    <?php
    ?>
    
                <h3>Thêm mới sản phẩm</h3>
                <form action="" class="form-themmoi" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="" value="<?php echo $rs['sanpham_ID']?>">
                    <input type="hidden" name="img_old" value="<?php echo $rs['anhSP'];?>">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="tenSP" id="" value="<?php echo $rs['tenSP'];?>"><br>
                    <label for="">Giá</label>
                    <input type="number" name="giaSP" value="<?php echo $rs['giaSP'];?>"><br>
                    <label for="">Số lượng</label>
                    <input type="number" name="soLuongSP" id="" value="<?php echo $rs['soLuongSP'];?>"><br>
                    <label for="">Phân Loại</label>
                    <select name="maPhanLoai" id="">
                        <?php echo $rs['maPhanLoai']; ?>
                        <?php if($rs['maPhanLoai']=='occho'){?>
                        <option value="occho" selected>Óc chó</option>
                        <option value="macca">Macca</option>
                    <?php } else {?>
                        <option value="occho" >Óc chó</option>
                        <option value="macca" selected>Macca</option>
                        <?php } ?>
                    </select><br>
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="anhSP" ><br>
                    <label for=""></label>
                    <img width="300px" style="margin: 0 auto;" src="../img/<?php echo $rs['anhSP']; ?>" alt=""><br>
                    <label for="">Mô tả</label><br>
                    <textarea name="moTaSP" id="" cols="30" rows="5" value=""><?php echo $rs['moTaSP']; ?></textarea><br>
                    <button name="edit" type="submit">Lưu thông tin</button>
                </form>  
           
</body>
</html>