<?php
switch ($redirect) {
    case 'login':
        $emailErr = $passErr = "";
        if(isset($_POST['dangnhap'])){
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $login = login($email);
            if (empty($email)) {
                $emailErr = "Email không được để trống";
            }
            if (empty($mat_khau)) {
                $passErr = "Mật khẩu không được để trống";
            }
            if(!empty($email) && !empty($mat_khau)){
                if(isset($login['email'])){
                    if($email == $login['email'] && $mat_khau == $login['mat_khau']){
                        $_SESSION['email'] = $login['email'];
                        $_SESSION['mat_khau'] = $login['mat_khau'];
                        $_SESSION['id_role'] = $login['id_role'];
                        header('location: index.php');
                    }
                }else{
                    $alert = "Tài khoản hoặc mật khẩu không chính xác";
                }
            }
        }
        include "app/view/client/page/taikhoan/login.php";
        break;
    case 'register':
        $emailErr = $passErr = $cfpassErr = "";
        if (isset($_POST['dangky'])) {
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $xn_mat_khau = $_POST['xn_mat_khau'];
            if (empty($email)) {
                $emailErr = "Email không được để trống";
            }
            if (empty($mat_khau)) {
                $passErr = "Mật khẩu không được để trống";
            } else {
                $pattern = '/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])\S{6,}$/';
                if (preg_match($pattern, $mat_khau)) {
                    $ok  = 1;
                } else {
                    $passErr = "Mật khẩu phải dài hơn 6 ký tự,có ít nhất 1 chữ hoa, 1 chữ thường và 1 số";
                    $ok  = 0;
                }
            }
            if ($mat_khau != $xn_mat_khau) {
                $cfpassErr = "Mật khẩu xác nhận không khớp";
            }
            if (empty($xn_mat_khau)) {
                $cfpassErr = "Xác nhận mật khẩu không được để trống";
            }
            if (!empty($email) && !empty($mat_khau) && !empty($xn_mat_khau) && $ok == 1 && $mat_khau == $xn_mat_khau) {
                $check = checkRegister($email);
                if (empty($check)) {
                    register($email, $mat_khau);
                    $alert = "Đăng ký thành công";
                } else {
                    $emailErr = "Email đã tồn tại";
                }
            }
        }
        include "app/view/client/page/taikhoan/register.php";
        break;

        case 'logout':
            unset($_SESSION['id_role']);
            unset($_SESSION['email']);
            unset($_SESSION['mat_khau']);
            header('location:index.php');
            break;
}
