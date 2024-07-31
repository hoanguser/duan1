<?php

namespace App\model;

class user
{
    private $id_user = 0;
    private $username = "";
    private $password = "";
    private $email = "";
    private $phone = "";
    private $address = "";
    private $position = 0;


    public function set_username($name)
    {
        return  $this->username = $name;
    }
    public function get_username()
    {
        return  $this->username;
    }

    public function set_pass($password)
    {
        return $this->password = $password;
    }
    public function get_pass()
    {
        return $this->password;
    }

    public function set_email($email)
    {
        return  $this->email = $email;
    }
    public function get_email()
    {
        return  $this->email;
    }
    public function set_address($diachi)
    {
        return  $this->address = $diachi;
    }
    public function get_address()
    {
        return  $this->address;
    }
    public function set_position($position)
    {
        return  $this->position = $position;
    }
    public function get_position()
    {
        return  $this->position;
    }

    public function set_Iduser($id_user)
    {
        return $this->id_user = $id_user;
    }
    public function get_Iduser()
    {
        return $this->id_user;
    }

    public function dang_ki($user)
    {
        $xl = new xl_data();
        $sql =  " INSERT into user (name, email, pass, diachi)
        VALUES (
        '" . $user->get_username() . "',
        '" . $user->get_email() . "',
        '" . $user->get_pass() . "',
        '" . $user->get_address() . "') ";
        echo $sql;

        $xl->execute_item($sql);
    }

    public function dang_nhap($user)
    {
        $xl = new xl_data();
        $sql = "select * from user where name='" . $user->get_username() . "' and pass='" . $user->get_pass() . "'";
        $result = $xl->readitem($sql);
        return $result;
    }
}
