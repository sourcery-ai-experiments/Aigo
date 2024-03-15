<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class CalculationController extends Controller
{
    public function calculate(Request $request)
    {
        // Get parameters from request
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operator = $request->input('operator');

        // Execute Python script
        $process = new Process(["python", "calculate.py", $num1, $num2, $operator]);
        $process->run();

        // Check if script executed successfully
        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }

        // Get output of the script
        $output = $process->getOutput();

        // Pass output to Blade template
        return view('result', ['output' => $output]);
    }
}
