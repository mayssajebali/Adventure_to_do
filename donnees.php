<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<?php
mysql_connect("localhost","root","")or die("connection impossible a la base");
mysql_select_db("mondb");
$n=$_POST['nom'];
$p=$_POST['pnom'];
$t=$_POST['tel'];
$m=$_POST['email'];
$mt=$_POST['mopas'];
$req="insert into user values ('$n','$p',$t,'$m','$mt');";
$res=mysql_query($req);
if ($res==1)
echo("inscription fait avec succees ");
else
echo("erruer");
?>
</body>
</html>
