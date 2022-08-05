<!DOCTYPE html>
<?php
    require 'database.php';
    $sql="select * from hoadon";
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
        <h3>Danh sách Đơn Hàng</h3>
                <table border="1">
                    <tr>
                        <th>Mã HD</th>
                        <th>Tên khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Ngày đặt mua</th>
                        <th>Tình Trạng</th>
                        <th>Ghi Chú</th>
                        <th>EDIT</th>
                        
                    </tr>
                    <?php
                    
                        $stt=0;
                        while($rs=$result->fetch()){
                            $stt++;
                        $maKH= $rs['maKH'];
                        $sql1="select * from khachhang where maKH='".$maKH."'";
                        $result1=$db->query($sql1);
                        $rs1=$result1->fetch();  
                    ?>
                    <tr>
                   
                        <input type="hidden" name="maHD" value="<?php echo $rs['maHD'];?>">
                        <td><?php echo $rs['maHD'];?></td>
                        <td class="tenKH"><?php echo $rs1['tenKH'];?></td>
                        <td class="gia"><?php echo number_format($rs['tongTien']);?>đ</td>
                        <td><?php echo $rs['ngayDatMua'];?></td>
                        <td class="tinhTrangHoaDon">
                            <?php echo $rs['tinhTrang'];?>
                        </td>
                        <td class="ghiChu"><?php echo $rs['ghiChu'];?></td>
                        <td class="table-xoa">
                            <a href="hoadonchitiet.php?id=<?php echo $rs['maHD']; ?>"><button><i class="fas fa-eye"></i></button></a>
                            <a href="suadanhsachdonhang.php?maHD=<?php echo $rs['maHD']; ?>"><button><i class="fas fa-edit"></i></button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                
            
</body>
</html>