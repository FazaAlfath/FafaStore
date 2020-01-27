@extends('templates.admin_master')
@section( 'tab-title', 'Dashboard' )
@section( 'admin-logged', "$adminLogged" )
@section( 'content' )

    <div id="content">
        <table>
            <thead>
                <tr>
                    <th>Nama Customer</th>
                    <th>Alamat Email</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat Pengiriman</th>
                    <th>Nama Barang</th>
                    <th>Jenis Produk</th>
                    <th>Kode Barang</th>
                    <th>Tanggal Order</th>
                    <th>Harga Per-Item</th>
                    <th>Jumlah Item</th>
                    <th>Size</th>
                    <th>Total Harga</th>
                    <th>Action</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>

            @foreach( $orders as $order )

                <tr>
                    <td>{{ $order->nama_lengkap }}</td>
                    <td>{{ $order->alamat_email }}</td>
                    <td>{{ $order->nomor_telepon }}</td>
                    <td>{{ $order->alamat_pengiriman }}</td>
                    <td>{{ $order->nama_barang }}</td>
                    <td>{{ $order->jenis_produk }}</td>
                    <td>{{ $order->kode_barang }}</td>
                    <td>{{ $order->tanggal_order }}</td>
                    <td>Rp. {{ $order->harga_peritem }}</td>
                    <td>{{ $order->jml_item }}</td>
                    <td>{{ $order->Size }}</td>
                    <td>Rp. {{ $order->total_harga }}</td>
                    <td>
                        <a id="edit" id="btnModalOrder" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <a href="/delete/{{ $order->id }}" id="hapus" class="btn">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div id="modal-order">

        <form class="form-modal-order form-row" action="/order/post" method="post">

            <button class="close-modal" >X</button>


            <div class="col-md-12">
                <label for="nama-lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>

            <div class="col-md-12">
                <label for="nama-lengkap">Alamat Email</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>

            <div class="col-md-12">
                <label for="nama-lengkap">Nomor Telepon</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>

            <div class="col-md-12">
                <label for="nama-lengkap">Jumlah item</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>

            <div class="col-md-12">
                <label for="nama-lengkap">Alamat Pengiriman</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>
            <div class="col-md-12">
                <label for="nama-lengkap">Nama Barang</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>
            <div class="col-md-12">
                <label for="nama-lengkap">Jenis Produk</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>
            <div class="col-md-12">
                <label for="nama-lengkap">Harga Produk</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>
            <div class="col-md-12">
                <label for="nama-lengkap">Size</label>
                <input type="text" name="nama_lengkap" class="form-control" placeholder="*Wajib Di isi" id="nama-lengkap" autocomplete="off" required><br>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary form-control">Order</button>
            </div>

        
        </form>

@stop