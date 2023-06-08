@extends('layouts.app')

@section('title', 'Form Barang')

@section('content')
<form action="{{ isset($stok)?route('stok.update',$stok->id):route('stok.tambah.simpan') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($stok)?'Form Edit Barang':'Form Tambah Barang'}}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ isset($stok)?$stok->kode_barang:'' }}"/>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($stok)?$stok->nama_barang:'' }}"/>
                    </div>
                    <div class="form-group">
                        <label for="kategori_barang">Kategori Barang</label>
                        <input type="text" class="form-control" id="kategori_barang" name="kategori_barang" value="{{ isset($stok)?$stok->kategori_barang:'' }}" />
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Barang</label>
                        <input type="number" class="form-control" id="harga" name="harga"  value="{{ isset($stok)?$stok->harga:'' }}"/>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ isset($stok)?$stok->jumlah:'' }}" />
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection