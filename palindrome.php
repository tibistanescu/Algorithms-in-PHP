<?php
/*
 * Problem:
 * Given a string, return true if the string is a palindrome or false if it is not.
 * Palindromes are strings that form the same word if it is reversed.
 * Include spaces and punctuation in determining if the string is a palindrome.
 * Examples:
 * palindrome("abba") === true
 * palindrome("abcdefg") === false
 */
function palindrome($str)
{
    $reversedString = '';

    foreach (str_split($str) as $character) {
        $reversedString = $character . $reversedString;
    }

    return $reversedString === $str ? true : false;
}
