<?php
$orig = "Eu \"amo\" programar <b>em</b> PHP";

$a = htmlentities($orig);

$b = html_entity_decode($a);

echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now
echo "<br>";
echo $b; // I'll "walk" the <b>dog</b> now



?>