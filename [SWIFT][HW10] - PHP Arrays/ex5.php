
<?php
$numbers = range(11, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
?>
