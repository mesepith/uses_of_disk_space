<?php

	$partition_name = '/dev/sda2';
	
	$disk_space = exec("df -hl " . $partition_name);
	
	$explode_disk_space = explode(" ", $disk_space);
        
        $disk_arr = array();
        
        $count=0;
        
        for( $i=0; $i<count($explode_disk_space); $i++){
            
            if( ( !empty($explode_disk_space[$i]) ) ){
                
                $count++;
                
                $disk_arr[$count] = $explode_disk_space[$i];
                
            }
            
        }
        
	$disk_space_arr = array();
	
	$total_size = $disk_arr[2];
	
	$disk_space_arr['total_size'] = $total_size;
	
	$used = $disk_arr[3];
	
	$disk_space_arr['used'] = $used;
	
	$available = $disk_arr[4];
	
	$disk_space_arr['available'] = $available;
	
	$perchantage_of_uses = $disk_arr[5];
	
	$disk_space_arr['total_Uses_in_perchantage'] = $perchantage_of_uses;
	
	echo '<pre>';
	print_r($disk_space_arr);
        
	return $disk_space_arr;


?>

