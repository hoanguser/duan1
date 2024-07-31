<?php

namespace App\model;

class cart
{
    private $id_cart = 0;
    private $id_sp = 0;
    private $id_user = 0;
    private $soluong = 0;

    public function setId_cart($id_cart)
    {
        return  $this->id_cart = $id_cart;
    }
    public function getId_cart()
    {
        return  $this->id_cart;
    }


    public function setId_sp($id_sp)
    {
        return  $this->id_sp = $id_sp;
    }
    public function getId_sp()
    {
        return  $this->id_sp;
    }
    // user
    public function setId_user($id_user)
    {
        return  $this->id_user = $id_user;
    }
    public function getId_user()
    {
        return  $this->id_user;
    }
    // soluong
    public function setSoluong($soluong)
    {
        return  $this->soluong = $soluong;
    }
    public function getSoluong()
    {
        return  $this->soluong;
    }

    public function add_cart($cart)
    {
        $xl = new xl_data();
        $sql =  " INSERT into giohang (id_sp, id_user, soluong)
        VALUES (
        '" . $cart->getId_sp() . "',
        '" . $cart->getId_user() . "',
        '" . $cart->getSoluong() . "') ";
        echo $sql;

        $xl->execute_item($sql);
    }
    public function getcart($cart)
    {
        $xl = new xl_data();
        $sql = "SELECT gh.id_cart, gh.soluong, sp.Name, sp.image , sp.Price  FROM giohang gh LEFT JOIN user us ON gh.id_user = us.id
        LEFT JOIN sanpham sp ON gh.id_sp = sp.id_sp  WHERE us.id=".$cart->getId_user();
        $result = $xl->readitem($sql);
        return $result;
    }

    public function getmotcart($cart)
    {
        $xl = new xl_data();
        $sql = "SELECT gh.id_cart, gh.soluong,sp.id_sp, sp.Name, sp.image , sp.Price , us.*  FROM giohang gh LEFT JOIN user us ON gh.id_user = us.id
        LEFT JOIN sanpham sp ON gh.id_sp = sp.id_sp  WHERE gh.id_cart=".$cart->getId_cart();
        $result = $xl->readitem($sql);
        return $result;
    }
    
}
