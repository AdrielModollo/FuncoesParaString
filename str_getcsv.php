<?php

$csv = array_map('str_getcsv', file('data.csv'));


echo "$csv";

?>