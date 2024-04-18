<meta charset=utf8>
<?php

$title=$_POST["title"];
echo "您的論文標題：". $title."</br>";
$name=$_POST["authorname"];
echo "您的姓名：".$name."</br>";
$email=$_POST["email"];
echo "您的email：".$email."</br>";
$sComment=$_POST["sComment"];
echo "您的論文概要：".$sComment."</br>";
?>