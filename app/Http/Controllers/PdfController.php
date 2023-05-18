<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller
{
    public function generatePDF(){
        $pdf=PDF::loadView('report');
        return $pdf->stream('wow.pdf');
    }
}
