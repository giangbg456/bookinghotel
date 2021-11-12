<?php
     include("lib_db.php");
     $sql = "SELECT * FROM room_category ";
     $datas = select_list($sql);
     foreach($datas as $data){
        $name[$data["id"]] = $data["name"];
     };
?>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Reference</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   
                    $sql = "SELECT * FROM checked where status = 0 order by status desc, id asc ";
                    $datas = select_list($sql);
 					$i = 1;
                    foreach($datas as $data){
                        
                ?>
                <tr>
                    <td class="text-center"><?php echo $i++ ?></td>
                    <td class="text-center"><?php echo $name[$data["room_id"]]?></td>
                    <td class=""><?php echo $data['ref_no'] ?></td>
                    <td class="text-center"><span class="badge badge-warning">Booked</span></td>
                    <td class="text-center">
                        <button class="btn btn-primary check_out" type="button" data-toggle="modal" data-target="#modal"
                            data-id="<?php echo $data['id'] ?>">View</button>
                        <a href="checkout_booking.php?id=<?php echo $data['id']?>"><button type="button"
                                class="btn btn-primary" id="checkout">Checkout</button></a>
                        <button type="button" class="btn btn-primary" id="edit_checkin" data-toggle="modal"
                            data-target="#modal_edit" data-id="<?php echo $data['id'] ?>"
                            data-name="<?php echo $data['name'] ?>" data-contact="<?php echo $data['contact_no'] ?>"
                            data-datein="<?php echo $data['date_in'] ?>"
                            data-dateout="<?php echo $data['date_out'] ?>">Edit</button>
                    </td>
                </tr>

                <?php };?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle">Check Out</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="employee_detail">

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
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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

                    <form action="edit_checkin.php" id="manage-check" method="post">
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
                        <button name="update" class="btn-primary"
                            id='submit'>Save</button>
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
$(document).on('click', '.check_out', function() {
    var id = $(this).attr("data-id");
    if (id != '') {
        $.ajax({
            url: "manage_checkout.php",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                $('#employee_detail').html(data);
                $('#modal').modal('show');
            }
        });
    }
});

$(document).on("click", '#edit_checkin', function() {
    var id = $(this).attr("data-id");
    var name = $(this).attr("data-name");
    var contact = $(this).attr("data-contact");
    var datein = $(this).attr("data-datein");
    var dateout = $(this).attr("data-dateout");
    $('#id').val(id);
    $('#name').val(name);
    $('#contact').val(contact);
    $('#date_in').val(datein);
    $('#date_out').val(dateout);
    $('#modal_edit').modal('show');
});
</script>