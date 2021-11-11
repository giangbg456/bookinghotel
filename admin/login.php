<?php
    session_start();

    $error = array();
    $data = array();
 
    //lấy dữ liệu từ post đưa vào mảng data
    $data['username'] = isset($_POST['username']) ? $_POST['username'] : '';
    $data['password'] = isset($_POST['password']) ? $_POST['password'] : '';
 
    $username = $data['username'];
    $password = $data['password'];
    
 
    $query = "SELECT COUNT(*) FROM users WHERE username = '$username' AND PASSWORD = '$password'";
    
    //thực thi truy vấn
    $data = select_one($query);
    $count = 0;
        foreach ($data as $item) {
            $count += $item;
        }
    if ($count>0) {
 
        $_SESSION['username'] = $username;
        
        //đăng nhập vào trang chính
        
        header("Location:admin/admin.php");
        die();
    }
    else
    {
         echo '<script language="javascript">';
         echo 'alert("Tên đăng nhập hoặc mật khẩu không đúng !")';
         echo '</script>';
    }
 
    if (isset($_POST["submit"])) {
        echo '<script language="javascript">';
        echo 'alert("Tên đăng nhập hoặc mật khẩu không đúng !")';
        echo '</script>';    
    }

?>