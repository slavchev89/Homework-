<?php

$cars = array("BMW", "Porsche", "Mercedes", "Lexus");
sort($cars);
foreach ($cars as $key => $val) {
    echo "cars[" . $key . "] = " . $val . "\n";
}

?>
