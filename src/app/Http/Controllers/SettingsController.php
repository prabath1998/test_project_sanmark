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


    //save or update settings
    public function store(Request $request)
    {
        $setting = Settings::find(1);
        if ($setting) {
            $formFields = $request->validate([
                'radius' => 'required',
            ]);
            Settings::where('id', 1)->update(['radius' => $request->radius]);
        } else {
            $formFields = $request->validate([
                'radius' => 'required',
            ]);

            Settings::create($formFields);
        }
        return redirect()->route('home')->with('message', 'Setting saved successfully!');
    }
}
