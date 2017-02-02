<?php
$i = 5;
if ($i == 0)
return (0);
if (strstr($argv[0], "_") != false)
$i = $i - 1;
$quine = '<?php%c$i = %d;%cif ($i == 0)%creturn (0);%cif (strstr($argv[0], "_") != false)%c$i = $i - 1;%c$quine = %c%s%c;%c$handle = fopen("Sully_".$i.".php", "w");%cfprintf($handle, $quine, 10, $i, 10, 10, 10, 10, 10, 39, $quine, 39, 10, 10, 10, 10, 10, 10);%cfclose($handle);%cshell_exec("php Sully_".$i.".php");%c?>%c';
$handle = fopen("Sully_".$i.".php", "w");
fprintf($handle, $quine, 10, $i, 10, 10, 10, 10, 10, 39, $quine, 39, 10, 10, 10, 10, 10, 10);
fclose($handle);
shell_exec("php Sully_".$i.".php");
?>
