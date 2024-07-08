<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    //
    public function invoice($id)
    {
        $data = Booking::findOrFail($id);
        if (request("output") == "pdf") {
            $pdf = Pdf::loadView('tagihan.invoice_pdf', compact('data'))->setPaper('a4', 'landscape');
            // Storage::put('public/invoice/invoice.pdf', $pdf->output());
            return $pdf->stream('invoice.pdf');
        }

        return view('tagihan/invoice', compact('data'));
    }
    public function laporan(Request $request)
    {
        $data = Booking::query();

        // Filter berdasarkan bulan dan tahun jika ada input dari form
        if ($request->filled('bulan') && $request->filled('tahun')) {
            $bulan = $request->bulan;
            $tahun = $request->tahun;
            $data->whereMonth('tanggal', $bulan)
                ->whereYear('tanggal', $tahun);
        }

        $laporans = $data->orderBy('tanggal', 'desc')->get();
        $totalPendapatan = $laporans->sum('tagihan');

        return view('laporan/laporan', compact('laporans', 'totalPendapatan', 'request'));
    }

    public function laporan_pdf(Request $request)
    {
        $laporans = Booking::query();

        // Filter berdasarkan bulan
        if ($request->has('bulan') && $request->bulan != '') {
            $laporans->whereMonth('tanggal', $request->bulan);
        }

        // Filter berdasarkan tahun
        if ($request->has('tahun') && $request->tahun != '') {
            $laporans->whereYear('tanggal', $request->tahun);
        }

        $laporans = $laporans->get();
        $totalPendapatan = $laporans->sum('tagihan');

        $pdf = Pdf::loadView('laporan.laporan_pdf', compact('laporans', 'totalPendapatan', 'request'))->setPaper('a4', 'landscape');
        // Storage::put('public/invoice/invoice.pdf', $pdf->output());
        return $pdf->stream('laporan.pdf');
    }
}
