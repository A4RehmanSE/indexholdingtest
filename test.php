<?php

// getUniqueElements(array $numbers): array:
// o Input: An array $numbers of integers.
// o Output: Return a new array that contains only the unique elements from the input array, preserving their original order.

function getUniqueElements(array $numbers): array
{
    return (array)array_unique($numbers);
}

// getEvenNumbers(array $numbers): array:
// o Input: An array $numbers of integers.
// o Output: Return a new array that contains only the even numbers from the input array, preserving their original order.

function getEvenNumbers(array $numbers): array
{
    $temArray = [];

    foreach ($numbers as $number) {
        if ($number / 2 !== 0) {
            $temArray[] = $number;
        }
    }

    return (array)$temArray;
}


// getSum(array $numbers): int:
// o Input: An array $numbers of integers.
// o Output: Return the sum of all the numbers in the input array.

function getSum(array $numbers): int
{
    return (int)array_sum($numbers);
}

// reverseArray(array $numbers): array:
// o Input: An array $numbers of integers.
// o Output: Return a new array that contains the elements of the input array in reverse order.

function reverseArray(array $numbers): array
{
    return (array)rsort($number);
}

// checkSorted(array $numbers): bool:
// o Input: An array $numbers of integers.
// o Output: Return true if the elements in the input array are in ascending order, and false otherwise.

function checkSorted(array $numbers): bool
{
    $previousNumber = 0;
    $sorted = false;
    foreach ($numbers as $number) {
        if ($previousNumber < $number) {
            $sorted = true;
        } else {
            $sorted = false;
        }
        $previousNumber = $number;
    }

    return $sorted;
}
