<?php
$output = shell_exec('sudo python ./py/9on.py 2>&1');
echo "<pre>$output</pre>";
@include("./index.php");
exit;
?>
