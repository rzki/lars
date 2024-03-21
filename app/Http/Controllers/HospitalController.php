<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hospitals.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $jenis = ['Rumah Sakit Umum','Rumah Sakit Khusus'];
        $kelas = ['Kelas A','Kelas B', 'Kelas C', 'Kelas D'];
        $provinsi = DB::table('provinsi')->orderBy('id')->get();
        // $provinsi = response()->json($provinsi);
        // dd($provinsi);
        return view('hospitals.create', compact('jenis', 'kelas', 'provinsi'));
    }

    public function getKabupaten(Request $request)
    {
        $kabupaten = DB::table('kabupaten')->where('provinsi_id', $request->provinsi_id)->get();

        return response()->json($kabupaten);
    }

        public function getKecamatan(Request $request)
    {
        $kecamatan = DB::table('kecamatan')->where('kabupaten_id', $request->kabupaten_id)->get();

        return response()->json($kecamatan);
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
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        //
    }
}
