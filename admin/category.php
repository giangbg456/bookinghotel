
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
            <form action="" id="manage-category">
                <div class="card">
                    <div class="card-header">
                        Room Category Form
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <input type="text" class="form-control" name="name" require="true">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <input type="number" class="form-control text-right" name="price" step="5" min="0"
                                require="true">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Image</label>
                            <input type="file" class="form-control" name="img" onchange="" require="true">
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
                                <button class="btn btn-sm btn-default col-sm-3" type="button" onclick="">
                                    Cancel</button>
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
										<button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $data['id'] ?>" data-name="<?php echo $data['name'] ?>" data-price="<?php echo $data['price'] ?>" data-cover_img="<?php echo $data['img'] ?>">Edit</button>
										<button class="btn btn-sm btn-danger delete_cat" type="button" data-id="<?php echo $data['id'] ?>">Delete</button>
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
		start_load()
		var cat = $('#manage-room')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='room']").val($(this).attr('data-room'))
		cat.find("[name='category_id']").val($(this).attr('data-category_id'))
		cat.find("[name='status']").val($(this).attr('data-status'))
		end_load()
	})
</script>