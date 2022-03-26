<?php
if ($argv[0] == basename(__FILE__)) {	
	unset($argv[0]);
}
echo 'Hello ' . $argv[1] . '!';
echo '</br>';
echo '__FILE__='.__FILE__;
echo '</br>';
echo realpath(dirname(__FILE__));
?>