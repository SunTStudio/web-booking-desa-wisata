<?php

namespace App\Http\Controllers;

use App\Models\Batik;
use App\Models\Booking;
use App\Models\Kesenian;
use App\Models\CocokTanam;
use App\Models\Homestay;
use App\Models\Permainan;
use App\Models\Kuliner;
use App\Models\Paket;
use App\Models\StudyBanding;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $batiks = Batik::all();
        $kesenians = Kesenian::all();
        $cocokTanams = CocokTanam::all();
        $permainans = Permainan::all();
        $kuliners = Kuliner::all();
        $homestays = Homestay::all();
        $studiBandings = StudyBanding::all();
        $bookings = Booking::all();
        return view('user/landingpage',compact('batiks','bookings','homestays','studiBandings', 'kesenians', 'cocokTanams', 'permainans', 'kuliners'));
    }

    public function store(Request $request)
    {
        list($kesenianID,$ketKesenian) = explode('.',$request->kesenian);
        Paket::create([
            'batik_id' => $request->batik,
            'kesenian_id' => $kesenianID,
            'study_banding_id' => $request->studiBanding,
            'cocok_tanam_id' => $request->cocokTanam,
            'permainan_id' => $request->permainan,
            'homestay_id' => $request->homestay,
            'kuliner_id' => $request->kuliner,
            'ketKesenian' => $ketKesenian,
        ]);
        
        $paket = Paket::latest()->first();
        if($ketKesenian == 'pementasan'){
            $tagihan = (($paket->batik->harga + $paket->kesenian->harga_pementasan + $paket->cocokTanam->harga + $paket->permainan->harga + $paket->kuliner->harga ) * $request->visitor)+ $paket->homestay->harga + $paket->study_banding->harga;
        }else{
            $tagihan = (($paket->batik->harga + $paket->kesenian->harga_belajar + $paket->cocokTanam->harga + $paket->permainan->harga + $paket->kuliner->harga ) * $request->visitor)+ $paket->homestay->harga + $paket->study_banding->harga;
        }

        Booking::create([
            'nama_pic' => $request->nama_pic,
            'organisasi' => $request->organisasi,
            'noTelpPIC' => $request->notelppic,
            'visitor' => $request->visitor,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'paket_id' => $paket->id,
            'tagihan' => $tagihan,
            'guide_id' => '1',
            'status' => 'belum',
        ]);

        return redirect()->route('user.landingpage');

    }
}
