<?php 

    include("lib_db.php");
    
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['price'] = isset($_POST['price']) ? $_POST['price'] : '';
    $data['img'] = isset($_POST['img']) ? $_POST['img'] : '';
    $data['id'] = isset($_POST['id']) ? $_POST['id'] : '';
    $name = $data['name'];
    $price = $data['price'];
    $img = $data['img'];
    $id = $data['id'];

    if(isset($_POST["submit"])){
        if($id != "")
        {
            $query = "UPDATE `room_category` SET `name`='$name',`price`='$price',`img`='$img' WHERE `id`= $id";
            exec_update($query);
            header("location: admin.php?page=category");

        }
        else{
            $query = "INSERT into room_category(name,price,img ) VALUES ('$name','$price','$img')";
            exec_update($query);
            header("location: admin.php?page=category");
        }
            

    }

?>
