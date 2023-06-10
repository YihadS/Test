<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Problems\Problem1;

class Problem1Controller extends Controller
{
    public function solveProblem1(Request $request)
    {
        // Retrieve the input from the request
        $input = $request->input('input');
    
        // Decode the JSON input
        $data = json_decode($input, true);
    
        // Extract the values from the input
        $n = $data['n'];
        $k = $data['k'];
        $rq = $data['rq'];
        $cq = $data['cq'];
        $obstacles = $data['obstacles'];
    
        // Create an instance of the Problem1 class
        $problem1 = new Problem1();
    
        // Call the queensAttack function
        $solution = $problem1->queensAttack($n, $k, $rq, $cq, $obstacles);
    
        // Return the solution as JSON response
        return response()->json(['solution' => $solution]);
    }
}