The solution is to use strict comparison (`===`) instead of loose comparison (`!=`) to ensure that we are correctly checking against `false` and not 0.

```php
<?php
$haystack = "apple";
$needle = "apple";
if (strpos($haystack, $needle) !== false) {
    echo "Needle found!";
} else {
    echo "Needle not found!";
}

$haystack = "banana";
$needle = "apple";
if (strpos($haystack, $needle) !== false) {
    echo "Needle found!";
} else {
    echo "Needle not found!";
}
?>
```

```php
<?php
$haystack = "apple";
$needle = "apple";
if (strpos($haystack, $needle) !== false) {
    echo "Needle found!";
} else {
    echo "Needle not found!";
}

$haystack = "banana";
$needle = "apple";
if (strpos($haystack, $needle) === false) {
    echo "Needle not found!";
} else {
    echo "Needle found!";
}
?>
```