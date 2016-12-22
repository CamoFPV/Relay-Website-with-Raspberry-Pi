<?php
$output = shell_exec('sudo python allon.py 2>&1');
echo "<pre>$output</pre>";
@include("./index.html");
exit;
?>
