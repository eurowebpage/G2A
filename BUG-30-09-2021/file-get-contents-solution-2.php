<?php
############### File Get Contents ERROR    ################
$fullurl="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$a = ''.$homebaseurl.'/'.$repertoire.'/file.name';
if (strpos(file_get_contents($a), $fullurl) !== false) ;
###########################################################
?>
