<html>
<body background="img\cool-background.jpg">

<!logo>
<div style="position:absolute; top:0;">
<img src="img\logo.png" width="200" height="200">
</div>
<!end logo>
<?php
$fp=fopen("ord.txt","r");
echo"<h1><center><font size=7 color=yellow><u>CUSTOMER DETAILS</u></font></h1>";
while(!feof($fp))
{
$a=fgets($fp,255);
echo "<center><font size=5 color=white>".$a."<br>";

}
fclose($fp);
?>
</body>
</html>