<?php
     $date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
     $date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d',strtotime(date('Y-m-d').' + 1 days'));

?>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="container">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLongTitle">Book</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="admin/insert_booking.php" id="manage-check" method="post">
                        
                        <input type="hidden" name="id" id="roomID" value="">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact #</label>
                            <input type="text" name="contact" id="contact" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label for="date_in">Check-in Date</label>
                            <input type="date" class="form-control datepicker" id="checkin" name="date_in"
                                autocomplete="off" value="<?php echo $date_in?>">
                        </div>
                        <div class="form-group">
                            <label for="date_in">Check-out Date</label>
                            <input type="date" class="form-control datepicker" id="checkout" name="date_out"
                                autocomplete="off" value="<?php echo $date_out?>">
                        </div>
                        <button name="save" class="btn-primary" style="float:right; font-size:20px;"
                            id='submit'>Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
