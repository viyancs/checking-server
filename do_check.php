<?php

//declare variable
$host = 'bandung.microad.co.id';
$ports = array(22,80,8585)
foreach ($ports as $port) {
	$connection = @fsockopen($host,$port);
	if (is_resource($connection)) {
		echo '<h2>'. $hosts. ':' . $port . ' ' . '('. getservbyport($port,'tcp'). ') is open.</h2>' . "\n";
		fclose($connection);
	}
	else {
		echo '<h2>' . $host . ':' .$port . ' is not responding . </h2>' . "\n";
	}
}

?>
