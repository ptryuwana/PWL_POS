<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PenjualanDetailModel;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return PenjualanModel::all();
    }

    public function store(Request $request)
    {
        $transaksi = PenjualanModel::create($request->all());
        return response()->json($transaksi, 201);
    }

    public function show(PenjualanModel $transaksi)
    {
        $transaksiWithImage = PenjualanModel::with('barang')->find($transaksi->detail_id);
        return response()->json($transaksiWithImage);
    }

    public function update(Request $request, PenjualanModel $transaksi)
    {
        $transaksi->update($request->all());
        return PenjualanModel::find($transaksi);
    }

    public function destroy(PenjualanModel $transaksi)
    {
        $transaksi->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}