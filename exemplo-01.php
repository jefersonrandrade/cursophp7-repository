<?php

$name = "images";

if (!is_dir($name)) {
	mkdir($name);
} else {
	echo "Ja existe uma pasta com esse nome";
}

?>