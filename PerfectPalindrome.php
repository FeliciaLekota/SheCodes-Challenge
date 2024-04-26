<?php
// initialize the phrases to be checked.
$phrase1 = "Racecar";
$phrase2 = "Felicia";

// convert the phrases to lowercase
$phrase1 = strtolower($phrase1);
$phrase2 = strtolower($phrase2);

// Reverse the string
$reversedphrase1 = strrev($phrase1);
$reversedphrase2 = strrev($phrase2);

// Check if the original and reversed strings are equal
if ($phrase1 == $reversedphrase1) {
    echo "$phrase1 is a palindrome.\n";
} else {
    echo "$phrase1 is not a palindrome.\n";
}

if ($phrase2 == $reversedphrase2) {
    echo "$phrase2 is a palindrome.";
} else {
    echo "$phrase2 is not a palindrome.";
}



?>