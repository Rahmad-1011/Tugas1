<?php

class Hewan {
	public $jumlah_kaki, $bisa_terbang, $suara;
}

class Kucing {
	function nama(){
		return $this ->nama;
	}
}
	$Tom = new Kucing;
	$Tom ->nama = "Tom";
	$Tom ->jumlah_kaki = 4;
	$Tom ->bisa_terbang = "Tidak Bisa terbang";
	$Tom ->suara = "meow meow meow";


		echo "Ada seekor kucing bernama si ".$Tom ->nama();
		echo "<br>";
		echo "Dia mempunyai kaki sebanyak ".$Tom ->jumlah_kaki. "<br>";
		echo "Dia ".$Tom ->bisa_terbang. "<br>";
		echo "Dan dia bersuara ".$Tom ->suara. "<hr>";

class Ayam {
	function nama(){
		return $this ->nama;
	}
}
	$Rembo = new Ayam;
	$Rembo ->nama = "Rembo";
	$Rembo ->jumlah_kaki = 2;
	$Rembo ->bisa_terbang = "Bisa terbang kalau di seregah";
	$Rembo ->suara = "kukuruyuk";


		echo "Ada seekor ayam bernama si ".$Rembo ->nama();
		echo "<br>";
		echo "Dia mempunyai kaki sebanyak ".$Rembo ->jumlah_kaki. "<br>";
		echo "Dia ".$Rembo ->bisa_terbang. "<br>";
		echo "Dan dia bersuara ".$Rembo ->suara. "<hr>";

class Sapi {
	function nama(){
		return $this ->nama;
	}
}
	$Sepi = new Kucing;
	$Sepi ->nama = "Sepi";
	$Sepi ->jumlah_kaki = 4;
	$Sepi ->bisa_terbang = "Tidak Bisa terbang";
	$Sepi ->suara = "mooo mooo mooo";


		echo "Ada seekor sapi bernama si ".$Sepi ->nama();
		echo "<br>";
		echo "Dia mempunyai kaki sebanyak ".$Sepi ->jumlah_kaki. "<br>";
		echo "Dia ".$Sepi ->bisa_terbang. "<br>";
		echo "Dan dia bersuara ".$Sepi ->suara. "<hr>";




