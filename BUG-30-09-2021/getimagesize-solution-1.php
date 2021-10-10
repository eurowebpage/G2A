<?php
//Images root exemple https://test.scriptphp.eu/1/edit-php-file-php/1.jpg
$http_url ="https://test.scriptphp.eu";
$dir_img_path = "/1/edit-php-file-php/";
$base_image_path = "";
$image_path = $http_url.$dir_img_path."1.jpg";
$image_path = str_replace($http_url, $base_image_path, $image_path);
$image_path_root = $_SERVER["DOCUMENT_ROOT"].$dir_img_path."1.jpg";
list($width, $height, $type, $attr)= getimagesize($image_path_root);
?>

<?php echo "width = ".$width." height = ". $height."<br>";
echo $_SERVER["DOCUMENT_ROOT"];
 ?>
