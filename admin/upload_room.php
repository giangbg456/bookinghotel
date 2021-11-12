<?php 

    include("lib_db.php");
    
    $data['room'] = isset($_POST['room']) ? $_POST['room'] : '';
    $data['category_id'] = isset($_POST['category_id']) ? $_POST['category_id'] : '';
    $data['status'] = isset($_POST['status']) ? $_POST['status'] : '';
    $data['id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $room = $data['room'];
    $category = $data['category_id'];
    $status = $data['status'];
    $id = $data['id'];


    if(isset($_POST["submit"])){
        if($id != "")
        {
            $query = "UPDATE `rooms` SET `room`='$room',`category-id`='$category',`status`='$status' WHERE  `id`= $id";
            exec_update($query);
            header("location: admin.php?page=zoom");

        }
        else{
            $query = "INSERT INTO `rooms`( `room`, `category-id`, `status`) VALUES ('$room','$category','$status')";
            exec_update($query);
            header("location: admin.php?page=zoom");
        }
            

    }

?>
