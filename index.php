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
	$Tom ->bisa_terbang = "Tidak Bisa";
	$Tom ->suara = "meow meow meow";


		echo "Ada seekor kucing bernama si ".$Tom ->nama();
		echo "<br>";
		echo "Dia mempunyai kaki sebanyak ".$Tom ->jumlah_kaki. "<br>";
		echo "Dia ".$Tom ->bisa_terbang. "<br>";
		echo "Dan dia bersuara ".$Tom ->suara. "<hr>";




