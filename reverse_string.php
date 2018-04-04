<?php
/*
 *  Problem:
 *  Given a string, return a new string with the reversed order of characters
 *  Examples:
 *  reverse('banana') === 'ananab'
 *  reverse('hello') === 'olleh'
 *  reverse('World!') === '!dlroW'
 */
function reverse($str)
{
    $reversedString = '';

    foreach (str_split($str) as $character) {
        $reversedString = $character . $reversedString;
    }

    return $reversedString;
}
