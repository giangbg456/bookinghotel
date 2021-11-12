<?php 

    include('lib_db.php');
    $id =$_REQUEST['id'];

    $sql="UPDATE checked set status = 2 where id=".$id;
    exec_update($sql);
    echo '<script language="javascript">';
    echo 'alert("check out thành công")';
    echo '</script>';
    header("location: admin.php?page=booked");


?>




