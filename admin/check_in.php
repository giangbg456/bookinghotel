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
                            <button class="btn btn-sm btn-primary check_in" type="button" data-toggle="modal"
                                data-target="#modal_checkin" data-id="<?php echo $data['category-id'] ?>">Check-in</button>
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


<div class="modal fade" id="modal_checkin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle">Edit Check In</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="body_edit">
                <div class="container-fluid">

                    <form action="form_checkin.php" id="manage-check" method="post">
                        <input type="hidden" name="id" id="id" class="form-control" value="" required>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact #</label>
                            <input type="text" name="contact" id="contact" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="date_in">Check-in Date</label>
                            <input type="date" name="date_in" id="date_in" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="date_in_time">Check-out Date</label>
                            <input type="date" name="date_out" id="date_out" class="form-control" value="" required>
                        </div>
                        <button name="check" class="btn-primary" id='submit'>Check In</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("click", '.check_in', function() {
    var id = $(this).attr("data-id");
    $('#id').val(id);

});
</script>