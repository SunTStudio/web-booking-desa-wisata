<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Batik;
use App\Models\Kesenian;
use App\Models\CocokTanam;
use App\Models\Permainan;
use App\Models\Kuliner;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tanggalBooking = $request->input('tanggal-booking', '');
        $namaBooking = $request->input('nama-booking', '');
        $noTelpPic = $request->input('no-telp-pic', '');
        $jamBookingMulai = $request->input('jam-booking-mulai', '');
        $jamBookingSelesai = $request->input('jam-booking-selesai', '');
        $jumlahVisitor = $request->input('jumlah-visitor', '');

        $batiks = Batik::all();
        $kesenians = Kesenian::all();
        $cocokTanams = CocokTanam::all();
        $permainans = Permainan::all();
        $kuliners = Kuliner::all();

        return view('admin.kalender', compact('batiks', 'kesenians', 'cocokTanams', 'permainans', 'kuliners','tanggalBooking', 
            'namaBooking', 
            'noTelpPic', 
            'jamBookingMulai', 
            'jamBookingSelesai', 
            'jumlahVisitor')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    // public function index(Request $request)
    // {
    //     $tanggalBooking = $request->input('tanggal-booking', '');
    //     $namaBooking = $request->input('nama-booking', '');
    //     $noTelpPic = $request->input('no-telp-pic', '');
    //     $jamBookingMulai = $request->input('jam-booking-mulai', '');
    //     $jamBookingSelesai = $request->input('jam-booking-selesai', '');
    //     $jumlahVisitor = $request->input('jumlah-visitor', '');

    //     return view('admin.kalender', compact(
    //         'tanggalBooking', 
    //         'namaBooking', 
    //         'noTelpPic', 
    //         'jamBookingMulai', 
    //         'jamBookingSelesai', 
    //         'jumlahVisitor'
    //     ));
    // }
}
