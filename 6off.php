<?php
$output = shell_exec('sudo python 6off.py 2>&1');
echo "<pre>$output</pre>";
header("Location: ./index.html");
exit;
?>
