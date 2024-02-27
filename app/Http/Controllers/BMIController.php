<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function index()
    {
        return view('forma');
    }

    public function calculate(Request $request)
    {
        $mass = $request->input('mass');
        $height = $request->input('height');

        $bmi = $mass / (($height / 100) * ($height / 100));

        $bmi = round($bmi, 2);

        return view('result', ['bmi' => $bmi]);
    }
}
?>