<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller
{

    public function __construct()
    {
        $this->middleware('month');
    }

    public function numberToMonth(Request $req)
    {
        //Route parameter from request method
        $num = $req->num;

        //getting url parameter from request method
        $week = $req->input('week');

        $month = "";
        if ($num == 1) {
            $month = "January " . $week;
        } else if ($num == 2) {
            $month = "Febraury " . $week;
        } else if ($num == 3) {
            $month = "March " . $week;
        } else if ($num == 4) {
            $month = "April " . $week;
        }
        return '<h2>' . $month . '</h2>';
    }
}
