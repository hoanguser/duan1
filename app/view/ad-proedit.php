<section class="mainpanel">
    <div class="pagebody">
        <div class="card  border-0">
            <div class="card-header py-4">
                <h5 class="text-secondary font-weight-bold mb-0">UPDATE PRODUCT</h5>
                <?php
                // var_dump($kq);
                ?>
            </div>
            <form action="/ad_update_pro" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control bg-light" placeholder="Write here" name="name" value="<?= $kq[0]['Name'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Hình sản phẩm</label> <br>
                                <input type="file" name="image" />
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input type="text" class="form-control bg-light input-h-42" placeholder="Write here" name="gia" value="<?= $kq[0]['Price'] ?>">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label>Giảm giá:</label>
                                        <input type="number" name="giamgia" class="form-control bg-light" placeholder="Write here" value="<?= $kq[0]['Sale'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Số lượng tồn kho</label>
                                        <input type="text" class="form-control bg-light" name="soluong" placeholder="Filed" value="<?= $kq[0]['Mount'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea class="form-control bg-light" name="mota" rows="3"><?= $kq[0]['Decribe'] ?></textarea>
                                    </div>
                                    <input type="hidden" name="id" value="<?= $kq[0]['id_sp'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="border-dashed">
                    <button type="submit" class="button2">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</section>
<style>
    .CodeMirror-code {
        display: none;
    }
    input[type="file"] {
        position: relative;
    }

    input[type="file"]::file-selector-button {
        width: 136px;
        color: transparent;
    }

    /* Faked label styles and icon */
    input[type="file"]::before {
        position: absolute;
        pointer-events: none;
        top: 10px;
        left: 16px;
        height: 20px;
        width: 20px;
        content: "";
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230964B0'%3E%3Cpath d='M18 15v3H6v-3H4v3c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-3h-2zM7 9l1.41 1.41L11 7.83V16h2V7.83l2.59 2.58L17 9l-5-5-5 5z'/%3E%3C/svg%3E");
    }

    input[type="file"]::after {
        position: absolute;
        pointer-events: none;
        top: 11px;
        left: 40px;
        color: #0964b0;
        content: "Upload";
    }

    /* ------- From Step 1 ------- */

    /* file upload button */
    input[type="file"]::file-selector-button {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 1px solid rgba(0, 0, 0, 0.16);
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
    }

    /* file upload button hover state */
    input[type="file"]::file-selector-button:hover {
        background-color: #f3f4f6;
    }

    /* file upload button active state */
    input[type="file"]::file-selector-button:active {
        background-color: #e5e7eb;
    }

    /* ------------------------ */

    /* default boilerplate to center input */

    .button2 {
        display: inline-block;
        transition: all 0.2s ease-in;
        position: relative;
        overflow: hidden;
        z-index: 1;
        color: #090909;
        padding: 0.7em 1.7em;
        cursor: pointer;
        font-size: 18px;
        border-radius: 0.5em;
        background: #e8e8e8;
        border: 1px solid #e8e8e8;
        box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
    }

    .button2:active {
        color: #666;
        box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
    }

    .button2:before {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%) scaleY(1) scaleX(1.25);
        top: 100%;
        width: 140%;
        height: 180%;
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 50%;
        display: block;
        transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
        z-index: -1;
    }

    .button2:after {
        content: "";
        position: absolute;
        left: 55%;
        transform: translateX(-50%) scaleY(1) scaleX(1.45);
        top: 180%;
        width: 160%;
        height: 190%;
        background-color: #009087;
        border-radius: 50%;
        display: block;
        transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
        z-index: -1;
    }

    .button2:hover {
        color: #ffffff;
        border: 1px solid #009087;
    }

    .button2:hover:before {
        top: -35%;
        background-color: #009087;
        transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
    }

    .button2:hover:after {
        top: -45%;
        background-color: #009087;
        transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
    }
</style>