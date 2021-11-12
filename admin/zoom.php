<div class="container-fluid">

    <div class="col-lg-12">
        <div class="row">
            <!-- FORM Panel -->
            <div class="col-md-4">
                <form action="upload_room.php" id="manage-room" method="post">
                    <div class="card">
                        <div class="card-header">
                            Room Form
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label class="control-label">Room</label>
                                <input type="text" class="form-control" name="room" id ="room">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <select class="custom-select browser-default" name="category_id" id ="category_id">
                                    <?php
									include("lib_db.php");
									$sql = "select * from room_category ";
									$datas = select_list($sql);
									foreach($datas as $data){
										$name[$data["id"]] = $data["name"];
                                        
                        		?>
                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>

                                    <?php }; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Trạng Thái</label>
                                <select class="custom-select browser-default" name="status" id = "status">
                                    <option value="0">Khả Dụng</option>
                                    <option value="1">Không Khả Dụng</option>
                                </select>
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
            <!-- FORM Panel -->

            <!-- Table Panel -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Category</th>
                                    <th class="text-center">Room</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
									$sql = "select * from rooms ";
									$datas = select_list($sql);
									$i = 1;
                                    // print_r($datas);
									foreach($datas as $data){
                        		?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>

								
									<td class="text-center">
										<?php echo $name[$data["category-id"]]; ?>
									</td>
									<td class="">
										<?php echo $data['room']; ?>
									</td>
                                    <?php if($data['status'] == 0): ?>
										<td class="text-center"><span class="badge badge-success">Available</span></td>
									<?php else: ?>
										<td class="text-center"><span class="badge badge-default">Unavailable</span></td>
									<?php endif; ?>
									<td class="text-center">
                                        <button class="btn btn-sm btn-primary edit_cat" type="button"  data-id="<?php echo $data['id'] ?>" data-room="<?php echo $data['room'] ?>" data-category="<?php echo $data['category-id'] ?>" data-status="<?php echo $data['status'] ?>" >Edit</button>
										<a href="delete_room.php?id=<?php echo $data['id'] ?>"><button class="btn btn-sm btn-danger delete_cat" type="button" >Delete</button>
									</td>
								</tr>
								<?php }; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Table Panel -->
        </div>
    </div>

</div>

<script>
    $('.edit_cat').click(function(){
        $('#id').val($(this).attr("data-id"));
		$('#room').val($(this).attr("data-room"));
        $('#category_id').val($(this).attr("data-category"));
        $('#status').val($(this).attr("data-status"));
	})
</script>