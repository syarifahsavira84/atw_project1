<?php 

class Animal {
	public $hewan, $jumlah_kaki, $bisa_terbang, $suara;

	function cetakHewan(){
		return $this->hewan;
	}
	function Hewan(){
		return " Hewan Ini Adalah : ".$this->hewan;
	}
	function jumlahKaki(){
		return " Jumlah Kakinya : ".$this->jumlah_kaki;
	}
		function bisaTerbang(){
		return " Dia Bisa Terbang : ".$this->bisa_terbang;
	}
		function Suara(){
		return " Suaranya : ".$this->suara;
	}
}

class Kucing extends Animal {
	public function JumlahKaki(){
		return "Kucing Memiliki Jumlah Kaki 4";
	}
	public function BisaTerbang(){
		return "Kucing Tidak Bisa Terbang";
	}
	public function Suara(){
		return "Kucing Memiliki Suara : Meooong ";
	}
}
class Anjing extends Animal {
	public function JumlahKaki(){
		return "Anjing Memiliki Jumlah Kaki 4";
	}
	public function BisaTerbang(){
		return "Anjing Tidak Bisa Terbang";
	}
	public function Suara(){
		return "Anjing Memiliki Suara : GuukGuuk ";
	}
}