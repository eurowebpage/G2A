<?php
######### Script 1 #########
echo php_ini_loaded_file()."<br>"; 
if( ini_get('allow_url_fopen') ) {
    echo "Yes<br>";
} else {
    echo "No<br>";
}
######### Script 2 #########
ini_set("allow_url_fopen", 1);
if (ini_get("allow_url_fopen") == 1) {
echo "allow_url_fopen is ON<br>";
} else {
echo "allow_url_fopen is OFF<br>";
}
print ini_get("allow_url_fopen");  
?>
