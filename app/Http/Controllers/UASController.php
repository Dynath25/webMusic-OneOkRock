<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UASController extends Controller
{
    public function home() {
        return view('Home');
    }
    public function songs() {
        return view('Songs');
    }
    public function about() {
        return view('About');
    }
    public function tambah() {
        return view('Tambah');
    }
    public function info_Detox() {
        return view('Detox.info_Detox');
    }
    public function info_NicheSyn() {
        return view('NicheSyndrome.info_NicheSyn');
    }
    public function info_ZanRef() {
        return view('ZankyoReference.info_ZanRef');
    }
    public function info_JXB() {
        return view('JinseiXBoku.info_JXB');
    }
    public function info_EOTS() {
        return view('EyeOfTheStorm.info_EOTS');
    }
    public function info_LuxDis() {
        return view('LuxuryDisease.info_LuxDis');
    }

    public function ambitions()
    {
    	// mengambil data dari table lagu
    	$ambitions = DB::table('ambitions_tracklist')->get();
 
    	// mengirim data lagu ke view
    	return view('Ambitions.info_Ambitions',['ambitions_tracklist' => $ambitions]);
    }
    // public function lyrics()
    // {
    // 	// mengambil data dari table lyric
    // 	$lyrics = DB::table('lyrics')->get();
 
    // 	// mengirim data lyric ke view
    // 	return view('Ambitions.info_Ambitions',['lyrics' => $lyrics]);
    // }

    // public function store_ambitions(Request $request)
    // {
    //     // insert data ke table pegawai
    //     DB::table('ambitions_tracklist')->insert([
    //         'song_name' => $request->song_name
    //     ]);
    //     // alihkan halaman ke halaman pegawai
    //     return redirect('Songs');
    // }
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('ambitions_tracklist')->insert([
            'song_name' => $request->song_name,
            'link' => $request->link,
            'playtime' => $request->playtime
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('info_Ambitions');
    }
    public function edit($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $ambitions = DB::table('ambitions_tracklist')->where('song_id',$id)->get();
        // passing data yang didapat ke view edit.blade.php
        return view('Edit',['ambitions_tracklist' => $ambitions]);
    }
    public function update(Request $request)
    {
        DB::table('ambitions_tracklist')->where('song_id',$request->id)->update([
            'song_name' => $request->song_name,
            'link' => $request->link,
            'playtime' => $request->playtime,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/info_Ambitions');
    }
    public function hapus($id)
    {
        DB::table('ambitions_tracklist')->where('song_id',$id)->delete();
            
        return redirect('info_Ambitions');
    }


    public function WeAre() {
        return view('Ambitions.WeAre');
    }
}


