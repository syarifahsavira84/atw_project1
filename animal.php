<?php 

class Animal {
	public $hewan, $jumlah_kaki, $bisa_terbang, $suara;

	function cetakHewan(){
		return $this->hewan;
	}
	function Hewan(){
		return " Hewan Ini Adalah ".$this->hewan;
	}
}

class Kucing extends Animal {
	public function JumlahKaki(){
		return "Kucing Memiliki Jumlah Kaki : ".$this->jumlah_kaki;
	}
	public function BisaTerbang(){
		return "Kucing Tidak Bisa Terbang";
	}
	public function Suara(){
		return "Kucing Memiliki Suara : ".$this->suara;
	}
}
class Anjing extends Animal {
	public function JumlahKaki(){
		return "Anjing Memiliki Jumlah Kaki : ".$this->jumlah_kaki;
	}
	public function BisaTerbang(){
		return "Anjing Tidak Bisa Terbang";
	}
	public function Suara(){
		return "Anjing Memiliki Suara : ".$this->suara;
	}
}
class Elang extends Animal {
	public function JumlahKaki(){
		return "Elang Memiliki Jumlah Kaki : ".$this->jumlah_kaki;
	}
	public function BisaTerbang(){
		return "Elang Bisa Terbang";
	}
	public function Suara(){
		return "Elang Memiliki Suara : ".$this->suara;
	}
}
class Angsa extends Animal {
	public function JumlahKaki(){
		return "Angsa Memiliki Jumlah Kaki : ".$this->jumlah_kaki;
	}
	public function BisaTerbang(){
		return "Angsa Bisa Terbang";
	}
	public function Suara(){
		return "Angsa Memiliki Suara : ".$this->suara;
	}
}