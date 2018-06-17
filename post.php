<?php
     session_start();
	 ob_start();
	 
	 /*
	     Captcha script by BerkayZ > https://wwww.github.com/BerkayZ
	     Example post file
	 */
	 
	 $info="";
	 $sendedcode = $_POST['cinput'];
	 if(isset($_SESSION["sccode"])){
	     if($sendedcode==$_SESSION["sccode"]){
		     $info = "TRUE";
	     }else{
		     $info = "FALSE";
	     }
     }
	 session_destroy(); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Captcha Demo</title>
   </head>
   <!-- Example post file -->
   <body>
      <?php echo $info; ?>
   </body>
</html>
