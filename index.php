<!DOCTYPE html>
<html>
<head><title>membuat from Login dengan javascript</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
</br>
<br/>
<center><h2>LOGIN</h2></center>
<br/>
<div class="login">
<br/>
<form action="login.php" method="post" onsubmit="return validasi()">
<div>
<label>Username:</label>
<input type="text" name="username" id="username"/>
</div>
<div>
<label>Password:</label>
<input type="password:" name="password" id="password"/>
</div>
<div>
<input type="submit" value="Login" class="tombol"/>
</div>
</form>
</div>
</body>
<script type="text/javascript">
function validasi(){
	var username = document.getElementByld("username").value;
	var password = document.getElementBild("password").value;
	if(username!=""&&password!=""){
		return true;
	} else {
		alert('Username dan Password harus diisi');
return false;}}
</script>
</html>