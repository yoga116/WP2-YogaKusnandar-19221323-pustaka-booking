<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Utama</title>
  <style>
    /* Menggunakan CSS untuk mengatur tata letak gambar */
    section {
      text-align: center;
      /* Pusatkan elemen dalam section */
    }

    header {
      color: white;
      background-color: seagreen;
      padding: 20px;
    }

    header hgroup {
      float: left;
      color: #fff;
    }

    header nav {
      float: right;
      margin-top: 50px;
    }

    body {
      background-color: darkgreen;
    }


    /* Stil gambar */
    .gambar-container {
      background-color: white;
      display: inline-block;
      /* Membuat elemen berjejer secara horizontal */
      margin: 20px;
      /* Jarak antara gambar */
      border: 2px solid black;
      /* Tambahkan border */
      box-shadow: 0 0 20px limegreen;
      cursor: pointer;
    }

    /* Stil gambar agar memiliki ukuran yang sama */
    .gambar-container img {
      width: 470px;
      /* Atur ukuran gambar */
      height: 300px;
      /* Atur ukuran gambar */

      cursor: pointer;
    }

    /* Stil teks nama */
    .nama-gambar {
      color: black;
      text-align: center;
    }

    /* Stil paragraf di bawah gambar */
    .deskripsi {
      text-align: center;
      color: black;
    }

    .harga {
      color: black;
      text-align: center;
    }

    input[type="submit"] {
      margin: 8px;
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    footer {
      background-color: seagreen;
    }
  </style>
</head>

<body>
  <section>
    <h1>Halaman Utama Nasi Goreng Sedap Malam</h1>

    <div class="gambar-container">
      <img src="https://i.ytimg.com/vi/UJUvr9XHHu8/maxresdefault.jpg" alt="Nasi Goreng 1">
      <h3 class="nama-gambar">Nama: Nasi Goreng Ayam</h3>
      <h3 class="deskripsi">Nasi Goreng dengan suwiran daging ayam.</h3>
      <h3 class="harga">Rp 20.000</h3>
      <a href="<?php echo base_url() . 'index.php/nasgor/pemesanan' ?>"> <input type="submit" value="Pesan"></a>
    </div>

    <!-- Gambar Kedua -->
    <div class="gambar-container">
      <img src="http://4.bp.blogspot.com/-TS-TvDmgkiU/VSqdrTlKxcI/AAAAAAAAAyU/NVgcJLyukFg/s1600/NASI%2BGORENG%2BUDANG.jpg" alt="Nasi Goreng 2">
      <h3 class="nama-gambar">Nama: Nasi Goreng Udang</h3>
      <h3 class="deskripsi">Nasi Goreng dengan udang yang renyah .</h3>
      <h3 class="harga">Rp 30.000</h3>
      <a href="<?php echo base_url() . 'index.php/nasgor/pemesanan' ?>"> <input type="submit" value="Pesan"></a>
    </div>
    <!-- Gambar Ketiga -->
    <div class="gambar-container">
      <img src="https://i0.wp.com/masakanmama.com/wp-content/uploads/2019/07/NASI-GORENG-SOSIS.jpg?w=688" alt="Nasi Goreng 1">
      <h3 class="nama-gambar">Nama: Nasi Goreng Sosis</h3>
      <h3 class="deskripsi">Nasi Goreng dengan irisan sosis.</h3>
      <h3 class="harga">Rp 25.000</h3>
      <a href="<?php echo base_url() . 'index.php/nasgor/pemesanan' ?>"> <input type="submit" value="Pesan"></a>
    </div>
    <!-- Gambar Keempat -->
    <div class="gambar-container">
      <img src="https://img-global.cpcdn.com/recipes/060c06cf7f32e732/1200x630cq70/photo.jpg" alt="Nasi Goreng 1">
      <h3 class="nama-gambar">Nama: Nasi Goreng Ati Ampela</h3>
      <h3 class="deskripsi">Nasi Goreng dengan Potongan Ati dan Ampela .</h3>
      <h3 class="harga">Rp 25.000</h3>
      <a href="<?php echo base_url() . 'index.php/nasgor/pemesanan' ?>"> <input type="submit" value="Pesan"></a>
    </div>
  </section>
</body>

</html>