<?php
session_start();
ob_start();
session_destroy();
header("Refresh: 0; url=index.php");
ob_end_flush();
exit();
?>