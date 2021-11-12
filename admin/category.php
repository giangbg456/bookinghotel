
<style>
    img#cimg, .cimg {
    max-height: 10vh;
    max-width: 6vw;
}
text-center{
    text-align:center;
}

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <form action="upload_category.php" id="manage-category" method="post">
                <div class="card">
                    <div class="card-header">
                        Room Category Form
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id" id = "id">
                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <input type="text" class="form-control" name="name" id = "category" require="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <input type="number" class="form-control text-right" name="price"  id = "price"
                                require="true">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Image</label>
                            <input type="file" class="form-control" name="img"  require="true" id = "img">
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary col-sm-3 offset-md-3" name="submit" > Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Img</th>
                                <th class="text-center">Room</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include("lib_db.php");
                            $sql = "select * from room_category ";
                            $datas = select_list($sql);
 					        $i = 1;
                            foreach($datas as $data){
                        ?>
                        <tr>
									<td class="text-center"><?php echo $i++ ?></td>

								
									<td class="text-center">
										<img src="<?php echo isset($data['img']) ? '../img/'.$data['img'] :'' ?>" alt="" id="cimg">
									</td>
									<td class="">
										<p>Name : <b><?php echo $data['name'] ?></b></p>
										<p>Price : <b><?php echo $data['price'].".000 Đ"?></b></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $data['id'] ?>" data-name="<?php echo $data['name'] ?>" data-price="<?php echo $data['price'] ?>" data-img="<?php echo $data['img'] ?>">Edit</button>
										<a href="delete_category.php?id=<?php echo $data['id'] ?>"><button class="btn btn-sm btn-danger delete_cat" type="button" >Delete</button></a>
									</td>
								</tr>
								<?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    $('.edit_cat').click(function(){
        $('#id').val($(this).attr("data-id"));
		$('#category').val($(this).attr("data-name"));
        $('#price').val($(this).attr("data-price"));
        $('#img').val($(this).attr("data-img"));
	})
</script>