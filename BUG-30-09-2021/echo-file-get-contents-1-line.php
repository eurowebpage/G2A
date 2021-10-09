<?php 
echo file_get_contents("https://www.google.com",false,stream_context_create(array("http" => array("user_agent" => "any"))));
?>

<?php 
echo file_get_contents("https://www.google.com",false,stream_context_create(array("https" => array("user_agent" => "any"))));
?>
