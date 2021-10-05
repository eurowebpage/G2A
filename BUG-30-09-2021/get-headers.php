<?php
######### Solution 1 #############
$streamContext = stream_context_create([
'ssl' => [
'verify_peer'      => false,
'verify_peer_name' => false
]
]);	

$result2=get_headers($url, false, $streamContext);
###################################
?>
