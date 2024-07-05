<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    //
    public function pdf($id)
    {
        $data = Booking::findOrFail($id);
        if (request("output") == "pdf") {
            $pdf = Pdf::loadView('tagihan.invoice_pdf', compact('data'))->setPaper('a4', 'landscape');
            // Storage::put('public/invoice/invoice.pdf', $pdf->output());
            return $pdf->stream('invoice.pdf');
        }
        return view('tagihan/invoice', compact('data'));
    }
}
