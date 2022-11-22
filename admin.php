<head>
   <title>PasteDB</title>
</head>
	
	 <div style="background-color:#327fa8;padding:12px;">
      <button type="button" onclick="location.href='/index.html';">Home page</button>
      <button type="button" onclick="location.href='/public.html';">Public pastes</button>
      <button type="button" onclick="location.href='/paste.php';">Submit a paste</button>
      <button type="button" onclick="location.href='/admin.php';">Admin page</button>
  </div>
  <br>

<?php

if(isset($_POST["username"]) AND isset($_POST["password"])){
if($_POST["username"]=="admin" AND $_POST["password"]=="panel") {
	setcookie('cookie','3e3e6b0e5c1c68644fc5ce3cf060211d');
	$_COOKIE['cookie']='3e3e6b0e5c1c68644fc5ce3cf060211d';
	echo "<h1>Welcome to admin panel!</h1>";
	echo "<a href='logout.php'>Logout</a>";
} }
elseif(isset($_COOKIE['cookie']))
	{if($_COOKIE['cookie']=='3e3e6b0e5c1c68644fc5ce3cf060211d')
{
	echo "<h1>Welcome to admin panel!</h1>";
	echo "<a href='logout.php'>Logout</a>";
}
else
{
	header('Location: login.php');
}}
else
{
	header('Location: login.php');
}

?>

