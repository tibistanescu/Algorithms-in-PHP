<?php
/*
 * Problem:
 * Given a string, return the character that is most commonly used in the string.
 * Examples:
 * maxChar("abcccccccd") === "c"
 * maxChar("apple 1231111") === "1"
 */
function maxChar($str)
{
    $arrCheck = [];

    foreach (str_split($str) as $char) {
        array_key_exists($char, $arrCheck) ? $arrCheck[$char]++ : $arrCheck[$char] = 1;
    }

    arsort($arrCheck);

    return strval(key($arrCheck));
}