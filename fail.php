<html>
<?php
    include("include.inc");
?>
<?php
    if(isset($_SESSION["check"]) && $_SESSION["check"]=="No")
    {
        echo "非法進入網頁";
        echo "登入失敗"."</br>";
        echo "3秒後回到登入頁面";
        header("Refresh:3;url=index.php");
    }




?>

</html>