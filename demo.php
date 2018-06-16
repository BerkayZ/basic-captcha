<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <head>
	     <title>Captcha Demo</title>
		 <!-- Import files bellow -->
		 <link rel="stylesheet" href="css/captcha.css"/>
	 </head>
	 <body>
	     <h1 style="margin:3px;">Captcha Demo</h1>
		 <span style="margin:3px;">Basic Captcha by <a href="https://github.com/BerkayZ">BerkayZ (GitHub)</a>. You can add this to your website with no linking.</span>
	     <br/><br/>
		 <form action="post.php" method="POST">
		     <div class='captcha'>
		         <table>
		             <tr>
				         <td><img src='captcha.php'/></td>
			             <td><input name='cinput' type='text' placeholder='Captcha' maxlength='5'/></td>
				     </tr>
			     </table>
		     </div>
		 <button class="csubmit_btn" type="submit">SUBMIT</button>
		 </form
	 </body>
</html>