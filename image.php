<?php
	$file_exists = 'CourseCertificate.jpg';
	$user_certificate_image='ksFtcCertificate.jpg';
	ob_start();
	set_time_limit(200000);
	ini_set("memory_limit","128M");
	// Set the content type header - in this case image/jpeg
	header('Content-Type: image/jpeg');
				
	$img_type = getimagesize($file_exists);
	
	if($img_type['mime']=="image/jpeg"){
		$im = imagecreatefromjpeg($file_exists) or die("Cannot Initialize new GD image stream");
		
	}else{
		$im = imagecreatefromgif($file_exists) or die("Cannot Initialize new GD image stream");
	}
	
	$white = imagecolorallocate($im, 255,255,255);
	$black = imagecolorallocate($im, 0, 0, 0);
	$name_font = 'arial.ttf';
	$username = "Prakash";
	imagettftext($im, 30,0, 0, 0,$black,$name_font,$user_name);
	@imagecopyresized($im,$im,0,0,0,0,100,100,100,100);
	$save_image = $user_certificate_image;
	imagejpeg($im, $save_image, 80);
	
?>
