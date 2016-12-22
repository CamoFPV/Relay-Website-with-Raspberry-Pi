<?php
$output = shell_exec('sudo python 12on.py 2>&1');
echo "<pre>$output</pre>";
header("Location: ./index.html");
exit;
?>
