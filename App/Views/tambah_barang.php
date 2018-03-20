<?php require_once "layouts/header.php" ?>

<div class="container-full">
  <div class="row">
    <!-- MENU -->
    <div class="col-2">
      <nav class="menu">
        <ul>
          <li> <a href="<?= route('home'); ?>">Tampil Barang</a> </li>
          <li> <a href="<?= route('home/tambah'); ?>">Tambah Barang</a> </li>
          <li> <a href="<?= route('home/pelanggan'); ?>">Tampil Pelanggan</a> </li>
          <li> <a href="<?= route('home/tambahpelanggan'); ?>">Tambah Pelanggan</a> </li>
        </ul>
      </nav>
    </div>
    <!-- BATAS MENU -->

    <!-- CONTENT -->
    <div class="col-10">
      <div class="box">
        <div class="box-title bg-default"> <h1>Tambah Barang</h1> </div>
        <div class="box-content">
            <form class="" action="" method="post">
              <label for="kode">Kode Barang</label>
              <input type="text" name="kode" id="kode" value="" placeholder="Masukan kode barang">
              <label for="nama">Nama Barang</label>
              <input type="text" name="nama" id="nama" value="" placeholder="Masukan nama barang">
              <label for="harga">Harga</label>
              <input type="number" name="harga" id="harga" value="" placeholder="Rp.0">
              <label for="stok">Stock</label>
              <input type="number" id="stok" min="0" name="stock" value="" placeholder="0">
              <input type="submit" class="tombol tombol-success" name="submit" value="Tambah">
              <input type="reset" class="tombol tombol-error" name="reset" value="Batal">
            </form>
        </div>
      </div>
    </div>
    <!-- BATAS CONTENT -->
  </div>
</div>













<?php require_once "layouts/footer.php" ?>
