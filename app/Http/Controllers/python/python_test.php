<?php

namespace App\Http\Controllers\python;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class python_test extends Controller
{
    public function testRun(){
        $command='nohup python3 '.__DIR__.'/homeControl/main.py';
        exec($command,$output,$res);
        return $output;
    }
}
