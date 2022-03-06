
<?php
$array = array(1, 2,3,4,5,1,2,3,4,5);
echo "Original array <br>";
print_r($array);
$array = array_unique($array);
echo "<br>Updated Array <br>";
print_r($array);
?>