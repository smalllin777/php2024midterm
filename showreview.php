<meta charset=utf8>
<?php
include("include.inc");
?>
<?php

$scheck=$_POST["scheck"];
echo "您的論文評審決定：". $scheck."</br>";
$sComment=$_POST["sComment"];
echo "您的評語：".$sComment."</br>";
?>
<?php
include("footer.inc");
?>