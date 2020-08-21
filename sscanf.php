<?php
// pega informação do autor e gera uma entrada de DocBook
$auth = "24\tLewis Carroll";
$n = sscanf($auth,"%d\t%s %s", $id, $first, $last);
echo "<author xml:id='$id'>
    <firstname>$first</firstname>
    <surname>$last</surname>
</author>\n";
?>