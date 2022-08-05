<?php
    session_start();
    require_once ('database.php');
    if(isset($_GET['maSP'])){
        $sanPham_ID = $_GET['maSP'];
        
        $sql = "SELECT * FROM sanpham WHERE sanPham_ID = '".$sanPham_ID."' ";
        $result = $db ->query($sql);
        $rs = $result->fetch();

        if(!empty($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            // Kiểm tra lần thứ 2 mua hàng đã có id phần tử mảng hay chưa dùng hàm array_key_exists
                if(array_key_exists($sanPham_ID,$cart)){
                    $cart[$sanPham_ID] = array(
                        "sl" => (int)$cart[$sanPham_ID]["sl"]+1,
                        "price" =>$rs[2],
                        "name" =>$rs[1],
                        "img" => $rs[5]
                        
                    );
                }else{
                    $cart[$sanPham_ID] = array(
                        "sl" =>1,
                        "price" =>$rs[2],
                        "name" =>$rs[1],
                        "img" => $rs[5]
                        
                    );
                }
        }else{
            // Lần đầu tiên mua hàng
            $cart[$sanPham_ID] = array(
                "sl" =>1,
                "price" =>$rs[2],
                "name" =>$rs[1],
                "img" => $rs[5]
                
            );
        }
        /* $thanhtoan=array(
            "total" => 0,
            "ship"=>30000,
            "tongtien"=>$thanhtoan['total']+$thanhtoan['ship']
        );
        $_SESSION['thanhtoan']=$thanhtoan;*/
        $_SESSION['cart'] = $cart;

    }else{
        
    }
    $slgiohang=0;
    foreach($_SESSION['cart'] as $key => $value){
        $slgiohang++;
        $_SESSION['slgiohang']=$slgiohang;
    }
    header('location: sanpham.php');
    
?>