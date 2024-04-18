<html>

<?php
include("include.inc");
?>
<?php
if(isset($_SESSION["check"]) && $_SESSION["check"]=="author")
{
    echo "<a href='logout.php'>登出</a>";
}
else
{
    echo "未通過驗證或非法進入網頁";
}
?>
<form action = "showpaper.php" method ="post">
<center><h1>Author您好，歡迎進入論文投稿網頁</h1><center>
論文標題：</br>
<input type="text" name="title"><br/>
作者姓名：<input type="text" name="authorname"></br>
作者Email：<input type="text" name="email"></br>
論文投稿：</br>
<textarea name="sComment" value="" rows="30">
</textarea> </br>  
<input type="submit" value="提交">

</br>
</form>
<?php
include("footer.inc");
?>
</html>    