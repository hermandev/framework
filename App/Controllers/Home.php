<?php
class Home extends Controller {

	public function index() {
		$barang = $this->model('barang')->tampil('tb_barang');
		return $this->view('home', [ 'nama_barang' => $barang ]);
	}

	public function tambah() {
		return $this->view('tambah_barang');
	}

	public function pelanggan() {
		$pelanggan = $this->model('pelanggan')->tampil('tb_pelanggan');
		return $this->view('tampil_pelanggan', [ 'data_pelanggan' => $pelanggan ]);
	}

	public function tambahpelanggan() {
		return $this->view('tambah_pelanggan');
	}

}
