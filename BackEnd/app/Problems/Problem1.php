<?php

namespace App\Problems;

class Problem1
{
    public function queensAttack($n, $k, $rq, $cq, $obstacles) {
        // Initialize the count of squares attacked by the queen
        $count = 0;
    
        // Create a set of obstacles for efficient lookup
        $obstacleSet = array_flip(array_map(function ($obstacle) {
            return implode(',', $obstacle);
        }, $obstacles));
    
        // Define the directions in which the queen can attack
        $directions = [
            [-1, 0],   // Up
            [1, 0],    // Down
            [0, -1],   // Left
            [0, 1],    // Right
            [-1, -1],  // Up-Left
            [-1, 1],   // Up-Right
            [1, -1],   // Down-Left
            [1, 1]     // Down-Right
        ];
    
        // Check each direction for possible attacks
        foreach ($directions as $dir) {
            $r = $rq + $dir[0];
            $c = $cq + $dir[1];
    
            while ($r >= 1 && $r <= $n && $c >= 1 && $c <= $n) {
                $pos = "$r,$c";
    
                // If the current position is an obstacle, stop further attacks in this direction
                if (isset($obstacleSet[$pos])) {
                    break;
                }
    
                // Increment the count and move to the next position in the direction
                $count++;
                $r += $dir[0];
                $c += $dir[1];
            }
        }
    
        return $count;
    }
}