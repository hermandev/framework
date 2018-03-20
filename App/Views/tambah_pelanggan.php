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
              <label for="kode">Kode Pelanggan</label>
              <input type="text" name="kode" id="kode" value="" placeholder="Masukan kode Pelanggan">
              <label for="nama">Nama </label>
              <input type="text" name="nama" id="nama" value="" placeholder="Masukan nama Pelanggan">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" rows="8" cols="80" placeholder="Masukan Alamat"></textarea>
              <label for="nohp">No HP</label>
              <input type="number" id="nohp" name="nohp" value="" placeholder="+628808000">
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
