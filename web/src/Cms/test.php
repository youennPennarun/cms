<?php
fclose(STDIN);
fclose(STDOUT);
fclose(STDERR);


$str = date("H-s")."<br>\n";
	sleep(2);
$str .= date("H-s")."<br>\n";
	sleep(2);
$str .= date("H-s")."<br>\n";
	sleep(2);
$str. = date("H-s")."<br>\n";
	$str .= "SUCCESS!\n\nFake cron just ran";

$handle = fopen("src/Cms/t.txt", "w");
fwrite($handle, $str);

					fclose($handle);
?>