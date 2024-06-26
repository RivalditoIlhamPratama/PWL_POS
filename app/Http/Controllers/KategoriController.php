<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {

        return $dataTable->render('kategori.index');
    }

    //public function index(Request $request){
        //$kategories = KategoriModel::all();
        //if ($request->ajax()){
            //return response()->json($kategories);
        //}
        //return view('kategori.index', compact('kategories'));

        //DB::table('m_kategori')->where('kategori_kode', '$id')->delete();
    //}

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::created([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori
        ]);
        return redirect('/kategori');
    }
    public function edit($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', ['data' =>$kategori]);
    }
}


/* $data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'snack/Makanan RIngan',
            'created_at' => now()
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil'; */

        /*$row = DB::table('m_kategori')->where('kategori_kode','SNK')->update(['kategori_nama' => 'Camilan']);
        return 'Update data berhasil. Jumlah data yang diupdate: ' . $row.' baris';

        $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row.' baris';

        $data =  DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);*/