<?php

namespace App\Http\Controllers;

use App\Models\Runner;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ReportController extends Controller
{
    public function download()
    {
        $data = Runner::all();

        //generete report if db has records
        if (!empty($data)) {
            $pdf = Pdf::loadView('pdf.report', compact('data'));
            return $pdf->download('report.pdf');
        } else {
            return redirect()->back()->with('message', 'No records to generate..!');
        }
    }
}
