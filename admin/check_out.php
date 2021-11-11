<?php 
    include("lib_db.php");

    $sql = "select * from room_category ";
    $datas = select_list($sql);
    foreach($datas as $data){
        $name[$data["id"]] = $data["name"];
    }      

    $sql = "select * from rooms ";
    $datas = select_list($sql);
    foreach($datas as $data){
        $name1 =  $name[$data["category-id"]];
        $name_room = $data["room"];
    }         
?>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>#</th>
                                <th>Category</th>
                                <th>Room</th>
                                <th>Reference</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php 
                                    $i=1;
                                    $sql = "select * from checked ";
                                    $datas = select_list($sql);
                                    foreach($datas as $data){
                                        
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $i++ ?></td>
                                    <td class="text-center">
                                        <?php echo $name1 ?></td>
                                    <td class=""><?php echo $name_room ?></td>
                                    <td class=""><?php echo $data['ref_no'] ?></td>
                                    <?php if($data['status'] == 1): ?>
                                    <td class="text-center"><span class="badge badge-warning">Checked-IN</span></td>
                                    <?php else: ?>
                                    <td class="text-center"><span class="badge badge-success">Checked-Out</span></td>
                                    <?php endif; ?>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-primary check_out" type="button"
                                            data-id="<?php echo $data['id'] ?>">View</button>
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
</div>