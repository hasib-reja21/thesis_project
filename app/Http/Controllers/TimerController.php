<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimerController extends Controller
{
    public function getTimer()
    {
        $minutes = 3; // For example, retrieve the timer value from your continuous timer logic
        $seconds = $minutes * 60;

        return response()->json(['timer' => gmdate('i:s', $seconds)]);
    }
}
