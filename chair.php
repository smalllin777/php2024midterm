<html>
<?php
include("include.inc");
?>
<?php
if(isset($_SESSION["check"]) && $_SESSION["check"]=="chair")
{
    
    echo "chair您好，歡迎進入網頁"."</br>";
    echo "<a href='logout.php'>登出</a>";
    

}
else
{
    echo "未通過驗證或非法進入網頁";
}
?>

</html>    