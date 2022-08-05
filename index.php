<!DOCTYPE html>
<?php
  session_start();
  require 'login.php';
  require 'database.php';
  $sql="select * from khachhang";
  $result=$db->query($sql);
  
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holinuts - Chuyên hạt dinh dưỡng nhập khẩu</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/holinuts.png" type="image\x-icon">
    <link rel="icon" href="img/holinuts.png" type="image\x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <div class="overlay"></div>
  <div id="wraper">
    <header>
        <nav>
          <div class="nav-logo">
            <a href="index.php">
              <img class="logo-menu" src="img/logo-holinut-400.png" alt="">
            </a>
          </div>
          <div class="nav-menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="sanpham.php">Sản phẩm</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Liên Hệ</a></li>
                <li><a href=""><i class="fas fa-search"></i></a></li>
                <li><a href="javascript:void(0);" onclick="myLogin()"><i class="fas fa-user"></i></a></li>
                <li><a class="nav-cart-btn" href="giohang.php">
                    Giỏ hàng/
                    <?php if(!isset($_SESSION['slgiohang'])){?>
                      <i class="fas fa-shopping-cart"></i>
                      <?php }else{?>
                        <span class="notice"><?php echo $_SESSION['slgiohang'];?><i class="fas fa-shopping-cart"></i></span>
                      <?php }?> 
                </a></li>
            </ul>
            
          </div>
        </nav>
    </header>
   
    <main>
   
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner-hat-dinh-duong-nhap-2-1.jpg" class="d-block w-100" alt="...">
            <div class="text-slide">
              <h3>Hạt óc Chó Mỹ</h3>
              <p>Some representative placeholder content for the first slide.Some representative placeholder content for the first slide</p>
              <button>Mua Ngay</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner-hat-macca.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="content">
        
        <section class="tongQuan">
          <article class="tongQuan-tp">
            <img src="img/nguon-goc-san-pham.png" alt="">
            <h4>SẢN PHẨM</h4>
            <p>Holinut lựa chọn các loại hạt dinh dưỡng giá trị cao tại các quốc gia có nền nông nghiệp phát triển,
               sản phẩm được quản lý chặt chẽ về chất lượng và an toàn cho người tiêu dùng đạt tiêu chuẩn: USDA của Mỹ, 
               Organic của Úc…đáp ứng nhu cầu của khách hàng.
              </p>
          </article>
          <article class="tongQuan-tp">
            <img src="img/logo-gia-tri-dinh-duong.png" alt="">
            <h4>Giá trị</h4>
            <p>Mong muốn của HoliNut là muốn mang lại những sản phẩm hạt được nhập khẩu có giá trị dinh dưỡng cao đưa đến tay quý khách hàng.
               Đây là những sản phẩm phù hợp cho mọi người từ trẻ sơ sinh đến bà bầu, người già vì giá trị dinh dưỡng của chúng!
              </p>
          </article>
          <article class="tongQuan-tp">
            <img src="img/hau-mai.png" alt="">
            <h4>Hậu mãi</h4>
            <p>Chính sách hậu mãi giảm 5% cho các khách hàng cũ, chính sách free ship toàn quốc cho các đơn hàng từ 400k trở lên.
               Các chương trình khuyến mãi sẽ đồng hành cùng quý khách hàng!</p>
          </article>
        </section>

        <h2 !important style="text-align: center;">Holinut – Chuyên Kinh Doanh Hạt Dinh Dưỡng</h2>

        <section class="tongQuanHat">
          <article class="tongQuanHat-ct">
            <div class="video">
              <iframe width="100%" height="370" src="https://www.youtube.com/embed/6A5EIAeHiRQ" title="YouTube video player"
               frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
              </iframe>
            </div>
            <div class="tongQuanHat-text">
              <p>
                Những năm trở lại đây, kinh doanh hạt dinh dưỡng trở thành một xu hướng có nhiều người quan tâm đến bởi nhu cầu chú trọng đến sức khỏe và sắc đẹp của người Việt Nam ngày càng tăng cao. Không chỉ riêng các chị em phụ nữ mà cánh đàn ông cũng quan tâm không kém
              </p>
              <p>Bên cạnh đó, hạt dinh dưỡng vẫn là ngành hàng mới mẻ, chưa có nhiều sự cạnh tranh quá gay gắt trên thị trường. Có thể thấy, đây là sản phẩm tiềm năng và đáng cân nhắc đối với những ai muốn lập nghiệp đặc biệt là trong bối cảnh dịch bệnh hiện tại.</p>
              <button type="submit">Tư vấn kinh doanh hạt - 09769902480</button>
            </div>
          </article>
          <article class="tongQuanHat-ct">
            <div class="hat">
              <div class="hat-items">
                <img src="img/nhan-oc-cho-holinut-768x768.jpg" alt="">
                <div class="hat-items-text">
                  <a href="">Quả óc chó Harley</a>
                <p class="gia">110.000₫ – 42.500.000₫</p>
                </div>
              </div>
              <div class="hat-items">
                <img src="img/hat-hanh-nhan-holinut-768x768.jpg" alt="">
                <div class="hat-items-text">
                  <a href="">Hạnh nhân tươi nhập khẩu từ Úc</a>
                  <p class="gia">180.000₫ – 110.000.000₫</p>
                </div>
              </div>
              <div class="hat-items">
                <img src="img/hat-macca-500-gram-holinut-600x600.jpg" alt="">
                <div class="hat-items-text">
                  <a href="">Macca Nứt vỏ nhập khẩu Úc 500gr</a>
                  <p class="gia">195.000₫</p>
                </div>
              </div>
              <div class="hat-items">
                <img src="img/2nhan-macca.jpg" alt="">
                <div class="hat-items-text">
                  <a href="">Nhân Macca nhập khẩu từ Úc</a>
                  <p class="gia">375.000₫ – 310.000.000₫</p>
                </div>
              </div>
            </div>
          </article>
        </section>

      </div>    
      </main>
      <footer>
        <section class="footer-content">
          <article class="footer-items">
            <h3>HoliNut - Hạt dinh dưỡng</h3>
            <div class="gachngang"></div>
            <img src="img/logo-holinut-400.png" alt="">
            <p>Công ty TNHH Hoàng Linh Sài Gòn</p>
            <p>Địa Chỉ: 3/6 Đường 37, P. Hiệp Bình Chánh, Quận Thủ Đức. TP.HCM</p>
            <p>SDT: 0842.842.248</p>
            <p>Chi Nhánh Đà Nẵng : K428/29 Tôn Đản, Phường Hoà An, Quận Cẩm Lệ, TP Đà Nẵng
              SĐT: 0909.339.086</p>
            <p>Giấy chứng nhận đăng ký kinh doanh số 0316246962 cấp ngày
              28/04/2020 bởi sở kế hoạch và đầu tư thành phố Hồ Chí Minh.</p>
          </article>
          <article class="footer-items">
            <h3>Hỗ trợ khách hàng</h3>
            <div class="gachngang"></div>
            <a href="">Trang chủ</a>
            <a href="">Hướng dẫn mua hàng</a>
            <a href="">Phương thức thanh toán</a>
            <a href="">Chính sách giao hàng</a>
            <a href="">Chính sách đổi trả</a>
            <a href="">Chính sách bảo mật</a>
            <a href="">Liên hệ</a>
          </article>
          <article class="footer-items">
            <h3>Đặt hàng trực tiếp</h3>
            <div class="gachngang"></div>
            <form action="">
              <label for="">Tên của bạn:</label><br>
              <input type="text"><br>
              <label for="">Số Điện Thoại</label><br>
              <input type="number"><br>
              <label for="">Nội Dung:</label><br>
              <textarea name="" id="" cols="40" rows="5"></textarea><br>
              <button>Gửi đi</button>
            </form>
          </article>
          <article class="footer-items">
            <h3>Social</h3>
            <div class="gachngang"></div>
          </article>
      </section>
      </footer> 
      <button class="hotline">HOTLINE: 0909.339.086</button>   
  </div>

  <div class="sub-menu" id="sub-menu">
    <?php
     
      if(!isset($_SESSION['username'])){
    ?>
    <div class="login">
      <a class="login-exit" href="javascript:void(0);" onclick="myLogin()"><i class="fas fa-times"></i></a>
    <form action="" method="post" enctype="multipart/form-data">
      <h2>Đăng nhập</h2>
      
      <label for="">Tên tài khoản hoặc email</label><br>
      <input type="text" name="username" id="" required><br>
       <label for="">Mật khẩu</label><br>
       <input type="password" name="password" required><br>
       <p>Chưa có tài khoản? <a href="javascript:void(0);" onclick="mySignup()">Đăng kí</a><br></p>
       <button type="submit" name="login">Đăng Nhập</button><br>
       </form>
    </div>
    <div class="signup" id="signup">
      <div class="signup-show">
        <a class="login-exit" href="javascript:void(0);" onclick="mySignup()"><i class="fas fa-times"></i></a>
        <form action="" method="post" enctype="multipart/form-data">
          <h2>Đăng ký</h2>
          <label for="">Họ và Tên</label><br>
          <input type="text" name="tenKH"><br>
          <label for="">Username</label><br>
          <input type="text" name=username><br>
          <label for="">Mật khẩu</label><br>
          <input type="password" name="password"><br>
          <label for="">Email</label><br>
          <input type="email" name="emailKH"><br>
          <label for="">Số điện thoại</label><br>
          <input type="number" name="soDT"><br>
          <label for="">Địa chỉ</label><br>
          <input type="text" name="diachiKH"><br>
          <button type="submit" name="dangky">Đăng ký</button><br>
      </form>
      </div>
    </div>
    <?php } else {
      ?>
      <div class="login">
      <a class="login-exit" href="javascript:void(0);" onclick="myLogin()"><i class="fas fa-times"></i></a>
        <h2>User:</h2>
      <label for="">Xin chào: <?php echo $_SESSION['username'];?></label><br>
      <a href="editinfo.php">Cập nhật thông tin</a><br>
      <a href="giohang.php">Giỏ Hàng</a><br>
      <a href="donhang.php">Đơn Hàng</a><br>
      <a href="logout.php"><button typr="submit" name="logout">Đăng Xuất</button></a>
      </div>
      <div class="signup" id="signup">
      <div class="signup-show">
        <a class="login-exit" href="javascript:void(0);" onclick="mySignup()"><i class="fas fa-times"></i></a>
        <form action="" method="post" enctype="multipart/form-data">
          <h2>Cập nhật thông tin</h2>
          <label for="">Họ và Tên</label><br>
          <input type="text" name="tenKH" value="<?php echo $rs['tenKH']?>"><br>
          <label for="">Username</label><br>
          <input type="text" name=username value="<?php echo $rs['username']?>"><br>
          <label for="">Mật khẩu</label><br>
          <input type="password" name="password" value="<?php echo $rs['password']?>"><br>
          <label for="">Email</label><br>
          <input type="email" name="emailKH" value="<?php echo $rs['emailKH']?>"/><br>
          <label for="">Số điện thoại</label><br>
          <input type="number" name="soDT" value="<?php echo $rs['soDT']?>"><br>
          <label for="">Địa chỉ</label><br>
          <input type="text" name="diachiKH"value="<?php echo $rs['diachiKH']?>" ><br>
          <button type="submit" name="update">Cập nhật</button><br>
      </form>
      </div>
    </div>
    <?php } ?>
  </div>
  <script>
  function myLogin(){
    var y = document.getElementById("sub-menu");
    if (y.className =="sub-menu"){
    y.className +="show";
    }else{
    y.className = "sub-menu";
    }
  }
  function mySignup(){
    var y = document.getElementById("signup");
    if (y.className =="signup"){
    y.className ="signup-show";
    }else{
    y.className = "signup";
    }
  }
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>