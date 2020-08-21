<?php
$a = '1 apple';
$b = '2 apples';

$levenshtein = levenshtein($a, $b, 1, 1000, 1000000);

$inserts = $levenshtein % 1000;
$replaces = floor($levenshtein / 1000) % 1000;
$deletes = floor($levenshtein / 1000000) % 1000;

echo '<pre>';
var_export(array(
    'levenshtein' => $levenshtein,
    'inserts' => $inserts,
    'replaces' => $replaces,
    'deletes' => $deletes
));

/* Output
array (
  'levenshtein' => 1001,
  'inserts' => 1,
  'replaces' => 1,
  'deletes' => 0,
)
*/

?>