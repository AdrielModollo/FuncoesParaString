<?php
declare(strict_types=1);

$a = array( 'um','dois','três' );
$b = array( '1st' => 'quatro', 'cinco', 'terceiro' => 'seis' );

echo implode( '-', $a ),'/', implode( ',', $b );
?>