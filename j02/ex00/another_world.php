#!/usr/bin/php
<?PHP
if ($argv[1])
{
	$str2 = preg_replace("/[ ,\t]+/", " ", $argv[1]);
	$str2 = preg_replace("/^[ ,\t]+/", "", $str2);
	$str2 = preg_replace("/[ ,\t]+$/", "", $str2);
	echo $str2."\n";
}
?>
