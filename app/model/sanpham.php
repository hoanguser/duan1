<?php

namespace App\model;

class sanpham
{
    private $id_sp = 0;
    private $Name = "";
    private $Price = 0;
    private $Date_import = "";
    private $Viewsp = 0;
    private $Decribe = "";
    private $Mount = 0;
    private $Sale = 0;
    private $Image = "";

    public function setPrice($Price)
    {
        return  $this->Price = $Price;
    }
    public function getPrice()
    {
        return  $this->Price;
    }
    public function setImage($Image)
    {
        return  $this->Image = $Image;
    }
    public function getImage()
    {
        return  $this->Image;
    }
    public function setSale($Sale)
    {
        return  $this->Sale = $Sale;
    }
    public function getSale()
    {
        return  $this->Sale;
    }

    public function setMount($Mount)
    {
        return  $this->Mount = $Mount;
    }
    public function getMount()
    {
        return  $this->Mount;
    }
    public function setDecribe($Decribe)
    {
        return  $this->Decribe = $Decribe;
    }
    public function getDecride()
    {
        return  $this->Decribe;
    }
    public function setViewsp($Viewsp)
    {
        return  $this->Viewsp = $Viewsp;
    }
    public function getViewsp()
    {
        return  $this->Viewsp;
    }
    public function setDate_import($Date_import)
    {
        return  $this->Date_import = $Date_import;
    }
    public function getDate_import()
    {
        return  $this->Date_import;
    }
    public function setName($Name)
    {
        return  $this->Name = $Name;
    }
    public function getName()
    {
        return  $this->Name;
    }

    // 

    public function setId($id_sp)
    {
        return $this->id_sp = $id_sp;
    }
    public function getId()
    {
        return $this->id_sp;
    }


    // 
    public function getmotsp($id)
    {
        $xl = new xl_data();
        $sql = "select * from sanpham where id_sp =" . $id;
        $result = $xl->readitem($sql);
        return $result;
    }

    public function deletesp($sp)
    {
        $xl = new xl_data();
        $sql = "delete from sanpham where id_sp =" . $sp->getId();
        $xl->execute_item($sql);
    }
    public function getsp()
    {
        $xl = new xl_data();
        $sql = "select * from sanpham";
        $result = $xl->readitem($sql);
        return $result;
    }
    public function getdata_limit($st, $stp)
    {
        $xl = new xl_data();
        $sql = "select * from sanpham order by id_sp desc limit " . $st . "," . $stp;
        $result = $xl->readitem($sql);
        return $result;
    }
    function themsp($sp)
    {
        $xl = new xl_data();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('d-m-y h:i:s');
        $sql =  " INSERT into sanpham (Name, Price, Decribe, Mount, Sale, image)
            VALUES (
            '" . $sp->getName() . "',
            " . $sp->getPrice() . ",
            '" . $sp->getDecride() . "',
            " . $sp->getMount() . ",
            " . $sp->getSale() . ",
            '" . $sp->getImage() . "')";
        echo $sql;
        $xl->execute_item($sql);
    }
    function capnhatsp($sp)
    {
        $xl = new xl_data();
        if ($sp->getImage() == "") {
            $sql =  "Update sanpham Set Name='" . $sp->getName() . "', 
            Price=" . $sp->getPrice() . ",
            Mount=" . $sp->getMount() . ",
            Decribe ='" . $sp->getDecride() . "' where id_sp = " . $sp->getID();
        } else {
            $sql =  "Update sanpham Set Name='" . $sp->getName() . "', 
            Price=" . $sp->getPrice() . ",
            Mount=" . $sp->getMount() . ",
            image='" . $sp->getImage() . "',
            Decribe ='" . $sp->getDecride() . "' where id_sp = " . $sp->getID();
        }
        $xl->execute_item($sql);
    }
}
