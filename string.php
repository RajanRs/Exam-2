<?php
function processStrings($inputArray) {
    foreach ($inputArray as $string) {
        $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);
        $reversedString = strrev($string);
        echo "Original String: " . $string . "\n";
        echo "Reversed String: " . $reversedString . "\n";
        echo "Vowel Count: " . $vowelCount . "\n";
        echo "-----------------------\n";
    }
}
$inputArray = ["Hello", "World", "PHP", "Programming"];
processStrings($inputArray);
?>