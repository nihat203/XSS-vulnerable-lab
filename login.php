<head>
   <title>PasteDB</title>
</head>
	
	 <div style="background-color:#327fa8;padding:12px;">
      <button type="button" onclick="location.href='/index.html';">Home page</button>
      <button type="button" onclick="location.href='/public.html';">Public pastes</button>
      <button type="button" onclick="location.href='/paste.php';">Submit a paste</button>
      <button type="button" onclick="location.href='/admin.php';">Admin page</button>
  </div>
  

<form action="admin.php" method="post" style="	text-align:center; width: 400px;">
	<p>
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" class="input-field">
	</p>
		 <p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
	</p>
		<p><input type="submit" value="Login"></span></p>
</form>