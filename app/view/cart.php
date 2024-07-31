<?php

use App\model\cart;

$cart = new cart();
$cart->setId_user($_SESSION['id']);
$cart = $cart->getcart($cart);
// var_dump($cart);
?>
<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <!-- Set columns width -->
                            <th class="text-center py-3 px-4" style="min-width: 350px;">Product Name &amp; Details</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                            <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($_SESSION['giohang']); $i++) {
                        ?>
                            <tr>
                                <td class="p-4">
                                    <div class="media align-items-center">
                                        <img src="../public/upload/<?= $_SESSION['giohang'][$i][4] ?>" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                                        <div class="media-body">
                                            <a href="#" class="d-block text-dark"><?= $_SESSION['giohang'][$i][1] ?></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right font-weight-semibold align-middle p-4"><?= $_SESSION['giohang'][$i][2] ?></td>
                                <td class="align-middle p-4"><input type="text" class="form-control text-center" value="<?= $_SESSION['giohang'][$i][3] ?>"></td>
                                <td class="text-right font-weight-semibold align-middle p-4"><?= ($_SESSION['giohang'][$i][2])* ($_SESSION['giohang'][$i][3]) ?></td>
                                </form>
                                <td class="text-center align-middle px-0"><a href="/removecart?del=<?= $_SESSION['giohang'][$i][0] ?>" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                            </tr>

                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
            <!-- / Shopping cart table -->

            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                <div class="mt-4">
                    <label class="text-muted font-weight-normal">Promocode</label>
                    <input type="text" placeholder="ABC" class="form-control">
                </div>
                <div class="d-flex">
                    <div class="text-right mt-4 mr-5">
                        <label class="text-muted font-weight-normal m-0">Discount</label>
                        <div class="text-large"><strong>$20</strong></div>
                    </div>
                    <div class="text-right mt-4">
                        <label class="text-muted font-weight-normal m-0">Total price</label>
                        <div class="text-large"><strong>$1164.65</strong></div>
                    </div>
                </div>
            </div>

            <div class="float-right">
                <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
                <a class="btn btn-lg btn-primary mt-2" href="/checkout">Thanh toán</a>
            </div>

        </div>
    </div>
</div>



<style>
    body {
        margin-top: 20px;
        background: #eee;
    }

    .ui-w-40 {
        width: 40px !important;
        height: auto;
    }

    .card {
        box-shadow: 0 1px 15px 1px rgba(52, 40, 104, .08);
    }

    .ui-product-color {
        display: inline-block;
        overflow: hidden;
        margin: .144em;
        width: .875rem;
        height: .875rem;
        border-radius: 10rem;
        -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
        vertical-align: middle;
    }
</style>