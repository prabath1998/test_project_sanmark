<?php

namespace App\Http\Controllers;

use App\Models\Runner;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use function PHPUnit\Framework\isEmpty;

class ReportController extends Controller
{
    public function download()
    {
        $data = Runner::all();

        //generete report if db has records
        if (!$data->isEmpty()) {
            $pdf = Pdf::loadView('pdf.report', compact('data'));
            return $pdf->download('report.pdf');
        } else {
            return redirect()->back()->with('warning', 'No records to generate..!');
        }
    }
}
