<?php

namespace App\Http\Controllers;

use App\Models\Runner;
use App\Models\Settings;
use Illuminate\Http\Request;

class RunnerController extends Controller
{
    public function store(Request $request)
    {
        $currentSettings = Settings::find(1);
        $formFields = $request->validate([
            'name' => 'required',
            'radius' => "required|numeric|max:$currentSettings->radius",
            'begin' => 'required',
            'end' => "required|after:$request->begin",
            'laps' => 'required',

        ]);

        Runner::create($formFields);
        return redirect()->back()->with('message', 'Record saved successfully!');
    }
}
