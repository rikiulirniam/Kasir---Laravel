<?php

namespace App\Http\Controllers;

use App\Models\DataPembelian;
use App\Http\Requests\StoreDataPembelianRequest;
use App\Http\Requests\UpdateDataPembelianRequest;
use App\Models\Detail;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $menus = Menu::all();
        // $data_pembelian = DataPembelian::query();
        $data_pembelian = Session::get('data_pembelian');
        return view('pages.transaksi', [
            'menus' => $menus,
            'data_pembelian' => $data_pembelian
        ]);
    }

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
        $dataPembelian = DataPembelian::create([
            'nama_pembeli' => $request->nama_pembeli,
            'total' => NULL,
            'waktu_pembelian' => date(now())
        ]);

        Session::put('data_pembelian', $dataPembelian);

        return redirect()->route('kasir.transaksi')->with([
            'data_pembelian' => $dataPembelian
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPembelian $dataPembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataPembelian $dataPembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataPembelianRequest $request, DataPembelian $dataPembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataPembelian $dataPembelian)
    {
        //
    }
}
