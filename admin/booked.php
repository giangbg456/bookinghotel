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
                        <button class="btn btn-sm btn-primary check_out" type="button"
                            data-id="<?php echo $data['id'] ?>">View</button>
                    </td>
                </tr>

                <?php };?>
            </tbody>
        </table>
    </div>
</div>

<script>
	$('table').dataTable()
	$('.check_out').click(function(){
		uni_modal("Check Out","manage_checkout.php")
	})
	$('#filter').submit(function(e){
		e.preventDefault()
		location.replace('index.php?page=check_in&category_id='+$(this).find('[name="category_id"]').val()+'&status='+$(this).find('[name="status"]').val())
	})
</script>