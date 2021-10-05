<?php
######### Solution 2 #############
stream_context_set_default( [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
]);

$result2=get_headers($url);
###################################
?>
