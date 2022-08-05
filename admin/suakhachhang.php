<!DOCTYPE html>
<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        require 'database.php';

        $sql1="SELECT * FROM khachhang where maKH='".$id."'";
        $result1=$db->query($sql1);
        $rs=$result1->fetch();
    }
    if(isset($_POST['update'])){
        $maKH=$_POST['maKH'];
        $tenKH=$_POST['tenKH'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['emailKH'];
        $soDT=$_POST['soDT'];
        $diachiKH=$_POST['diachiKH'];
        $admin=$_POST['admin'];

        require 'database.php';

        $sql="UPDATE khachhang set tenKH='".$tenKH."', username='".$username."', password='".$password."', emailKH='".$email."', soDT='".$soDT."', diachiKH='".$diachiKH."', admin_KH='".$admin."' WHERE maKH='$maKH'";
        $result=$db ->exec($sql);

        header("location: danhsachkhachhang.php");
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

    <h3>Cập nhật thông tin</h3>
        <form action="" class="form-themmoi" method="post" enctype="multipart/form-data">
        <input type="hidden" name="password" value="<?php echo $rs['password']?>">
          <label for="">Họ và Tên</label>
          <input type="hidden" name="maKH" value="<?php echo $rs['maKH'] ?>"><br>
          <input type="text" name="tenKH" value="<?php echo $rs['tenKH']?>"><br>
          <label for="">Username</label>
          <input type="text" name=username value="<?php echo $rs['username']?>"><br>
          <label for="">Mật khẩu</label>
          <input disabled type="password" name="password" value="<?php echo $rs['password']?>"><br>
          <label for="">Email</label>
          <input type="email" name="emailKH" value="<?php echo $rs['emailKH']?>"/><br>
          <label for="">Số điện thoại</label>
          <input type="number" name="soDT" value="<?php echo $rs['soDT']?>"><br>
          <label for="">Địa chỉ</label>
          <input type="text" name="diachiKH"value="<?php echo $rs['diachiKH']?>" ><br>
          <label for="">Admin?</label>
          <select name="admin" id="">
              <?php echo $rs['admin_KH'];?>
                <?php if($rs['admin_KH']=="0"){ ?>
                <option selected value="0">Khách Hàng</option>
                <option value="1">Admin</option>
                <?php } else{ ?>
                <option value="0">Khách Hàng</option>
                <option selected value="1">Admin</option>
                <?php } ?>
          </select><br>
          <button type="submit" name="update">Cập nhật</button><br>
      </form>

</body>
</html>