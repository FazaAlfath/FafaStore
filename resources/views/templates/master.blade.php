<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>@yield('tab-title')</title>
</head>
<body>
    <header class="container-fluid bg-white">
        <div id="header-logo">
            <h3>FAFASTORE</h3>
        </div>
        <ul>
            <a href="/">Beranda</a>
            <a href="/tentang">Tentang</a>
            <a href="/bantuan">Bantuan</a>
        </ul>
    </header>

    @yield('content')
    
    <footer class="container-fluid bg-white">
        <div id="footer-info">
            <ul class="address">
                <h4>Alamat Toko</h4>
                <a href="">Pembelian Eceran & Grosir</a>
                <a href="">Menerima Pesan Antar</a>
                <a href="">Pemesanan Barang</a>
                <a href="">Produk Original</a>
            </ul>
            <ul class="service">
                <h4>Layanan Kami</h4>
                <a href="">Pembelian Eceran & Grosir</a>
                <a href="">Menerima Pesan Antar</a>
                <a href="">Pemesanan Barang</a>
                <a href="">Produk Original</a>
            </ul>
            <ul class="contact">
                <h4>Kontak Kami</h4>
                <a href="">Telp : 0895-3498-94456</a>
                <a href="">Instagram : @Fazaa_45</a>
                <a href="">Facebook : @Faza_Alfath</a>
            </ul>
        </div>
        <div id="footer-cop" class="text-center">
            <p>Copyright 2020 &copy; fafastore.com</p>
        </div>
    </footer>

<script type="text/javascript">

    const modalOrder = document.querySelector('#modal-order');
    const btnModalOrder = document.querySelector('.container ul button#btnModalOrder');
    const btnCloseModal = document.querySelector('#modal-order button.close-modal');

    btnModalOrder.addEventListener('click', function(){
        modalOrder.style.display = "flex";
    });

    btnCloseModal.addEventListener('click', function(e){
        e.preventDefault();
        modalOrder.style.display = "none";
    });

</script>
</body>
</html>