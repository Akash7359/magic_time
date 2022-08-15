<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $start = strtotime($request->start_time);
        $end = strtotime($request->end_time);
        while( $start < $end)
        {
            $start2 = date('H:i:s',$start);
            $temp = array_unique(str_split($start2));
            $num = count($temp)-1;
            if($num <= 2)
            {
                echo "$start2<br>";
            }
            $start = date("h:i:s", $start + 1);
            $start = strtotime($start);
        }

    }
}
