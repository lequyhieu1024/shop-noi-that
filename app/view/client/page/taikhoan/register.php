<div class="breadcrumb-area section-padding-1 bg-gray breadcrumb-ptb-1">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title">
                <h2>Đăng ký thành viên</h2>
            </div>
        </div>
    </div>
</div>
<div class="login-register-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="login-register-wrap register-wrap">
                    <div class="login-register-form">
                        <form method="post">
                        <span style="color:green"><?=$alert?></span>
                            <div class="sin-login-register">
                                <label>Địa chỉ email <span>*</span></label>
                                <input type="email" name="email">
                                <span style="color:red"><?=$emailErr?></span>
                            </div>
                            <div class="sin-login-register">
                                <label>Mật khẩu <span>*</span></label>
                                <input type="password" name="mat_khau">
                                <span style="color:red"><?=$passErr?></span>
                            </div>
                            <div class="sin-login-register">
                                <label>Xác nhận mật khẩu <span>*</span></label>
                                <input type="password" name="xn_mat_khau">
                                <span style="color:red"><?=$cfpassErr?></span>
                            </div>
                            <p>Bấm đăng ký tài khoản đồng nghĩa với việc bạn chấp nhận điều khoản của chúng tôi. Chi tiết điều khoản<a href="#">Tại đây</a></p>
                            <div class="login-register-btn">
                                <button type="submit" name="dangky">Đăng ký</button>
                            </div>
                        </form><br>
                        Đã có tài khoản ?<a href="index.php?redirect=login"> Đăng nhập</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-none d-md-block mt-40">
                <img src="public/image/phong-cach-classic.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
</div>