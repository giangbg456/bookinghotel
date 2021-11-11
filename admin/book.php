<div class="container-fluid">
	
	<form action="" id="manage-check">
		<input type="hidden" name="cid" value="<?php echo isset($_GET['cid']) ? $_GET['cid']: '' ?>">
		<input type="hidden" name="rid" value="<?php echo isset($_GET['rid']) ? $_GET['rid']: '' ?>">


		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="contact">Contact #</label>
			<input type="text" name="contact" id="contact" class="form-control" value="<?php echo isset($meta['contact_no']) ? $meta['contact_no']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="date_in">Check-in Date</label>
			<input type="date" name="date_in" id="date_in" class="form-control" value="<?php echo isset($_GET['in']) ? date("Y-m-d",strtotime($_GET['in'])): date("Y-m-d") ?>" required readonly>
		</div>
		<div class="form-group">
			<label for="date_in_time">Check-in Date</label>
			<input type="time" name="date_in_time" id="date_in_time" class="form-control" value="<?php echo isset($_GET['date_in']) ? date("H:i",strtotime($_GET['date_in'])): date("H:i") ?>" required>
		</div>
		<div class="form-group">
			<label for="days">Days of Stay</label>
			<input type="number" min ="1" name="days" id="days" class="form-control" value="<?php echo isset($_GET['in']) ? $calc_days: 1 ?>" required readonly>
		</div>
	</form>
</div>