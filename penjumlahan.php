<?php
class penjumlahan
{
	public $bil1,$bil2,$bil3,$bil4;
	public function set_penjumlahan($bilangan1, $bilangan2 )
	{
	$this->bil1 = $bilangan1;
	$this->bil2 = $bilangan2;
	}
	public function get_penjumlahan()
	{
	return $this->bil1 + $this->bil2;
	}
	public function get_pengurangan()
	{
	return $this->bil3 - $this->bil4;
	}
	public function get_perkalian()
	{
	return $this->bil1 * $this->bil2;
	}
	public function get_pembagian()
	{
	return $this->bil1 / $this->bil2;
	}
}


class siswa
{
	public $nama;
	public $lahir;
	public $kelas;
	public $status;
	function __construct ($nama, $lahir, $kelas, $status)
	{
		$this->nama = $nama;
		$this->lahir = $lahir;
		$this->kelas = $kelas;
		$this->status = $status;
		
	}
	public function get_nama()
	{
	return $this->nama;
	}
	public function get_lahir()
	{
	return $this->lahir;
	}
	public function get_kelas()
	{
	return $this->kelas;
	}
	public function get_status()
	{
	return $this->status;
	}

}
?>
