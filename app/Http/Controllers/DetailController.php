<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKeranjangRequest;
use App\Http\Requests\UpdateKeranjangRequest;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Detail::all();
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
        $data = Session::get('data_pembelian');

        return redirect()->route()('pages.transaksi', [
            'detail' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail $Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail $Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $keranjang)
    {
        //
    }
}
