<?php

use App\model\sanpham;

$spct = new sanpham();
// var_dump($sp);
$sp = new sanpham();
$spct->setId($_GET['id']);
$showsp = $spct->getmotsp($_GET['id']);
?>



 <?php
  if (isset($showsp) && count($showsp) > 0) {
    foreach ($showsp as $getspct) {
      echo '
<form action="/xlcart?id=' . $getspct['id_sp'] . '" method="post">
<div class="container py-5">
  <div class="row">
    <div class="col-lg-6">
      <img
        src="/public/image/' . $getspct['image'] . '"
        class="img-fluid"
        alt="Product Image"
      />
    </div>
    <div class="col-lg-6">
      <h3 class="fw-bold">' . $getspct['Name'] . '</h3>
      <p class="text-muted">Product Category</p>
      <h4 class="my-4">' . number_format(($getspct['Price'] - ($getspct['Price'] * ($getspct['Sale'] / 100)))) . 'VND</h4>
      <p class="mb-4">
      ' . $getspct['Decribe'] . '
      </p>

      <div class="d-flex gap-3 mb-4">
        <input
          type="number"
          class="form-control"
          value="1"
          style="max-width: 80px"
          min ="0" max= "100"
          name="soluong" />
          <input type="hidden" name="id_sp" value="'.$getspct['id_sp'].'">
          <input type="hidden" name="tensp" value="'.$getspct['Name'].'">
          <input type="hidden" name="gia" value="'.$getspct['Price'].'">
        <button type="submit" class="btn btn-primary" type="button">Add to Cart</button>
      </div>
      <div>
      </div>
    </div>
  </div>
</div>
</form>
';
    }
  } ?>