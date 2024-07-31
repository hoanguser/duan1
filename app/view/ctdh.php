<!-- Bảng hiển thị danh sách sản phẩm -->
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã đơn hàng</th>
            <th scope="col">Sản phẩm</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Ngày đặt</th>
            <th scope="col">Trạng thái</th>

        </tr>
    </thead>
    <tbody>

        <?php

        // var_dump($result);

        if (!empty($result)) {
            for ($i = 0; $i < count($result); $i++) {
                $rc = $result[$i];
        ?>
                <tr>
                    <th scope="row"><?= $i + 1 ?></th>
                    <td><?= $rc['id_dh'] ?></td>
                    <td><?= $rc['id_dh'] ?></td>
                    <td>
                        <img width="50px" src="../public/upload/<?=$rc['image']?>" alt="">
                    </td>
                    <td><?= number_format($rc['tongdh'], 0, ',', '.') ?>VND</td>
                    <td><?= $rc['ngaydat'] ?></td>
                    <td><?= $rc['trangthai'] ?></td>
                    <td>
                        <a href="/ctdh?id=<?= $rc['id_dh'] ?>" class="btn btn-primary btn-sm">Xem chi tiết</a>
                    </td>
                </tr>
        <?php
            }
        } else {
            // Handle case when there are no products in the result set
            echo '<tr><td colspan="8">No products found</td></tr>';
        }
        ?>
    </tbody>
</table>

<style>
    .img {
        height: 90px;
        width: 90px;
    }
</style>