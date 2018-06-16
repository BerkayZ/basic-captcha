# basic-captcha
Basic captcha by BerkayZ

Usage:

1) Import CSS files
```
<link rel="stylesheet" href="css/captcha.css"/>
```

2) Add captcha codes to your form
```
<div class='captcha'>
 <table>
  <tr>
    <td><img src='captcha.php'/></td>
    <td><input name='cinput' type='text' placeholder='Captcha' maxlength='5'/></td>
  </tr>
 </table>
</div>
```

3) POST controls
```
if($sendedcode==$_SESSION["sccode"]){
 $info = "TRUE";
}else{
 $info = "FALSE";
}
```

4) Destroy session
```
session_destroy(); 
```
