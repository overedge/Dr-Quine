<?php
$i = 5;
if ($i == 0)
return (0);
if (strcmp($argv[0], "./Sully.php") != 0)
$i = $i - 1;
$quine = '<?php%c$i = %d;%cif ($i == 0)%creturn (0);%cif (strcmp($argv[0], "./Sully.php") != 0)%c$i = $i - 1;%c$quine = %c%s%c;%c$handle = fopen("Sully_".$i.".php", "w");%cfprintf($handle, $quine, 10, $i, 10, 10, 10, 10, 10, 39, $quine, 39, 10, 10, 10, 10, 10, 10);%cfclose($handle);%cshell_exec("php Sully_".$i.".php");%c?>%c';
$handle = fopen("Sully_".$i.".php", "w");
fprintf($handle, $quine, 10, $i, 10, 10, 10, 10, 10, 39, $quine, 39, 10, 10, 10, 10, 10, 10);
fclose($handle);
shell_exec("php Sully_".$i.".php");
?>
