<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    //
    public function pdf()
    {
        $pdf = Pdf::loadView('tagihan/invoice_pdf')->setPaper('a4', 'landscape');
        // Storage::put('public/invoice/invoice.pdf', $pdf->output());
        return $pdf->download('invoice.pdf');
    }
}
