<?php
function is_valid($filename) {
if(file_get_contents($filename, 0, NULL, 0, 1)) {
//return TRUE;
$echofile = file_get_contents($filename);
echo $echofile;
} else {
return FALSE;
//envoyé une alerte ou message
}
}    
?>
<?php
echo is_valid("https://www.ww/");
?>
