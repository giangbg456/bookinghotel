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
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Tel</th>
                        <th class="text-center">Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                    
									$sql = "select * from phanhoi ";
									$datas = select_list($sql);
									$i = 1;
                                    // print_r($datas);
									foreach($datas as $data){
                        		?>
                    <tr>
                        <td class="text-center"><?php echo $i++ ?></td>


                        <td class="text-center">
                            <?php echo $data["name"]; ?>
                        </td>
                        <td class="text-center">
                            <?php echo $data['mail']; ?>
                        </td>
                        
                        <td class="text-center">
                            <?php echo $data['tel']; ?>
                        </td>
                        
                        <td class="text-center">
                        <?php echo $data['mes']; ?>
                        </td>
                    </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>