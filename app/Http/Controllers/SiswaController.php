<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "Hello";
        //  return view('index');
        //return Siswa::all();
        // $siswa = Siswa::all();

        // $siswa = DB::table('siswa')->get();
        //  return view('index', compact('siswa'));

        // $siswa = DB::table('siswa')->where('id', '2')->first();
        // return $siswa;

        // $siswa = DB::table('siswa')->where('nama', 'udin')->first();
        // return $siswa;

        // $siswa = DB::table('siswa')->where('nama', 'udin')->value('alamat');
        // return $siswa;

        // $siswa = DB::table('siswa')
        //     ->select('id', 'nama')
        //     ->get();
        // return $siswa;

        // $siswa = DB::table('siswa')
        // ->select('alamat')->distinct()->get();
        // return $siswa;

        // $siswa = DB::table('siswa')
        // ->select('alamat')->distinct()->get();
        // return $siswa;

        // $siswa = DB::table('siswa')
        //          ->select('id', 'nama', DB::raw('Gender(gender) as keterangan_gender'))
        //          ->get();
        // return $siswa;

        $siswa = Siswa::select('id', 'nama', 'tgl_lhr', DB::raw('Gender(gender) as jenis_kelamin'), 'alamat') 
        ->get();
        return $siswa;

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //return "Store";
        //menampilkan isi dari variabel $request yang berisi data dari form yg diisi
        //return $request;

        //menampilkan satu2 dari $request
        return $request->nama;
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Siswa::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
