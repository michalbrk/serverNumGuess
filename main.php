<?php

$firstArg = 1;
$secondArg = 1000;

function getRanNum($firstArg, $secondArg) {
    
    global $firstArg;
    global $secondArg;
    
    $ranNumb = mt_rand($firstArg,$secondArg);
    
    return $ranNumb;
}

echo(getRanNum($firstArg, $secondArg));

?>