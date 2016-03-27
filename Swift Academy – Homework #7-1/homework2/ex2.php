<?php
for ($i = 0; $i <= 1000; $i++)
if($i % 3 == 0 && $i % 7 == 0){
        echo "3,7<br />";
    }
    else if($i % 3 == 0){
        echo "3<br />";
    }
   
     else if($i % 7 == 0){
        echo "7<br />";
    }
    else {
        echo $i."<br />";
    }

?>


