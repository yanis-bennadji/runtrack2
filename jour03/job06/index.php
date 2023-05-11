<?php
$str = "Les choses que l'on possede finissent par nous posseder.";

$len = strlen($str);

for ($i = $len - 1; $i >= 0; $i--) {
    echo $str[$i];
}
?>