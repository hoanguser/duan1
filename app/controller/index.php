<?php

namespace App\controller;

use App\model\user;
use App\model\sanpham;
use App\model\cart;
use App\model\donhang;
use App\model\giohang;


session_start();
ob_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
class controller
{
    public function index()
    {
        include "../assigment2/app/view/header.php";
        include "../assigment2/app/view/home.php";
        include "../assigment2/app/view/footer.php";
    }
    public function detail()
    {
        include "../assigment2/app/view/header.php";
        include "../assigment2/app/view/detail.php";
        include "../assigment2/app/view/footer.php";
    }
    public function login()
    {
        include "../assigment2/app/view/header.php";
        include "../assigment2/app/view/login.php";
        include "../assigment2/app/view/footer.php";
    }
    public function signin()
    {
        include "../assigment2/app/view/header.php";
        include "../assigment2/app/view/signin.php";
        include "../assigment2/app/view/footer.php";
    }

    public function xldk()
    {
        $err = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new user();
            if (empty($err)) {
                $user = new user();
                $user->set_username($_POST['username']);
                $user->set_email($_POST['email']);
                $user->set_pass($_POST['password']);
                $user->set_address($_POST['address']);
                $user->dang_ki($user);
                header("Location: /login");
            } else {
                header("Location: /signin");
            }
        }
    }

    public function xldn()
    {
        $user = new user();
        $user->set_username($_POST['username']);
        $user->set_pass($_POST['password']);
        echo $_POST['username'] . $_POST['password'];
        $kq = $user->dang_nhap($user);
        var_dump($kq);
        for ($i = 0; $i < count($kq); $i++) {
            if ($_POST['username'] == $kq[$i]['name'] && ($_POST['password']) == $kq[$i]['pass']) {
                $_SESSION['id'] = $kq[$i]['id'];
                $_SESSION['name'] = $kq[$i]['name'];
                $_SESSION['email'] = $kq[$i]['email'];
                $_SESSION['location'] = $kq[$i]['diachi'];
                $_SESSION['role'] = $kq[$i]['role'];
                if (isset($_SESSION['role']) &&  $_SESSION['role'] == 0) {
                    header('location:/');
                } else {
                    header('location:/admin');
                }
            } else {
                header('location:/login');
            }
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location: /");
    }
    public function admin()
    {
        include "../assigment2/app/view/ad-head.php";
        include "../assigment2/app/view/admin.php";
    }

    public function ad_elm()
    {
        include "../assigment2/app/view/ad-head.php";
        include "../assigment2/app/view/ad-element.php";
    }
    public function ad_pro()
    {
        include "../assigment2/app/view/ad-head.php";
        include "../assigment2/app/view/ad-products.php";
    }
    public function add_pro()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $sp = new sanpham();
            $sp->setName($_POST['name']);
            $sp->setPrice($_POST['gia']);
            $sp->setDecribe($_POST['mota']);
            $sp->setSale($_POST['giamgia']);
            $sp->setMount($_POST['soluong']);
            if (isset($_FILES['image'])) {
                $hinhsp = basename($_FILES['image']['name']);
                $sp->setImage($hinhsp);
                $path = __DIR__ . "./../../public/upload/";
                $target_file = $path . $hinhsp;
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            }
            $sp->themsp($sp);
            header('location: /ad_product');
            // $sp->set_email($_POST['email']);
            // $sp->set_pass($_POST['password']);
            // $sp->set_address($_POST['address']);

        }
    }
    public function deletesp()
    {
        $sp = new sanpham();
        $sp->setId($_GET['id']);
        $sp->deletesp($sp);
        header('location: /ad_product');
    }
    public function updatesp()
    {
        $sp = new sanpham();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            echo $_GET['id'];
            $sp->setId($_GET['id']);
            $kq = $sp->getmotsp($sp);
            // var_dump($kq);
            include "../assigment2/app/view/ad-head.php";
            include "../assigment2/app/view/ad-proedit.php";
        }
    }
    public function updatepro()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $sp = new sanpham();
            $sp->setName($_POST['name']);
            $sp->setPrice($_POST['gia']);
            $sp->setDecribe($_POST['mota']);
            $sp->setSale($_POST['giamgia']);
            $sp->setMount($_POST['soluong']);
            $sp->setId($_POST['id']);
            if (isset($_FILES['image'])) {
                $hinhsp = basename($_FILES['image']['name']);
                $sp->setImage($hinhsp);
                $path = __DIR__ . "./../../public/upload/";
                $target_file = $path . $hinhsp;
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            } else if (!isset($_FILES['image'])) {
                $sp->setImage("");
            }
            // echo $hinhsp;
            $sp->capnhatsp($sp);
            header('location: /ad_product');
        }
    }

    public function cart()
    {
        include "../assigment2/app/view/header.php";
        include "../assigment2/app/view/cart.php";
        include "../assigment2/app/view/footer.php";
    }

    public function xlcart()
    {
        if (isset($_GET['id'])) {
            $gh = new giohang();
            $sps = new sanpham();
            $sps->setId($_GET['id']);
            $sp_mot = $sps->getmotsp($sps->getId());
            $sp = [$sp_mot[0]['id_sp'], $sp_mot[0]['Name'], $sp_mot[0]['Price'], 1, $sp_mot[0]['image']];
            $vitri = $gh->kiemtra($sp);
            if ($vitri == -1) {
                $_SESSION['giohang'][] = $sp;
            } else {
                $_SESSION['giohang'][$vitri][3]++;
            }
        }



        header('location:/cart');
    }
    public function removecart()
    {
        if (isset($_REQUEST['del'])) {
            $gh = new giohang();
            $id_del = $_REQUEST['del'];
            $vitri = $gh->kiemtra($id_del);
            array_splice($_SESSION['giohang'], $vitri, 1);
        }
        header('location:/cart');
    }
    public function info_checkout()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_GET['id'])) {
                echo $_GET['id'];
                $cart = new cart();
                $cart->setId_cart($_GET['id']);
                $kq = $cart->getmotcart($cart);
                include "../assigment2/app/view/header.php";
                include "../assigment2/app/view/checkout_info.php";
            }
        }
    }

    public function checkout()
    {
        include "../assigment2/app/view/header.php";

        include "../assigment2/app/view/checkout_info.php";
    }
    public function add_dh()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $donhang = new donhang();
            $date = getdate();
            $donhang->set_Iddh($date['year'] + rand(10, 10000));
            $donhang->set_Iduser($_SESSION['id']);

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $donhang->set_ngaydat(date('d-m-y h:i:s'));
            $tongdh = 0;
            for ($i = 0; $i < count($_SESSION['thanhtoan']); $i++) {
                $tongdh += $_SESSION['thanhtoan'][$i][2] * $_SESSION['thanhtoan'][$i][3];
            }
            $donhang->set_tongdh($tongdh);

            $donhang->themdh($donhang);

            for ($j = 0; $j < count($_SESSION['thanhtoan']); $j++) {
                $donhang->set_idchitiet($date['year'] + rand(10, 10000));
                // $donhang->set_Iddh($donhang->set_idchitiet($date['year'] + rand(10, 10000)) + $j);
                $donhang->set_Idsp($_SESSION['thanhtoan'][$j][0]);
                $donhang->set_soluong($_SESSION['thanhtoan'][$j][3]);
                $donhang->set_tong_dh($_SESSION['thanhtoan'][$j][2] * $_SESSION['thanhtoan'][$j][3]);
            }
            $donhang->themdhct($donhang);
            // include "../assigment2/app/view/goi_mail.php";
            $_SESSION['thanhtoan'] = [];
            include "../assigment2/app/view/sucess.php";
        }
    }
    public function sucess()
    {
        include "../assigment2/app/view/sucess.php";
    }
    public function qldh()
    {
        include "../assigment2/app/view/header.php";
        include "../assigment2/app/view/qldh.php";
    }
    public function uddh()
    {
        $dh = new donhang();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // echo $_GET['id'];
            $dh->set_Iddh($_GET['id']);
            $kq = $dh->getonedh($dh);
            // var_dump($kq);
            include "../assigment2/app/view/ad-head.php";
            include "../assigment2/app/view/uddh.php";
        }
    }

    public function updatedh()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $donhang = new donhang();
            $donhang->set_trangthai($_POST['trangthai']);
            $donhang->set_Iddh($_POST['id_dh']);
            // echo $hinhsp;
            $donhang->capnhatdh($donhang);
            header('location: /qldh_admin');
            // include "../assignment2/app/view/goi_email.php";
        }
    }
    public function qldh_admin()
    {
        include "../assigment2/app/view/ad-head.php";
        include "../assigment2/app/view/ad-qldh.php";
    }
    public function ctdh()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $dh = new donhang();
            $id_dh = $_GET['id'];
            $dh->set_Iddh($id_dh);
            $result = $dh->getonedh($dh);
            var_dump($result);
        }
        include "../assigment2/app/view/header.php";

        include "../assigment2/app/view/ctdh.php";
    }
}
