<?php
$output = shell_exec('sudo python alloff.py 2>&1');
echo "<pre>$output</pre>";
@include("./index.html");
exit;
?>
