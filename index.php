<html>
<?php
include("include.inc");
?>

<head>
<meta charset="utf-8">
<title>
高大資管論文投稿系統
</title>
</head>
<form action = "check.php" method = "post">
<center><h1>高大資管論文投稿系統</h1><center>
請選擇您的角色：
<select name="character">
<option value="chair">Chair
<option value="reviewer">Reviewer
<option value="author">Author
</select>
</br>
帳號：<input type="text" name="uId" ><br/>
密碼：<input type="password" name="uPWD" required><br/>
<input type="submit" value="提交">
</form>

<?php

if(isset($_COOKIE["username"])){
    echo $_COOKIE["username"];
}else{
    echo "";
}

?>
</html>   