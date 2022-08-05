<!DOCTYPE html>
<?php
    require 'database.php';
    if(isset($_GET['id'])){
        $maHD=$_GET['id'];

        $sql="select * from hoadonchitiet where maHD='".$maHD."'";
        $result=$db->query($sql);
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
                <h3>Chi tiết đơn hàng</h3>
                <table border="1">
                    <tr>
                        <th>Mã HD</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                    </tr>
                    <?php
                        $stt=0;
                        while($rs=$result->fetch()){
                            $stt++;
                        $sanpham_ID= $rs['sanpham_ID'];
                        $sql1="select * from sanpham where sanpham_ID='".$sanpham_ID."'";
                        $result1=$db->query($sql1);
                        $rs1=$result1->fetch()
                    ?>
                    <tr>
                        <td><form action="" method="post"><?php echo $rs['maHD'];?></form></td>
                        <td><?php echo $rs1['tenSP'];?></td>
                        <td ><?php echo $rs['soLuong'];?></td>
                        <td><?php echo number_format($rs['donGia']);?>đ</td>
                    </tr>
                    <?php } ?>
                </table>
                <a href="danhsachdonhang.php"><button>Quay Lại Hóa Đơn</button></a>
                
</body>
</html>