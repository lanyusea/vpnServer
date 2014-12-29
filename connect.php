<html>
<body>

<?php
$connect= $_POST["connect"];
if(empty($connect))
{
print "email connot be empty";
}
else if (preg_match('~\d~',$connect) ){
print "no number, thanks";
}
else{
shell_exec("./connect.sh $connect");
print "Your password has been sent to ".$connect."@connect.ust.hk";
}
?>

</body>
</html>
