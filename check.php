<?php


	$partition_name = '/dev/sda2';
	
	$disk_space = exec("df -hl " . $partition_name);
	
	$explode_disk_space = explode(" ", $disk_space);
	
	$disk_space_arr = array();
	
	$total_size = $explode_disk_space[7];
	
	$disk_space_arr['total_size'] = $total_size;
	
	$used = $explode_disk_space[9];
	
	$disk_space_arr['used'] = $used;
	
	$available = $explode_disk_space[11];
	
	$disk_space_arr['available'] = $available;
	
	$perchantage_of_uses = $explode_disk_space[13];
	
	$disk_space_arr['total_Uses_in_perchantage'] = $perchantage_of_uses;
	
	echo '<pre>';
	print_r($disk_space_arr);


?>
