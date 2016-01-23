<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Administrator</title>
<link rel="stylesheet" type="text/css" href="style_login.css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

<link rel="shortcut icon" href="images/images_login/icon.ico" />

<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>

</head>

<body OnLoad="document.login.username.focus();">
<div id="main">

<!-- Header -->
<div id="header"><h1><center>Administrator</center></h1></div>

<!-- Middle -->
<div id="middle">
<form id="form-login" name="login" method="post" action="cek_login.php" onSubmit="return validasi(this)">
  
  <img src="images/images_login/user.png" align="absmiddle" class="imguser" />
  <input placeholder="Username" type="text" name="username" size="29" id="input" />
  <br />
	
  <img src="images/images_login/password.png" align="absmiddle" class="imgpass" />
  <input placeholder="Password" type="password" name="password" size="29" id="input" />
  <br />
  
  <input class="submit" name="Submit" type="submit" value="Submit" id="submit" align="absmiddle" />
</form>
</div>

<!-- don't Change ;) -->
<div class="clear"></div>

<!-- Footer -->
<div id="footer"><i>Copyright &copy; 2013 @ Training BBLM. All rights reserved.</i></div>

</div>
</body>
</html>
