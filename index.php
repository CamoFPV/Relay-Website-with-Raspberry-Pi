<head>
<link rel="stylesheet" href="./assets/style.css" type="text/css" />
</head>
<body>
<div class="container">
    <input class="MyButtonON" style="margin-left:25px" type="button" value="Relay 1 ON" onclick="window.location.href='./php/1on.php'" />
    <input class="MyButton" style="margin-right:16px" type="button" value="OFF" onclick="window.location.href='./php/1off.php'" />
    <input class="MyButtonON" type="button" value="Relay 9 ON" onclick="window.location.href='./php/9on.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/9off.php'" />
    <input class="MyButtonON" style="margin-left:25px" type="button" value="All Relays ON" onclick="window.location.href='./php/allon.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/alloff.php'" />
</div>
<br />
<div class="container">
    <input class="MyButtonON" style="margin-left:25px" type="button" value="Relay 2 ON" onclick="window.location.href='./php/2on.php'" />
    <input class="MyButton" style="margin-right:16px" type="button" value="OFF" onclick="window.location.href='./php/2off.php'" />
    <input class="MyButtonON" type="button" value="Relay 10 ON" onclick="window.location.href='./php/10on.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/10off.php'" />
</div>
<br />
<div class="container">
    <input class="MyButtonON" style="margin-left:25px" type="button" value="Relay 3 ON" onclick="window.location.href='./php/3on.php'" />
    <input class="MyButton" style="margin-right:16px" type="button" value="OFF" onclick="window.location.href='./php/3off.php'" />
    <input class="MyButtonON" type="button" value="Relay 11 ON" onclick="window.location.href='./php/11on.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/11off.php'" />
</div>
<br />
<div class="container">
    <input class="MyButtonON" style="margin-left:25px" type="button" value="Relay 4 ON" onclick="window.location.href='./php/4on.php'" />
    <input class="MyButton" style="margin-right:16px" type="button" value="OFF" onclick="window.location.href='./php/4off.php'" />
    <input class="MyButtonON" type="button" value="Relay 12 ON" onclick="window.location.href='./php/12on.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/12off.php'" />
</div>
<br />
<div class="container">
    <input class="MyButtonON" style="margin-left:25px" type="button" value="Relay 5 ON" onclick="window.location.href='./php/5on.php'" />
    <input class="MyButton" style="margin-right:16px" type="button" value="OFF" onclick="window.location.href='./php/5off.php'" />
    <input class="MyButtonON" type="button" value="Relay 13 ON" onclick="window.location.href='./php/13on.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/13off.php'" />
</div>
<br />
<div class="container">
    <input class="MyButtonON" style="margin-left:25px" type="button" value="Relay 6 ON" onclick="window.location.href='./php/6on.php'" />
    <input class="MyButton" style="margin-right:16px" type="button" value="OFF" onclick="window.location.href='./php/6off.php'" />
    <input class="MyButtonON" type="button" value="Relay 14 ON" onclick="window.location.href='./php/14on.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/14off.php'" />
</div>
<br />
<div class="container">
    <input class="MyButtonON" style="margin-left:25px" type="button" value="Relay 7 ON" onclick="window.location.href='./php/7on.php'" />
    <input class="MyButton" style="margin-right:16px" type="button" value="OFF" onclick="window.location.href='./php/7off.php'" />
    <input class="MyButtonON" type="button" value="Relay 15 ON" onclick="window.location.href='./php/15on.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/15off.php'" />
</div>
<br />
<div class="container">
    <input class="MyButtonON" style="margin-left:25px" type="button" value="Relay 8 ON" onclick="window.location.href='./php/8on.php'" />
    <input class="MyButton" style="margin-right:16px" type="button" value="OFF" onclick="window.location.href='./php/8off.php'" />
    <input class="MyButtonON" type="button" value="Relay 16 ON" onclick="window.location.href='./php/16on.php'" />
    <input class="MyButton" type="button" value="OFF" onclick="window.location.href='./php/16off.php'" />
</div>
<br />
<div class="dive">
<p><b>Legend: 0 = On 1 = Off </b><br />
<br />
<div>
<?php
$output = shell_exec('sudo gpio -g read 2 2>&1');
echo "<b>Charger    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 3 2>&1');
echo "<b>Lamp       = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 4 2>&1');
echo "<b>Blacklight = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 17 2>&1');
echo "<b>Relay 4    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 27 2>&1');
echo "<b>Relay 5    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 22 2>&1');
echo "<b>Relay 6    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 10 2>&1');
echo "<b>Relay 7    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 9 2>&1');
echo "<b>Relay 8    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 11 2>&1');
echo "<b>Relay 9    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 5 2>&1');
echo "<b>Relay 10    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 6 2>&1');
echo "<b>Relay 11    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 13 2>&1');
echo "<b>Relay 12    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 19 2>&1');
echo "<b>Relay 13    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 26 2>&1');
echo "<b>Relay 14    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 21 2>&1');
echo "<b>Relay 15    = $output</b><br />";
?>
<?php
$output = shell_exec('sudo gpio -g read 20 2>&1');
echo "<b>Relay 16    = $output</b><br />";
?>

<br />
<br />
<b>Created by Austin<b/></p></div>
</body>
<a href="https://camofpv.com">
  <img src="./img/logo.png" alt="CamoFPV"
style="width:128px;height:128px;">
</a>
