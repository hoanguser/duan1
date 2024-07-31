<?php

namespace App\model;

class donhang
{
    private $id_dh = 0;
    private $id_chitiet = 0;
    private $id_user = 0;
    private $id_sp = 0;
    private $tongdh = 0;
    private $tong_dh = 0;
    private $soluong = 0;
    private $ngaydat = "";
    private $trangthai = "";

    public function set_Iddh($id_dh)
    {
        return  $this->id_dh = $id_dh;
    }
    public function get_Iddh()
    {
        return  $this->id_dh;
    }

    public function set_idchitiet($id_chitiet)
    {
        return  $this->id_chitiet = $id_chitiet;
    }
    public function get_idchitiet()
    {
        return  $this->id_chitiet;
    }

    public function set_Iduser($id_user)
    {
        return  $this->id_user = $id_user;
    }
    public function get_Iduser()
    {
        return  $this->id_user;
    }

    public function set_Idsp($id_sp)
    {
        return  $this->id_sp = $id_sp;
    }
    public function get_Idsp()
    {
        return  $this->id_sp;
    }


    public function set_tongdh($tongdh)
    {
        return  $this->tongdh = $tongdh;
    }
    public function get_tongdh()
    {
        return  $this->tongdh;
    }


    public function set_ngaydat($ngaydat)
    {
        return  $this->ngaydat = $ngaydat;
    }
    public function get_ngaydat()
    {
        return  $this->ngaydat;
    }


    public function set_trangthai($trangthai)
    {
        return  $this->trangthai = $trangthai;
    }
    public function get_trangthai()
    {
        return  $this->trangthai;
    }

    public function set_tong_dh($tong_dh)
    {
        return  $this->tong_dh = $tong_dh;
    }
    public function get_tong_dh()
    {
        return  $this->tong_dh;
    }


    public function set_soluong($soluong)
    {
        return  $this->soluong = $soluong;
    }
    public function get_soluong()
    {
        return  $this->soluong;
    }



    public function getdh()
    {
        $xl = new xl_data();
        $sql = "select * from donhang";
        $result = $xl->readitem($sql);
        return $result;
    }

    function themdh($dh)
    {
        $xl = new xl_data();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT into donhang (id_dh, id_user, tongdh, ngaydat) 
        VALUES (
        '" . $dh->get_Iddh() . "',
        " . $dh->get_Iduser() . ",
        " . $dh->get_tongdh() . ",
        '" . $date . "')";

        $xl->execute_item($sql);
    }


    public function getdhct($dh)
    {
        $xl = new xl_data();
        $sql = "select dh.*, ct.* from donhang dh join ct_dh ct on dh.id_dh = ct.id_dh where dh.id_user=".$dh->getId_user();
        $result = $xl->readitem($sql);
        return $result;
    }
    public function getalldhct()
    {
        $xl = new xl_data();
        $sql = "select dh.*, ct.* from donhang dh join ct_dh ct on dh.id_dh = ct.id_dh ";
        $result = $xl->readitem($sql);
        return $result;
    }

    function themdhct($dhct)
    {
        $xl = new xl_data();


        $sql = "INSERT into ct_dh (id_dhct, id_sp, id_dh, soluong, tongdh) 
                VALUES (
                '" . $dhct->get_iddh() . "',
                " . $dhct->get_Idsp() . ",
                '" . $dhct->get_iddh() . "', 
                " . $dhct->get_soluong() . ",
                " . $dhct->get_tong_dh() . ")";


        $xl->execute_item($sql);
    }



    public function getonedh($dh)
    {
        $xl = new xl_data();
        $sql = "SELECT dh.*, ct.*, sp.* from donhang dh join ct_dh ct on dh.id_dh = ct.id_dh JOIN sanpham sp ON ct.id_sp = sp.id_sp   where dh.id_dh = " . $dh->get_Iddh();
        $result = $xl->readitem($sql);
        return $result;
    }

    function capnhatdh($donhang)
    {
        $xl = new xl_data();

        $sql = "UPDATE donhang SET trangthai = '" . $donhang->get_trangthai() . "' WHERE id_dh = " . $donhang->get_Iddh();"";

        echo $sql;
        $xl->execute_item($sql);
    }

}
