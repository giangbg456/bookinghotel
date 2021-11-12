<?php  
    include("lib_db.php");
    $data['id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['contact'] = isset($_POST['contact']) ? $_POST['contact'] : '';
    $data['date_in'] = isset($_POST['date_in']) ? $_POST['date_in'] : '';
    $data['date_out'] = isset($_POST['date_out']) ? $_POST['date_out'] : '';  
    $id = $data['id']; 
    $name = $data['name'];
    $contact = $data['contact'];
    $date_in1 = date("Y-m-d",strtotime($data['date_in']));
    $date_out1 =date("Y-m-d",strtotime($data['date_out']));
    if(isset($_POST["update"])){        
        // $query = "INSERT INTO `checked`( `name`, `contact`, `date_in`, `date_out`, `room_id`) VALUES ('$name','$contact','$date_in1','$date_out1','$roomid')";
        $query = "UPDATE `checked` SET `name`='$name',`contact_no`='$contact',`date_in`='$date_in1',`date_out`='$date_out1' WHERE `id`='$id'";
        exec_update($query);
        echo '<script language="javascript">';
        echo 'alert("update thành công")';
        echo '</script>';
        header("location: admin.php?page=check_out");
    }
 ?>