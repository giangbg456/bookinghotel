<?php
    include("lib_db.php");
    $data['roomid'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['contact'] = isset($_POST['contact']) ? $_POST['contact'] : '';
    $data['date_in'] = isset($_POST['date_in']) ? $_POST['date_in'] : '';
    $data['date_out'] = isset($_POST['date_out']) ? $_POST['date_out'] : '';  
    $ref  = sprintf("%'.04d\n",mt_rand(1,9999999999));
    $roomid = $data['roomid']; 
    $name = $data['name'];
    $contact = $data['contact'];
    $date_in1 = date("Y-m-d",strtotime($data['date_in']));
    $date_out1 =date("Y-m-d",strtotime($data['date_out']));
    if(isset($_POST["check"])){        
            // $query = "INSERT INTO `checked`( `name`, `contact`, `date_in`, `date_out`, `room_id`) VALUES ('$name','$contact','$date_in1','$date_out1','$roomid')";
            $query = "INSERT INTO `checked`( `ref_no`, `room_id`, `name`, `contact_no`, `date_in`, `date_out` , `status`) VALUES ('$ref','$roomid','$name','$contact','$date_in1','$date_out1','1')";
            exec_update($query);
            echo '<script language="javascript">';
            echo 'alert("Check in Thành Công!")';
            echo '</script>';
            header("location: admin.php?page=check_in"); 
    }
    
    
?>