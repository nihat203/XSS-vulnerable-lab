<head>
   <title>PasteDB</title>
</head>

<?php
$_COOKIE['cookie']='';
unset($_COOKIE['cookie']);
setcookie('cookie',null,-1,'/');
header('Location: login.php');

   ?>