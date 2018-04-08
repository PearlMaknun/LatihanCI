<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulator extends CI_Controller {

	public function Hasil()
	{
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$aritmatika = $this->input->post('aritmatika');
		//$hasil = 0;
		/*if ($aritmatika == "tambah") {
			$hasil = $angka1 + $angka2;
		}
		elseif ($aritmatika == "kurang"){
			$hasil = $angka1 - $angka2;
		}
		elseif ($aritmatika == "bagi"){
			$hasil = $angka1 / $angka2;
		}
		else{
			$hasil = $angka1 * $angka2;
		}*/
		switch($aritmatika){
		case 'tambah':
			$hasil = $angka1 + $angka2;
			break;
		case 'kurang':
			$hasil = $angka1 - $angka2;
			break;
		case 'kali':
			$hasil = $angka1 * $angka2;
			break;
		case 'bagi':
			$hasil = $angka1 / $angka2;
			break;}
		$jawaban=array(
			'data'=>$hasil
		);
		$this->load->view('latihan', $jawaban);
	}
}
