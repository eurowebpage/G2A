<?php
### File Get Contents - Solution 1 ###
$streamContext = stream_context_create([
'ssl' => [
'verify_peer'      => false,
'verify_peer_name' => false
]
]);
### ###
$url="https://dist.ext/sitemap.xml";    
$xml = file_get_contents($url, false, $streamContext);
$xml = simplexml_load_string($xml);

foreach ($xml as $showname) {
echo "$showname"."<br>";
}
?>


<?php
### File Get Contents - Solution 1 ###
$streamContext = stream_context_create([
'ssl' => [
'verify_peer'      => false,
'verify_peer_name' => false
]
]);
### ###   
$url="https://dist.ext/sitemap.xml";    
$xml = file_get_contents($url, false, $streamContext);
$xml = simplexml_load_string($xml);
$message = "";    
foreach ($xml as $showname) {
//echo "$showname"."<br>";
$filename = "dir-2-list/".$showname;
    
if (is_file($filename ) && is_readable($filename )) {
    $message .= "The file $filename exists<br>";
} else {
    $message .= "The file $filename does not exist<br>";
}
    
}

echo $message."<br>";    
?>  
