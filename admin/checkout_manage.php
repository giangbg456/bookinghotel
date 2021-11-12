<?php
	if(isset($_POST["id"]))  
	{  
		 $output = '';  
		 $connect = mysqli_connect("localhost", "root", "", "quanlyhotel");  
		 $query = "SELECT checked.name as name1 , room_category.name as name2 , ref_no , contact_no ,date_in,date_out, price FROM checked,room_category WHERE checked.room_id = room_category.id and checked.id = '".$_POST["id"]."'";  
		 $result = mysqli_query($connect, $query);  
		 $output .= '';
		 while($row = mysqli_fetch_array($result))  
		 {  
			$calc_days = abs(strtotime($row["date_in"]) - strtotime($row["date_out"])) ; 
			$calc_days =floor($calc_days / (60*60*24)  );
			$price = $row['price'] * $calc_days;

			  $output .= '  
			<p><b>Room Category : </b>'.$row["name2"].'</p>
			<p><b>Room Price : </b>'.$row['price'].'.000 Đ</p>
			<p><b>Reference no : </b> '.$row["ref_no"].' </p>
			<p><b>Checked In : </b>'.$row["name1"].'</p>
			<p><b>Contact no : </b>'.$row["contact_no"].'</p>
			<p><b>Check-in Date/Time : </b>'.$row["date_in"].'</p>
			<p><b>Check-out Date/Time : </b>'.$row["date_out"].'</p>
			<p><b>Days : </b>'.$calc_days.'</p>
			<p><b>Amount (Price * Days) : </b>'.$price.'.000 Đ</p>
			';
		}
		echo $output;

	}
?>