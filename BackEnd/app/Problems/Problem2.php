<?php

namespace App\Problems;

class Problem2
{
    public function calculateMaxValue($input)
    {
        $length = strlen($input);
        $maxValue = 0;

        // Loop through all possible substrings
        for ($i = 0; $i < $length; $i++) {
            for ($j = $i + 1; $j <= $length; $j++) {
                $substring = substr($input, $i, $j - $i);
                $substringLength = strlen($substring);
                $count = $this->countOccurrences($substring, $input);
                $value = $substringLength * $count;

                // Auxiliary Function
                $maxValue = max($maxValue, $value);
            }
        }

        return $maxValue;
    }

    // Auxiliary Function
    private function countOccurrences($substring, $string)
    {
        $count = 0;
        $offset = 0;

        while (($pos = strpos($string, $substring, $offset)) !== false) {
            $count++;
            $offset = $pos + 1;
        }

        return $count;
    }
}