@extends('templates.master')
@section('tab-title', 'Detail Produk')
@section('content')

    <div class="container">

        <div id="card-detail">
            <div class="image-preview">
                <img src="" alt="">
            </div>

            @foreach( $details as $detail )
            <ul> 
                <li><h2>{{ $detail->nama_produk }}</h2></li>
                <li>{{ $detail->jenis_produk }}</li>
                <li>Rp. {{ $detail->harga_produk }}</li>
                <li>{{ $detail->keterangan_produk }}</li>
                <button class="btn btn-success" id="btnModalOrder" value="{{ $detail->id }}" style="margin-top: 15px" href="">Order Sekarang</button>
            </ul>

        </div>

    </div>

    <div id="modal-order">

        <form class="form-modal-order form-row" action="/order/post" method="post">

            <input type="hidden" name="id" value="{{ $detail->id }}">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <button class="close-modal" >X</button>
            <input type="hidden" name="nama_barang" value="{{ $detail->nama_produk }}">
            <input type="hidden" name="jenis_produk" value="{{ $detail->jenis_produk }}">
            <input type="hidden" name="harga_peritem" value="{{ $detail->harga_produk }}">


            <input type="hidden" name="kode_barang" value="{{ $detail->kode_produk }}">
            <div class="col-md-6">
                <label for="nama-lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>

            <div class="col-md-6" style="margin-top: -31px"> 
                <label for="nama-produk">Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" id="nama-produk" value="{{ $detail->nama_produk }}" disabled><br>
            </div>

            <div class="col-md-6">
                <label for="alamat-email">Alamat Email</label>
                <input type="email" name="alamat_email" class="form-control" placeholder="*Wajib Di isi" id="alamat-email" autocomplete="off" required><br>
            </div>

            <div class="col-md-6" >
                <label for="nama-produk">Jenis Produk</label>
                <input type="text" name="jenis_produk" class="form-control" id="jenis-produk" value="{{ $detail->jenis_produk }}" disabled><br>
            </div>

            <div class="col-md-6">
                <label for="nomor-telepon">Nomor Telepon</label>
                <input type="number" name="nomor_telepon" class="form-control" placeholder="*Wajib Di Isi" id="nomor-telepon" autocomplete="off" required><br>
            </div>

            <div class="col-md-6">
                <label for="nama-produk">Harga Produk</label><br>
                <input type="text" name="harga_peritem" class="form-control" id="harga-produk" value="{{ $detail->harga_produk }}" disabled><br>
            </div>

            <div class="col-md-6">
                <label for="nama-produk">Jumlah Item</label><br>
                <input type="number" name="jml_item" class="form-control" id="jml-produk" value="1" autocomplete="off" required><br>
            </div>

            <div class="col-md-6">
                <label for="nama-produk">Size</label><br>
                <input type="number" name="Size" class="form-control" id="Size-produk" value="1" autocomplete="off" required><br>
            </div>

            <div class="col-md-6">
                <label for="alamat-pengiriman">Alamat Pengiriman</label>
                <textarea type="text" name="alamat_pengiriman" class="form-control" placeholder="*Wajib Di Isi" id="alamat-pengiriman" value="Adidas Golden" required></textarea><br>
            </div>

            @endforeach

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" >Order</button>
            </div>

        
        </form>
    

    </div>

@endsection