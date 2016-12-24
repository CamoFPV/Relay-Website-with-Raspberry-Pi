<?php
$output = shell_exec('sudo python ./py/alloff.py 2>&1');
echo "<pre>$output</pre>";
header("Location: /index.php");
exit;
?>
