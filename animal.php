<?php 

class Animal {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;

	function cetakHewan(){
		return $this->nama;
	}
	function Nama(){
		return " Hewan Ini Bernama ".$this->nama;
	}
}

class Kucing extends Animal {
	public function JumlahKaki(){
		return "Momo Memiliki Jumlah Kaki : ".$this->jumlah_kaki;
	}
	public function BisaTerbang(){
		return "Bisa Terbang : ".$this->bisa_terbang;
	}
	public function Suara(){
		return "Momo Memiliki Suara : ".$this->suara;
	}
}
class Anjing extends Animal {
	public function JumlahKaki(){
		return "Doggo Memiliki Jumlah Kaki : ".$this->jumlah_kaki;
	}
	public function BisaTerbang(){
		return "Bisa Terbang : ".$this->bisa_terbang;
	}
	public function Suara(){
		return "Doggo Memiliki Suara : ".$this->suara;
	}
}
class Elang extends Animal {
	public function JumlahKaki(){
		return "Zya Memiliki Jumlah Kaki : ".$this->jumlah_kaki;
	}
	public function BisaTerbang(){
		return "Bisa Terbang : ".$this->bisa_terbang;
	}
	public function Suara(){
		return "Zya Memiliki Suara : ".$this->suara;
	}
}
class Angsa extends Animal {
	public function JumlahKaki(){
		return "Masha Memiliki Jumlah Kaki : ".$this->jumlah_kaki;
	}
	public function BisaTerbang(){
		return "Bisa Terbang : ".$this->bisa_terbang;
	}
	public function Suara(){
		return "Masha Memiliki Suara : ".$this->suara;
	}
}