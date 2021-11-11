<?php
    include("lib_db.php");
    $sql = "select * from room_category ";
	$datas = select_list($sql);
    foreach($datas as $data){
        $name[$data["id"]] = $data["name"];
    }
?>
<div class="col-md-12">
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
											<button class="btn btn-sm btn-primary check_in" type="button" data-id="<?php echo $data['id'] ?>">Check-in</button>
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