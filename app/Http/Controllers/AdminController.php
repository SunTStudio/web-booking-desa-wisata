<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\StudyBanding;
use Illuminate\Http\Request;
use App\Models\Batik;
use App\Models\Booking;
use App\Models\Kesenian;
use App\Models\CocokTanam;
use App\Models\Homestay;
use App\Models\Permainan;
use App\Models\Kuliner;
use App\Models\Paket;

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
        $homestays = Homestay::all();
        $studiBandings = StudyBanding::all();

        return view('admin.kalender', compact('batiks','homestays','studiBandings', 'kesenians', 'cocokTanams', 'permainans', 'kuliners','tanggalBooking', 
            'namaBooking', 
            'noTelpPic', 
            'jamBookingMulai', 
            'jamBookingSelesai', 
            'jumlahVisitor')); 
    }

    public function dashboard() {
        $data = Booking::all();
        return view('admin/dashboard', compact('data'));
    }

    public function laporan(Request $request) {
        $data = Booking::get();
        return view('admin/laporan', compact('data', 'request'));
    }

    public function laporanSearch(Request $request) {
        $searchTerm = $request->search;
    
        // Cek apakah $searchTerm adalah kata kunci bulan
        $isMonth = false;
        $monthNumber = null;
    
        $months = [
            'januari' => '01',
            'februari' => '02',
            'maret' => '03',
            'april' => '04',
            'mei' => '05',
            'juni' => '06',
            'juli' => '07',
            'agustus' => '08',
            'september' => '09',
            'oktober' => '10',
            'november' => '11',
            'desember' => '12',
        ];
    
        foreach ($months as $monthName => $monthNum) {
            if (strtolower($searchTerm) == $monthName) {
                $isMonth = true;
                $monthNumber = $monthNum;
                break;
            }
        }
    
        // Jika $searchTerm adalah nama bulan, ubah menjadi rentang tanggal
        if ($isMonth) {
            // Misalnya, ubah pencarian menjadi bulan Agustus
            $data = Booking::whereMonth('tanggal', $monthNumber)->get();
        } else {
            // Jika bukan, lakukan pencarian berdasarkan input seperti sebelumnya
            $data = Booking::where('tanggal', 'LIKE', '%' . $searchTerm . '%')->get();
        }
    
        return view('admin/laporan', compact('data', 'request'));
    }

    // public function laporanSearch(Request $request) {
    //     $data = Booking::where('tanggal', 'LIKE', '%' . $request->search . '%')->get();
    //     return view('admin/laporan', compact('data', 'request'));
    // }

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
        // dd($request->all());

        Paket::create([
            'batik_id' => $request->batik,
            'kesenian_id' => $request->kesenian,
            'study_banding_id' => $request->studiBanding,
            'cocok_tanam_id' => $request->cocokTanam,
            'permainan_id' => $request->permainan,
            'homestay_id' => $request->homestay,
            'kuliner_id' => $request->kuliner,
        ]);
        
        $paket = Paket::latest()->first();

        Booking::create([
            'nama_pic' => $request->nama_pic,
            'organisasi' => $request->organisasi,
            'noTelpPIC' => $request->notelppic,
            'visitor' => $request->visitor,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'paket_id' => $paket->id,
            'tagihan' => (($paket->batik->harga + $paket->kesenian->harga_pementasan + $paket->cocokTanam->harga + $paket->permainan->harga + $paket->kuliner->harga ) * $request->visitor)+ $paket->homestay->harga + $paket->study_banding->harga,
            // 'tagihan' => (($paket->batik->harga + $paket->kesenian->harga_belajar + $paket->kesenian->harga_pementasan + $paket->cocokTanam->harga + $paket->permainan->harga + $paket->kuliner->harga ) * $request->visitor)+ $paket->homestay->harga + $paket->study_banding->harga,
            'guide_id' => '1',
            'status' => 'belum',
        ]);

        return redirect()->route('admin.booking');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $bookings = Booking::all();
        return view('admin.booking',compact('bookings'));
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
