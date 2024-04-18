<html>
<?php
include("include.inc");
?>
<?php
if(isset($_SESSION["check"]) && $_SESSION["check"]=="reviewer")
{
    echo "<a href='logout.php'>登出</a>";
}
else
{
    echo "未通過驗證或非法進入網頁";
}
?>
<form action = "showreview.php" method = "post">
<center><h1>Reviewer您好，歡迎進入論文評論網頁</h1></center>
論文評審決定：
<input type="radio" name="scheck" value="accept">Accept
<input type="radio" name="scheck" value="minor revision">Minor Revision
<input type="radio" name="scheck" value="major revision">Major Revision
<input type="radio" name="scheck" value="reject" checked>Reject
</br>
論文評論評語：</br>
<textarea name="sComment" value="" rows="30">
</textarea> </br>  
<input type="submit" value="提交">
</br>
</form>
<?php
include("footer.inc");
?>
</html>   