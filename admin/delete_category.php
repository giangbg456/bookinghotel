<?php 

    include('lib_db.php');
    $id =$_REQUEST['id'];

    $sql="DELETE FROM `room_category` where id=".$id;
    exec_update($sql);
    echo '<script language="javascript">';
    echo 'alert("delete thành công")';
    echo '</script>';
    header("location: admin.php?page=category");


?>