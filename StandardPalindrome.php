<?php
// initialize the phrases to be checked.
$phrase1 = "Madam, I'm Adam";
$phrase2 = "Felicia Lekota";

// Remove all spaces and characters and change the phrases to lowercase.
$phr1 = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($phrase1));
$phr2 = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($phrase2));

// Reverse the string.
$reversedphrase1 = strrev($phr1);
$reversedphrase2 = strrev($phr2);

// Check if the original and reversed strings are equal.
if ($phr1 == $reversedphrase1) {
    echo "$phrase1 is a palindrome.\n";
} else {
    echo "$phrase1 is not a palindrome.\n";
}

if ($phr2 == $reversedphrase2) {
    echo "$phrase2 is a palindrome.";
} else {
    echo "$phrase2 is not a palindrome.";
}

?>