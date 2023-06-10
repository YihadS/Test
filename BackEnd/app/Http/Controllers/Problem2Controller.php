<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problems\Problem2;

class Problem2Controller extends Controller
{
    public function solveProblem2(Request $request)
    {
        // Retrieve the input from the request
        $input = $request->input('input');

        // Create an instance of the Problem2 class
        $problem2 = new Problem2();

        // Call the calculateMaxValue method in the Problem2 class
        $maxValue = $problem2->calculateMaxValue($input);

        // Return the max value as JSON response
        return response()->json(['maxValue' => $maxValue]);
    }
}