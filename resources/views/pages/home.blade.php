@extends('layouts.resource')
@section('content')

<main>

    <div class="py-5">
       <div class="container">
          <div class="row">
             <div class="col-md-6 col-lg-4">

                <div class="transaksi">
                    <form method="POST" action={{ route('new.transaksi') }} class="d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <label for="transaksi">Nama Pembeli</label>
                            <input id="transaksi" type="text" name="nama_pembeli" required>
                        </div>
                        <button type="submit" class="btn btn-primary m-1">Buat Transaksi</button>
                        @csrf
                    </form>
                </div>

             </div>
          </div>
       </div>
    </div>
  </main>


@endsection

