<?php
date_default_timezone_set('Asia/Kuala_Lumpur');
if (isset($_POST["encoded_string"])){
	$encoded_string= $_POST["encoded_string"];
	$image_name = $_POST["image_name"];
	$decoded_string = base64_decode($encoded_string);
	$path = 'images/' .$image_name;
	$file = fopen($path,'wb');
	$is_written = fwrite($file, $decoded_string);
	fclose($file);
	if($is_written > 0){
		echo "Success";
	}else{
		echo "Failed";
	}
}
?>
