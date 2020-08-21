<?php
$data = "Two Ts and one F.";


foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"<br>" , chr($i) , "\" in the string.\n";
}
?>