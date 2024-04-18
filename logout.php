<?php

session_start();
$_SESSION["check"]="No";
header("Location:index.php");
?>
<?php
include("footer.inc");
?>