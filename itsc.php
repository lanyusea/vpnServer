<html>
<body>

<?php
$itsc = $_POST["itsc"];
if(empty($itsc))
{
print "email connot be empty";
}
else if (preg_match('~\d~',$itsc)) {
print "no number, thanks";
}
else{
shell_exec("./itsc.sh $itsc");
print "Your password has been sent to ".$itsc."@ust.hk";
}
?>

</body>
</html>
