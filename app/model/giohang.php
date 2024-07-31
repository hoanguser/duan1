<?php

namespace App\model;

class giohang
{
    function kiemtra($id)
    {
        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
            if ($_SESSION['giohang'][$i][0] == $id[0]) {
                return $i;
            }
        }
        return -1;
    }
}
?>