<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <form action="upload_user.php" id="manage-room" method="post">
                <div class="card">
                    <div class="card-header">
                        New User
                    </div>
                    <div class="card-body">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" class="form-control" name="name" id ="name">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" name="user" id ="user">
                            </div>
                            <div class="form-group">
                                <label class="control-label">PassWord</label>
                                <input type="password" class="form-control" name="pass" id ="pass">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Loại Tài Khoản</label>
                                <select class="custom-select browser-default" name="status" id = "status">
                                    <option value="1">Admin</option>
                                    <option value="2">Khách Hàng</option>
                                </select>
                            </div>
                        </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary col-sm-3 offset-md-3" name="submit"> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card col-md-8">
            <div class="card-body">
                <table class="table-striped table-bordered col-md-12">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("lib_db.php");
                            $sql = "select * from users ";
                            $datas = select_list($sql);
 					        $i = 1;
                            foreach($datas as $data){

                        ?>
                        <tr>
                            <td>
                                <?php echo $i++ ?>
                            </td>
                            <td>
                                <?php echo $data['name'] ?>
                            </td>
                            <td>
                                <?php echo $data['username'] ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary edit_cat" type="button"
                                    data-id="<?php echo $data['id'] ?>" data-name="<?php echo $data['name'] ?>" data-user="<?php echo $data['username'] ?>" data-pass="<?php echo $data['password'] ?>" data-status="<?php echo $data['type'] ?>">Edit</button>
                                <a href="delete_user.php?id=<?php echo $data["id"]?>"><button
                                        class="btn btn-sm btn-danger delete_cat" type="button">Delete</button></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    $('.edit_cat').click(function(){
        $('#id').val($(this).attr("data-id"));
		$('#name').val($(this).attr("data-name"));
        $('#user').val($(this).attr("data-user"));
        $('#pass').val($(this).attr("data-pass"));
        $('#status').val($(this).attr("data-status"));
	})
</script>