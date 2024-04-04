<?php

namespace App\Http\Controllers;

use App\DataTables\LevelDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\LevelModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LevelController extends Controller
{
    // public function index(){
    //     // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['CUS', 'Pelanggan', now()]);
    //     // return 'Insert data baru Berhasil';

    //     // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
    //     // return 'Update data berhasil. Jumlah data yang diupdate: '. $row .' baris';

    //     // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
    //     // return 'Update data berhasil. Jumlah data yang diupdate: '. $row .' baris';

    //     $data = DB::select('select * from m_level');
    //     return view('level', ['data' => $data]);
    // }

    public function index(LevelDataTable $dataTable){

        return $dataTable->render('level.index');
    }

    public function add():View{
        return view('level.add');
    }

    public function store(StorePostRequest $request): RedirectResponse{
        // $validate = $request->validate([
        //     'level_kode' => 'required',
        //     'level_nama' => 'required',
        // ]);
        
        $validated = $request->validated();
        
        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        $validated = $request->safe()->except(['level_kode', 'level_nama']);

        LevelModel::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama
        ]);

        return redirect('/level');
    }

    public function edit($id){
        $level = LevelModel::find($id);
        return view('level.edit', ['data' => $level]);
    }

    public function update($id, Request $request){
        $level = LevelModel::find($id);

        $level->level_kode = $request->level_kode;
        $level->level_nama = $request->level_nama;

        $level->save();

        return redirect('/level');
    }

    public function delete($id){
        $level = LevelModel::find($id);
        $level->delete();

        return redirect('/level');
    }
}
