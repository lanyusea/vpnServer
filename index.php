<html>
<body>

<b>VPN</b><br>ihome.ust.hk/~hliah<br><br>
-----<br>
This is a private VPN host in HKUST campus.<br>
It is available for ust students this winter due to the Gmail port block. <br>
You are only allowed to use it for checking msg. NO youtube please, limited bandwidth. <br>
You are only allowed to use it on your mobile device. NO laptop/desktop please, limited bandwidth. <br>
For you better Internet experience, please buy your own business VPN, this one is private, thanks.
<br><br>
Note:<br> 
Android users are suggested to install <a href="http://ihome.ust.hk/~hliah/fqrouter2.apk">fqrouter2</a> <br>
PC/Mac please use <a href="http://itsc.ust.hk/services/academic-teaching-support/facilities/virtual-barn/">ust virtual barn</a><br>
Set up your own GoAgent service if you are smart enough.	

<br><br>
The account will be sent to you by email.<br>
You can check the setting method <a href="image.html">here</a> 
<br><br>
<form name='form' method='post' action="itsc.php">
<input type="text" name="itsc" id="name1" >@ust.hk
<input type="submit" name="submitsc" value="Submit">  
</form>
<form name='form' method='post' action="connect.php">
<input type="text" name="connect" id="name2" >@connect.ust.hk
<input type="submit" name="submitect" value="Submit">  
</form>
<?php
if(!empty($_POST)) {
    $itsc= $_POST['itsc'];
    $connect = $_POST['connect'];
}
?>

<br><br><br><br>
</body>
</html>
