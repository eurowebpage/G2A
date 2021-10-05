<?php
### File Get Contents - Solution 1 ###
$streamContext = stream_context_create([
'ssl' => [
'verify_peer'      => false,
'verify_peer_name' => false
]
]);
### ###
$getfile = file_get_contents('file.extension', false, $streamContext);
?>
