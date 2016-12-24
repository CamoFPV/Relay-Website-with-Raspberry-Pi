<?php
$output = shell_exec('sudo python ./py/allon.py 2>&1');
echo "<pre>$output</pre>";
@include("./index.php");
exit;
?>
