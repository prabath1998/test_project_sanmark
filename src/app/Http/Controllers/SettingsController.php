<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function view()
    {
        $settings = Settings::find(1);
        return view('settings', compact('settings'));
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'radius' => 'required',
        ]);

        Settings::create($formFields);
        return redirect()->back();
    }
}
