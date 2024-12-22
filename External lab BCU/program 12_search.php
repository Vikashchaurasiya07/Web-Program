
<?php
if (in_array($_POST["search_value"], ["apple", "banana", "cherry", "date", "elderberry", "fig", "grape"])) {
    echo "Value '{$_POST["search_value"]}' was found.";
} else {
    echo "Value '{$_POST["search_value"]}' was not found.";
}
?>
