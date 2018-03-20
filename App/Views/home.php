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
        <div class="box-title bg-default"> <h1>Daftar Barang</h1> </div>
        <div class="box-content">
          <table>
            <tr>
              <th>No</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Harga</th>
              <th>Stock</th>
              <th>Aksi</th>
            </tr>
            <?php foreach ($data['nama_barang'] as $row): ?>
            <tr class="text-center">
              <td>1</td>
              <td><?= $row['kode_barang']; ?></td>
              <td><?= $row['nama_barang']; ?></td>
              <td>Rp. <?= $row['harga']; ?></td>
              <td><?= $row['stock']; ?></td>
              <td>
                <button class="tombol-small tombol-default">Edit</button>
                <button class="tombol-small tombol-error">Hapus</button>
              </td>
            </tr>
          <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
    <!-- BATAS CONTENT -->
  </div>
</div>













<?php require_once "layouts/footer.php" ?>
