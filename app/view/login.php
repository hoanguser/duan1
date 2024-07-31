<?php

use App\model\form;
?>

<div class="main">
    <form action="/xl_login" method="post" class="form" id="form-1">
        <h3 class="heading">Đăng nhập</h3>
        <p class="desc">Hãy đăng nhập vào tài khoản của bạn ❤️</p>

        <div class="spacer"></div>

        <div class="form-group">
            <label for="fullname" class="form-label">Tên đầy đủ</label>
            <input id="fullname" name="username" type="text" placeholder="VD: Sơn Đặng" class="form-control">
            <span class="form-message"></span>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
        </div>
        <div>Bạn chưa có tài khoản ?
            <a style="color: #f33a58;" href="/signin">Đăng kí</a>
        </div>
        <button type="submit" class="form-submit">Đăng nhập</button>
    </form>

</div>


<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        color: #333;
        font-size: 62.5%;
        font-family: "Open Sans", sans-serif;
    }

    .main {
        min-height: 100vh;
        max-width: 30%;
        margin: 0 auto;
        margin-top: -25px;
    }

    .form {
        width: 360px;
        min-height: 100px;
        padding: 32px 24px;
        text-align: center;
        background: #fff;
        border-radius: 2px;
        margin: 24px;
        align-self: center;
        box-shadow: 0 2px 5px 0 rgba(51, 62, 73, 0.1);
    }

    .form .heading {
        font-size: 2rem;
    }

    .form .desc {
        text-align: center;
        color: #636d77;
        font-size: 1.6rem;
        font-weight: lighter;
        line-height: 2.4rem;
        margin-top: 16px;
        font-weight: 300;
    }

    .form-group {
        display: flex;
        margin-bottom: 16px;
        flex-direction: column;
    }

    .form-group .horizontal {
        display: flex;
        align-items: center;
        justify-content: start;
        accent-color: #1dbfaf;
        outline: none;
        border: none;
        gap: 40px;
        flex-direction: row;
        font-size: 1.4 rem;
    }

    .horizontal-item {
        display: flex;
        align-items: center;
    }

    .form-label,
    .form-message {
        text-align: left;
    }

    .form-label {
        font-weight: 700;
        padding-bottom: 6px;
        line-height: 1.8rem;
        font-size: 1.4rem;
    }

    .form-control {
        height: 40px;
        padding: 8px 12px;
        border: 1px solid #b3b3b3;
        border-radius: 3px;
        outline: none;
        font-size: 1.4rem;
    }

    .form-control:hover {
        border-color: #1dbfaf;
    }

    .form-group.invalid .form-control {
        border-color: #f33a58;
    }

    .form-group.invalid .form-message {
        color: #f33a58;
    }

    .form-message {
        font-size: 1.2rem;
        line-height: 1.6rem;
        padding: 4px 0 0;
    }

    .form-submit {
        outline: none;
        background-color: #1dbfaf;
        margin-top: 12px;
        padding: 12px 16px;
        font-weight: 600;
        color: #fff;
        border: none;
        width: 100%;
        font-size: 14px;
        border-radius: 8px;
        cursor: pointer;
    }

    .form-submit:hover {
        background-color: #1ac7b6;
    }

    .spacer {
        margin-top: 36px;
    }
</style>