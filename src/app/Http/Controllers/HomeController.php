<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $currentSettings = Settings::find(1);
        return view('index', compact('currentSettings'));
    }
}
