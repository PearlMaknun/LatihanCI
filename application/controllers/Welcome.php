<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$variabel = 1;
		$nama = "Nurul Dwi Cahya $variabel";
		$hasil = 0;
		$jawaban = array (
			'data'=>$hasil);
		$this->load->view('latihan', $jawaban);
	}

	public function Test()
	{
		$input = $this->input->post('nama');
		$data=array(
			'data_input'=>$input);
		$this->load->view('index', $data);
	}

	public function LihatData(){
		$this->load->view('home');
	}

	public function TambahData(){
		$this->load->view('tambah_data');
	}

	public function Simpan(){
		$this->load->model('mahasiswa_model');

		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$gender = $this->input->post('gender');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan,
			'gender' => $gender,
			'alamat' => $alamat
		);

		echo $nim.$nama.$jurusan.$gender.$alamat;

		if($this->mahasiswa_model->create($data)){
			echo "data berhasil di masukan!";
		}
		else{
			echo "data gagal di masukan!";
		}
	}	
}