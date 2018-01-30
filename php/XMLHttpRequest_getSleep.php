<?php

header("Content-Type: text/plain");

$sleep = (isset($_GET["Sleep"])) ? $_GET["Sleep"] : NULL;

echo date("h:i:s") . "\n\n";

if ($sleep) {
	fsleep($sleep);
	echo $sleep . "\n\n";
} else {
	fsleep(10);
	echo "10\n\n";
}
echo date("h:i:s") . "\n";


function fsleep($sec) { // Pour chez Free
    $sec = abs((int) $sec) ;
    $tps = time();
    while ($tps + $sec >= time()) ;
}

?>
