<section class="mainpanel">
    <div class="pagebody">
        <div class="card  border-0">
            <div class="card-header py-4">
                <h5 class="text-secondary font-weight-bold mb-0">QUẢN LÝ ĐƠN HÀNG</h5>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12 col-lg-12">
                <div class="card  border-0">
                    <div class="card-header py-4">
                        <h5 class="text-secondary font-weight-bold mb-0">CẬP NHẬT ĐƠN HÀNG</h5>
                    </div>
                    <div class="card-body">

                        <?php
                        // var_dump($kq);
                        ?>
                        <!-- Form thêm sản phẩm -->
                        <form action="/updatedh" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Trạng thái đơn hàng</label> <br>
                                <select name="trangthai" id="">
                                    <option value="<?= $kq[0]['trangthai'] ?>"><?= $kq[0]['trangthai'] ?></option>
                                    <option value="Đang giao hàng">Đang giao hàng</option>
                                    <option value="Đã giao hàng">Đã giao hàng</option>
                                </select>
                            </div>


                            <input type="hidden" name="id_dh" value="<?= $kq[0]['id_dh'] ?>">

                            <button type="submit" class="btn btn-success">Cập nhật đơn hàng</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .CodeMirror {
        display: none !important;
    }
</style>

</body>

</html>