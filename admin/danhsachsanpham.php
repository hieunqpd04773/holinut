<!DOCTYPE html>
<?php
    require 'database.php';
    $sql="select * from sanpham";
    $result=$db->query($sql);
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
    <h3>Danh sách sản phẩm</h3>
                <table border="1">
                    <tr>
                        <th colspan="2">Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Phân loại</th>
                        <th>Hành động</th>
                    </tr>
                    <?php
                        $stt=0;
                        while($rs=$result->fetch()){
                            $stt++;
                    ?>
                    <tr>
                        <td class="table-anh"><img src="../img/<?php echo $rs['anhSP'];?>" alt=""></td>
                        <td class=""><a href=""><?php echo $rs['tenSP'];?></a></td>
                        <td class="table-gia"><?php echo number_format($rs['giaSP']);?>đ</td>
                        <td class="table-soluong"><?php echo $rs['soLuongSP'];?></td>
                        <td class=""><?php if($rs['maPhanLoai']=='occho'){
                            echo "Óc chó";}
                        else{
                            echo "Macca";
                        }
                            ;?></td>
                        <td class="table-xoa">
                            <a href="suasanpham.php?id=<?php echo $rs['sanpham_ID']; ?>"><button><i class="far fa-edit"></i></button></a>
                            <a onclick="return confirm('Bạn chắc chắn xóa?')" href="xoasanpham.php?id=<?php echo $rs['sanpham_ID']; ?>"><button><i class="fas fa-trash-alt"></i></button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                        <a href="themmoisanpham.php"><button>Thêm sản phẩm mới</button></a>
</body>
</html>