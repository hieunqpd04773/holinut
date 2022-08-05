
<!DOCTYPE html>
<?php
    if(isset($_GET['maHD'])){
        $id=$_GET['maHD'];
        require 'database.php';

        $sql1="SELECT * FROM hoadon where maHD='".$id."'";
        $result1=$db->query($sql1);
        $rs=$result1->fetch();
    }
    if(isset($_POST['update'])){
        $maHD=$_POST['maHD'];
        $tinhTrang= $_POST['tinhTrang'];
        require 'database.php';

        $sql="UPDATE hoadon set  tinhTrang='".$tinhTrang."' WHERE maHD='$maHD'";
        $result=$db ->exec($sql);
        
        header("location: danhsachdonhang.php");
    }
    if(isset($_POST['xoadonhang'])){
        $maHD=$_POST['maHD'];

        require 'database.php';
        $sql= "delete from hoadon where maHD='".$maHD."'";
        $result=$db-> query($sql);

        header("location: danhsachdonhang.php");
        $result->close();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iframe.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h3>Cập nhật Đơn hàng</h3>
        <form action="" class="form-themmoi" method="post" enctype="multipart/form-data">
          
          <label for="">Mã Hóa Đơn:</label>
          <input type="number" name="maHD" value="<?php echo $rs['maHD'] ?>"><br>
          <label for="">Mã Khách Hàng:</label>
          <input type="text" disabled value="<?php echo $rs['maKH']?>"><br>
          <label for="">Tổng tiền:</label>
          <input type="text" disabled value="<?php echo number_format($rs['tongTien']);?>"><br>
          <label for="">Ghi chú</label>
          <textarea id="" disabled cols="30" rows="5"><?php echo $rs['ghiChu']?></textarea><br>
          <label for="">Tình trạng</label>
          <select name="tinhTrang" id="">
            <?php echo $rs['trinhTrang']; ?>
                        <?php if($rs['tinhTrang']=="Đang giao hàng"){?>
                            <option value="Đang giao hàng" selected>Đang giao hàng</option>
                            <option value="Đã giao hàng">Đã giao hàng</option>
                            <option value="Đã hủy đơn">Đã hủy đơn</option>
                            <option value="Trả hàng">Trả hàng</option>
                        <?php } else if($rs['tinhTrang']=='Đã giao hàng'){?>
                            <option value="Đang giao hàng">Đang giao hàng</option>
                            <option selected value="Đã giao hàng">Đã giao hàng</option>
                            <option value="Đã hủy đơn">Đã hủy đơn</option>
                            <option value="Trả hàng">Trả hàng</option>
                        <?php } else if($rs['tinhTrang']=='Đã hủy đơn'){?>
                            <option value="Đang giao hàng">Đang giao hàng</option>
                            <option value="Đã giao hàng">Đã giao hàng</option>
                            <option selected value="Đã hủy đơn">Đã hủy đơn</option>
                            <option value="Trả hàng">Trả hàng</option>
                        <?php } else{?>
                            <option value="Đang giao hàng">Đang giao hàng</option>
                            <option value="Đã giao hàng">Đã giao hàng</option>
                            <option value="Đã hủy đơn">Đã hủy đơn</option>
                            <option selected value="Trả hàng">Trả hàng</option>
                        <?php }?>
            </select><br>
            <button type="submit" name="update">Cập nhật</button>
            <button onclick="return confirm('Bạn chắc chắn xóa?')" name="xoadonhang">Xóa đơn hàng</button>
            
      </form>

</body>
</html>