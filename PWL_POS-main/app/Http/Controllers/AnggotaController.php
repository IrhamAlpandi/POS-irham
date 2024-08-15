<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function cekObject()
    {
        $anggota = new Anggota;
        dump($anggota);
    }

    // public function insert()
    // {
    //     $anggota = new Anggota;
    //     $anggota->nip = '234';
    //     $anggota->nama = 'ukhti';
    //     $anggota->tanggal_lahir = '2002-06-25';
    //     $anggota->nilai = '3.7';
    //     $anggota->save();
        
    //     echo "DATA BERHASIL DISIMPAN";
    // }

    // public function update()
    // {
    //     $anggota = Anggota::find(1);
    //     $anggota->nama = 'ukhti';
    //     $anggota->nilai = '3.5';
    //     $anggota->save();
    //     echo "data berhasil diupdate";
    // }

    // public function delete()
    // {
    //     $anggota = Anggota::find(1);
    //     $anggota->delete();
    //     echo "data berhasil di hapus";
    // }

    // public function all(){
    //     $result= Anggota::all();
    //     return view('tampilkan_anggota',['anggota'=>$result]);
    // }

    public function find()
    {
        $result=Anggota::find(3);
        return view('tampilkan_anggota', ['anggota' => [$result]]);
    }
}
