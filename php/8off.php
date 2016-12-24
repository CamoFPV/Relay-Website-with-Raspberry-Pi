<?php
$output = shell_exec('sudo python ./py/8off.py 2>&1');
echo "<pre>$output</pre>";
header("Location: /index.php");
exit;
?>
