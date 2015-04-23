<?php
function getNumberOfDays($startDate,$endDate) {
    $date1  = strtotime($startDate);
    $date2  = strtotime($endDate);
	if($date2 < $date1)
	    $res    =  (int)(($date1-$date2)/86400);     
	else
		$res    =  (int)(($date2-$date1)/86400);        
	return $res;
} 

echo getNumberOfDays(date("Y-m-d"),"2014-10-10 00:00:00");exit;
?>
<?php
$y=0;
for($x=504; $x>=33; $x--){
$y = $x+1;
}
echo $x;
echo "<br/>";exit;
?>
<?php

	$date1  = strtotime("");
    $date2  = strtotime(date("Y-m-d H:i:s"));
    $res    =  (int)(($date2-$date1)/86400);  
	echo $res;
	exit;
	
	// create base image
$photo = imagecreatefromjpeg("front.jpg");
$frame = imagecreatefrompng("backcover.png");

// get frame dimentions
$frame_width = imagesx($frame);
$frame_height = imagesy($frame);

// get photo dimentions
$photo_width = imagesx($photo);
$photo_height = imagesy($photo);

// creating canvas of the same dimentions as of frame
$canvas = imagecreatetruecolor($frame_width,$frame_height);

// make $canvas transparent
imagealphablending($canvas, false);
$col=imagecolorallocatealpha($canvas,255,255,255,127);
imagefilledrectangle($canvas,0,0,$frame_width,$frame_height,$col);
imagealphablending($canvas,true);    
imagesavealpha($canvas, true);

// merge photo with frame and paste on canvas
imagecopyresized($canvas, $photo, -162, -50, 0, 0, $frame_width, $frame_height,$photo_width, $photo_height); // resize photo to fit in frame
imagecopy($canvas, $frame, 0, 0, 0, 0, $frame_width, $frame_height);

// return file
header('Content-Type: image/png');
imagepng($canvas);

// destroy images to free alocated memory
imagedestroy($photo);
imagedestroy($frame);
imagedestroy($canvas);
	/*$dest = imagecreatefromjpeg("front.jpg");
	$src = imagecreatefrompng("backcover.png");
	
	imagecopyresampled($dest, $src, 0, 0, 0, 0, 275, 709, 567, 586); 
	
	header('Content-Type: image/png');
	imagejpeg($dest, "test_m.jpeg");*/
	
	//imagedestroy($dest);
	//imagedestroy($src);
?>
