<?php

namespace App\Http\Controllers;

use App\Models\Runner;
use Illuminate\Http\Request;

class RunnerController extends Controller
{
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'radius' => 'required',
            'begin' => 'required',
            'end' => 'required',
            'laps' => 'required',
        ]);

        Runner::create($formFields);
        return redirect()->back();
    }
}
