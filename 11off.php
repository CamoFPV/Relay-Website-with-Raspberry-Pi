<?php
$output = shell_exec('sudo python ./py/11off.py 2>&1');
echo "<pre>$output</pre>";
@include("./index.php");
exit;
?>
