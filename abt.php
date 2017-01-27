<?php

session_start();
?>
<html>
<body background="img\cool-background.jpg" >
<h1><center><font  color=yellow size="7"><u>ABOUT CRETIN</u></font></center></h1>
 <!logo>
<div style="position:absolute; top:0;">
<img src="img\logo.png" width="200" height="200">
</div>
<!end logo>
<center>
<font color=white size=5 >
Cratin is a fashion marketplace for women, with a focus on personalization.<br> 
We believe every woman canbe fashionable everyday.<br>
To deliver this promise, we have built a sophisticated stylist recommendation functionality.<br>
Using our in-house AI platform, we help users discover the most relevant fashion that <br>
suits their body, lifestyle, personality and budget.<br> 
<br>
At Cratin, we strive to provide everything that women require a vast collection of fashionable products <br>
from Indian and International manufacturers at low prices to suit every budget and reliable delivery.<br>
 Our robust systems provide complete purchase protection in every transaction.<br>
<br>
Customers can shop using Cratin Android App, iOS, website, and pick from a<br>
 large collection of sarees, kurta kurtis, dress material, dresses, tops, jeans,<br>
 jeggings, leggings, jewellery, lingerie, footwear, beauty products and more.<br>
<br>
We keep enhancing our technology and product assortment to ensure that Cratin<br>
 is the most delightful shopping experience for every woman.<br>
 <br>
</font>
<?php


if(isset($_SESSION['visits']))
$_SESSION['visits']=$_SESSION['visits']+1;

else
$_SESSION['visits']=1;
echo "<center><fieldset><br><font size=7 color=yellow><b>Following : </font></b><br><i> <font size=6 color=black>";
echo $_SESSION['visits']."<b> hundred peoples looking up for the brands</font>.</i>";
echo "<b><br><font size=7 color=yellow>Contact us :</font></b> <br>";
echo "<font size=6 color=red><u>Address : </u></font><i><b><font size=6 color=black>B Chetganj Apartment, near VJ Mall , Varanasi</i></font>";
echo "<font size=6 color=red><br>Phone : </font><i><b><u><font size=6 color=yellow>0542-2345677</font></i>";





?>