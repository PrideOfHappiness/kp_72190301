<!DOCTYPE html> 
<head> 
    @include('template/header')
    <title> Tentang Situs Ini </title>
</head>
<body> 
    @include('template/navbar')
    @include('template/sidebar')

    <div class="content-wrapper px-4 py-2"> 
        <div class="content-header">
            <h1> Tentang Situs Ini </h1>
        </div>
        <div class="content px-2">
            <p> Situs ini adalah situs untuk menyampaikan informasi dengan mengambil data dari ACRS yang diunggah ke situs ini untuk mendapatkan keluaran informasi <br />
            seputar penjualan sepeda motor yang dibutuhkan. </p>
            <br />
            <p> Akan tetapi, kami mengakui bahwa sistem ini tidaklah sempurna sepenuhnya. </p>
            <p> Apabila terdapat hal-hal yang ingin ditanyakan atau terdapat saran pengguna untuk sistem ini, dapat menyampaikan masukan melalui: </p> 
            <br />
            <br />
            <p> PT. Marga Kartika Motor </p>
            <p> Jalan Hayam Wuruk No. 58</p>
            <p> Kelurahan Tanggung, Kecamatan Wlingi</p>
            <p> Kabupaten Blitar, Jawa Timur, Kode Pos 66184</p>
        
        </div>
    </div> 
    @include('template/footer')
</body>
</html>