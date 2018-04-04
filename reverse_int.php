<?php
/*
 * Problem:
 * Given an integer, return an integer that is the reverse ordering of numbers.
 * Examples:
 * reverseInt(15) === 51
 * reverseInt(981) === 189
 * reverseInt(500) === 5
 * reverseInt(-15) === -51
 * reverseInt(-90) === -9
 */
function reverseInt($n)
{
    $reversedString = '';
    $numberSign = $n > 0 ? 1 : -1;

    foreach (str_split(strval($n)) as $character) {
        $reversedString = $character . $reversedString;
    }

    return intval($reversedString) * $numberSign;
}