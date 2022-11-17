<head>
   <title>PasteDB</title>
</head>
<body>
	
	 <div style="background-color:#327fa8;padding:12px;">
      <button type="button" onclick="location.href='/index.html';">Home page</button>
      <button type="button" onclick="location.href='/public.html';">Public pastes</button>
      <button type="button" onclick="location.href='/paste.php';">Submit a paste</button>
      <button type="button" onclick="location.href='/admin.php';">Admin page</button>
    </div>
<div align="center">
   <form method="GET" action="" name="form">
      <p>Your name:<input type="text" name="name" required></p>
      <p>Your paste:<textarea id="paste" name="paste" rows="6" maxlength="3000" required></textarea></p>
   <input type="submit" name="submit" value="Submit">
</form>
	</div>
<?php
if(isset($_GET["name"]) AND isset($_GET["paste"]))
{
	echo("Your name is ".$_GET["name"]);
   echo("<br>");
   echo("Your paste is ".$_GET["paste"]);
   exec("echo '<h1>Paste#</h1><h2>Name: ".$_GET["name"]."</h2><h3>Paste: ".$_GET["paste"]."</h3><br>'>>public.html");
}
?>
</body>