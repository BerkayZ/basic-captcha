<?php
     session_start();
	 ob_start();
	 
     /* 
	    Captcha script by BerkayZ > https://wwww.github.com/BerkayZ
	    You can use this with no linking.
	 */
	 
     $ccodelngth = 5;
	 $font = "fonts/veteran_typewriter.ttf";
	 $ccode = substr(md5(rand(0,99999)),0,$ccodelngth);
	 $_SESSION["sccode"] = $ccode;
     $img = ImageCreate(85, 30);
	 $text_color = ImageColorAllocate($img,255,255,255);
     $back_color = ImageColorAllocateAlpha($img, 255, 255, 255, 127);
	 ImageFill($img,4,5,$back_color);
     ImageTTFText($img,20,0,5,25,$text_color,$font,$ccode);
     header('Content-type: image/png');
     ImagePNG($img);
     ImageDestroy($img);

?>