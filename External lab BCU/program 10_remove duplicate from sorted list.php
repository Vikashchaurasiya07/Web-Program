<?php
$sortedList = [1, 2, 2, 3, 4, 4, 4, 5, 6, 6, 7];
$uniqueList = array_values(array_unique($sortedList));

echo 'Original List: ' . implode(', ', $sortedList) . '<br>';
echo 'Unique List: ' . implode(', ', $uniqueList);
?>
