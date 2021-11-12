<?php 

    include("lib_db.php");
    $data['id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['user'] = isset($_POST['user']) ? $_POST['user'] : '';
    $data['pass'] = isset($_POST['pass']) ? $_POST['pass'] : '';
    $data['status'] = isset($_POST['status']) ? $_POST['status'] : '';
    $name = $data['name'];
    $user = $data['user'];
    $pass = $data['pass'];
    $status = $data['status'];
    $id = $data['id'];


    if(isset($_POST["submit"])){
        if($id != "")
        {
            $query = "UPDATE `users` SET `name`='$name',`username`='$user',`password`='$pass',`type`='$status' WHERE `id`= '$id'";
            exec_update($query);
            header("location: admin.php?page=users");

        }
        else{
            $query = "INSERT INTO `users`( `name`, `username`, `password`, `type`) VALUES ('$name','$user','$pass','$status')";
            exec_update($query);
            header("location: admin.php?page=users");
        }
            

    }

?>
