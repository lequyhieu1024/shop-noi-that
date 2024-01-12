<div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-1">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Đăng nhập tài khoản</h2>
            </div>
        </div>
    </div>
</div>
<div class="login-register-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="login-register-wrap mr-70">
                    <div class="login-register-form">
                        <form method="post">
                            <div class="sin-login-register">
                                <label>Địa chỉ email<span>*</span></label>
                                <input type="email" name="email" placeholder="Địa chỉ email đăng ký tài khoản">
                                <span style="color:red"><?=$emailErr?></span>
                            </div>
                            <div class="sin-login-register">
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="mat_khau" placeholder="Mật khẩu">
                                <span style="color:red"><?=$passErr?><?=$alert?></span>
                            </div>
                            <div class="login-register-btn-remember">
                                <div class="login-register-btn">
                                    <button type="submit" name="dangnhap">Đăng nhập</button>
                                </div>
                                <div class="login-register-remember">
                                    <input type="checkbox">
                                    <label>Nhớ tài khoản</label>
                                </div>
                            </div>
                            <a href="#">Quên mật khẩu ?</a><br>
                            <a href="index.php?redirect=register">Đăng ký thành viên</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-none d-md-block mt-40">
                <img src="public/image/phong-cach-classic.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>