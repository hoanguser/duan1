<?php
$_SESSION['thanhtoan'] = $_SESSION['giohang'];
$_SESSION['giohang'] = [];

?>
<div class="card">
    <form action="/checkoutcart" method="post">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Thanh toán </b></h4>
                    </div>
                </div>
            </div>

            <div class="row border-top border-bottom">
                <?php
                $tong = 0;
                for ($i = 0; $i < count($_SESSION['thanhtoan']); $i++) {
                    $tong += $_SESSION['thanhtoan'][$i][2] * $_SESSION['thanhtoan'][$i][3]
                ?>

                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="../public/upload/<?= $_SESSION['thanhtoan'][$i][4] ?>" alt="product"></div>
                        <div class="col">
                            <div class="row text-muted"><?= $_SESSION['thanhtoan'][$i][1] ?></div>
                            <div class="row"></div>
                        </div>
                        <div class="col">
                            <span class="border"><?= number_format($_SESSION['thanhtoan'][$i][2], 0, ',', '.') ?> VND</span>
                        </div>
                        <div class="col"><?= number_format($_SESSION['thanhtoan'][$i][2] * $_SESSION['thanhtoan'][$i][3], 0, ',', '.') ?>VND<span class="close"></span></div>
                    </div>
            </div>


        <?php
                }
        ?>

        <div class="back-to-shop"><a href="/">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Thông tin đơn hàng</b></h5>
            </div>
            <hr>


            <div class="row">
                <div class="col" style="padding-left:0;">Tên người đặt</div>
                <div class="col text-right"><?= $_SESSION['name'] ?></div>
            </div>

            <div class="row">
                <div class="col" style="padding-left:0;">Địa chỉ</div>
                <div class="col text-right"><?= $_SESSION['location']?></div>
            </div>

            <div class="row">
                <div class="col" style="padding-left:0;">Email</div>
                <div class="col text-right"><?= $_SESSION['email']?></div>
            </div>


            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">Tổng tiền</div>
                <div class="col text-right"> <?=number_format($tong, 0, ',', '.')?> VND</div>
            </div>


            <button type="submit" class="btn">Xác nhận</button>
        </div>
    </div>
    </form>

</div>



<style>
    body {
        min-height: 100vh;
        vertical-align: middle;
        font-family: sans-serif;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .title {
        margin-bottom: 5vh;
    }

    .card {
        margin: auto;
        max-width: 950px;
        width: 90%;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 1rem;
        border: transparent;
    }

    @media(max-width:767px) {
        .card {
            margin: 3vh auto;
        }
    }

    .cart {
        background-color: #fff;
        padding: 4vh 5vh;
        border-bottom-left-radius: 1rem;
        border-top-left-radius: 1rem;
    }

    @media(max-width:767px) {
        .cart {
            padding: 4vh;
            border-bottom-left-radius: unset;
            border-top-right-radius: 1rem;
        }
    }

    .summary {
        background-color: #ddd;
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
        padding: 4vh;
        color: rgb(65, 65, 65);
    }

    @media(max-width:767px) {
        .summary {
            border-top-right-radius: unset;
            border-bottom-left-radius: 1rem;
        }
    }

    .summary .col-2 {
        padding: 0;
    }

    .summary .col-10 {
        padding: 0;
    }

    .row {
        margin: 0;
    }

    .title b {
        font-size: 1.5rem;
    }

    .main {
        margin: 0;
        padding: 2vh 0;
        width: 100%;
    }

    .col-2,
    .col {
        padding: 0 1vh;
    }

    a {
        padding: 0 1vh;
    }

    .close {
        margin-left: auto;
        font-size: 0.7rem;
    }

    img {
        width: 3.5rem;
    }

    .back-to-shop {
        margin-top: 4.5rem;
    }

    h5 {
        margin-top: 4vh;
    }

    hr {
        margin-top: 1.25rem;
    }

    form {
        padding: 2vh 0;
    }

    select {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1.5vh 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247);
    }

    input {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247);
    }

    input:focus::-webkit-input-placeholder {
        color: transparent;
    }

    .btn {
        background-color: #000;
        border-color: #000;
        color: white;
        width: 100%;
        font-size: 0.7rem;
        margin-top: 4vh;
        padding: 1vh;
        border-radius: 0;
    }

    .btn:focus {
        box-shadow: none;
        outline: none;
        box-shadow: none;
        color: white;
        /* -webkit-box-shadow: none;
        -webkit-user-select: none; */
        transition: none;
    }

    .btn:hover {
        color: white;
    }

    a {
        color: black;
    }

    a:hover {
        color: black;
        text-decoration: none;
    }

    #code {
        background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)), url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
        background-repeat: no-repeat;
        background-position-x: 95%;
        background-position-y: center;
    }
</style>