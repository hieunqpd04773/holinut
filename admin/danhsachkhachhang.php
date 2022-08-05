<!DOCTYPE html>
<?php
    require 'database.php';
    $sql="select * from khachhang";
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
                <h3>Danh sách USER</h3>
                <table border="1">
                    <tr>
                        <th>Họ và Tên</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                        <th>Hành động</th>
                    </tr>
                    <?php
                        $stt=0;
                        while($rs=$result->fetch()){
                            $stt++;
                        
                    ?>
                    <tr>
                        <td class="tenKH"><?php echo $rs['tenKH'];?></td>
                        <td><?php echo $rs['username'];?></td>
                        <td><input style="width:120px;" disabled type="password" value="<?php echo $rs['password'];?>"></td>
                        <td><?php echo $rs['emailKH'];?></td>
                        <td><?php echo $rs['soDT'];?></td>
                        <td class="diachi"><?php echo $rs['diachiKH'];?></td>
                        <td class="table-xoa">
                            <a href="suakhachhang.php?id=<?php echo $rs['maKH']; ?>"><button><i class="far fa-edit"></i></button></a>
                            <a onclick="return confirm('Bạn chắc chắn xóa?')" href="xoakhachhang.php?id=<?php echo $rs['maKH']; ?>"><button><i class="fas fa-trash-alt"></i></button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
        <a href="themkhachhang.php"><button>Thêm khách hàng mới</button></a>
</body>
</html>