<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){
        
        return $dataTable->render('kategori.index');
    }

    public function create(): View{
        return view('kategori.create');
    }

    public function store(StorePostRequest $request): RedirectResponse{
        // $validatedData = $request->validate([
        //     'kategori_kode' => ['required'],
        //     'kategori_nama' => ['required']
        // ]);
        $validated = $request->validated();
        
        $validated = $request->safe()->only(['kateogri_kode', 'kategori_nama']);
        $validated = $request->safe()->except(['kateogri_kode', 'kategori_nama']);

        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama
        ]);

        return redirect('/kategori');
    }

    public function edit($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $kategori]);
    }

    public function update($id, Request $request){
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();

        return redirect('/kategori');
    }

    public function delete($id){
        KategoriModel::find($id)->delete();
        return redirect('/kategori');
    }
}
