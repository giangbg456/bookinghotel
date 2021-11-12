<?php 

    include('lib_db.php');
    $id =$_REQUEST['id'];
    $sql="DELETE FROM `users` where id=".$id;
    exec_update($sql);
    echo '<script language="javascript">';
    echo 'alert("delete thành công")';
    echo '</script>';
    header("location: admin.php?page=users");


?>