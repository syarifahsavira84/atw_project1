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
class Elang extends Animal {
	public function JumlahKaki(){
		return "Elang Memiliki Jumlah Kaki 2";
	}
	public function BisaTerbang(){
		return "Elang Bisa Terbang";
	}
	public function Suara(){
		return "Elang Memiliki Suara : Miiipppp ";
	}
}
class Angsa extends Animal {
	public function JumlahKaki(){
		return "Angsa Memiliki Jumlah Kaki 2";
	}
	public function BisaTerbang(){
		return "Angsa Bisa Terbang";
	}
	public function Suara(){
		return "Angsa Memiliki Suara : Kwaaak ";
	}
}