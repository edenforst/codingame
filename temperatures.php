<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));

$minDiff = PHP_INT_MAX; //get max value integer
$result = 0; //initialize to 0

for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526

    $diff = abs($t); //absolute value $t

    if ($diff < $minDiff || ($diff == $minDiff && $t > $result)){
        $minDiff = $diff;
        $result = $t;
    }
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)
error_log(var_export($var, true));
echo("$result\n");
?>