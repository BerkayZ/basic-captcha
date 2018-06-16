# basic-captcha
Basic captcha by BerkayZ

![Screenshot](https://user-images.githubusercontent.com/40277294/41499991-932ab86e-7192-11e8-9600-6c84282f8a1b.PNG)

# Usage:

## 1) Import CSS files
```html
<link rel="stylesheet" href="css/captcha.css"/>
```

## 2) Add captcha codes to your form
```html
<div class='captcha'>
 <table>
  <tr>
    <td><img src='captcha.php'/></td>
    <td><input name='cinput' type='text' placeholder='Captcha' maxlength='5'/></td>
  </tr>
 </table>
</div>
```

## 3) POST controls
```php
$postedcode = $_POST['cinput'];
if($postedcode==$_SESSION["sccode"]){
 $info = "TRUE";
}else{
 $info = "FALSE";
}
```

## 4) Destroy session
```php
session_destroy(); 
```
