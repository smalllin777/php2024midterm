<?php
include("include.inc");
?>

<?php
$sId1="chair";
$sId2="reviewer";
$sId3="author";
$sPWD1="123";
$sPWD2="234";
$sPWD3="345";

$uId=$_POST["uId"];
$uPwd=$_POST["uPWD"];
$date=strtotime("+7 days",time());

if($sId1 == $uId && $sPwd1== $uPwd)
{
    setcookie("username",$uId,$date);
    $_SESSION["check"]="chair";
    header("Location:chair.php");
}elseif($sId2 == $uId && $sPwd2== $uPwd)
{
    setcookie("username",$uId,$date);
    $_SESSION["check"]="reviewer";
    header("Location:reviewer.php");
}elseif($sId3 == $uId && $sPwd3== $uPwd)
{
    setcookie("username",$uId,$date);
    $_SESSION["check"]="author";
    header("Location:author.php");
}else
{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}

?>
<?php
include("footer.inc");
?>