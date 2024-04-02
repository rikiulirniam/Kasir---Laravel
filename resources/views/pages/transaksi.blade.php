@extends('layouts.resource')
@section('content')

<main>
    <div class="hero py-5 bg-light">
       <div class="container">
          <h2>Hi, {{ $data_pembelian->nama_pembeli }}!</h2>
       </div>
    </div>

    <div class="py-5">
       <div class="container">
          <div class="row">
             <div class="col-md-6 col-lg-4">

                <form method="POST" action={{ route('add-menu') }}>
                    @csrf

                   {{-- <div class="form-group mb-3">
                      <label for="jenis" class="mb-1 text-muted">Jenis Menu</label>
                      <select id="jenis" name="jenis" class="form-control" autofocus>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                      </select>
                   </div> --}}

                   <div class="form-group my-3">
                      <label for="menu" class="mb-1 text-muted">Pilih menu</label>
                      <select id="menu" name="menu" class="form-control">
                        @foreach ($menus as $menu)=
                            <option value="makanan">{{ $menu->nama }}</option>
                            {{-- <option value="minuman">{{ $menu- }}</option> --}}
                        @endforeach
                      </select>
                   </div>

                   <div class="form-group my-3">
                      <label for="jumlah" class="mb-1 text-muted" min="1">Jumlah</label>
                      <input type="text" id="jumlah" type="number" class="form-control">
                   </div>

                   <div class="mt-4">
                      <button type="submit" class="btn btn-primary">Tambahkan</button>
                   </div>
                </form>
                
                <table class="table my-2">
                    <thead>
                        <tr class="border">
                            <td class="ps-3">Menu</td>
                            <td class="border pe-3 text-end">Harga</td>
                            <td class="text-center">Jumlah</td>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($collection as $item) --}}

                        {{-- @endforeach --}}
                        <tr class="border">
                            <td class="ps-3">Nasi Goreng</td>
                            <td class="pe-3 text-end"> Rp20.000</td>
                            <td class=" border text-center">12</td>
                        </tr>
                    </tbody>
                </table>

             </div>
          </div>
       </div>
    </div>
  </main>


@endsection

