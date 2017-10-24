
<?php 
class manusia{
    public $suara;
	public $tinggi_badan;
	
public function set_suara( $bunyi )
	{
		return $this-> suara= $bunyi
	}
}
$manusia = new manusia;




 echo '<br>';
class hujan{
    public $suara = 'tik tik' ;
	public $warna= 'putih';
	
}
$hujan = new hujan;
echo "bunyi hujan..." .$hujan-> suara;echo '<br>';
echo "warna nya ...." .$hujan-> warna;



 echo '<br>';
class rumput{
    public $warna = 'hijau' ;
	public $tinggi= 10;
	
}
$rumput = new rumput;
echo "warna rumput...." .$rumput-> warna;echo '<br>';
echo "tinggi nya...." .$rumput-> tinggi;



 echo '<br>';
class rumah{
    public $pondasi = 10 ;
	public $tinggi_tiang= 30;
	
}
$rumah = new rumah;
echo "dalam pondasi nya....." .$rumah-> pondasi;echo '<br>';
echo "tinggi tiang nya...." .$rumah-> tinggi_tiang;



echo '<br>';class meja{
    public $kaki = 4 ;
	public $warna= 'coklat';
	
}
$meja = new meja;
echo "kaki nya....." .$meja-> kaki;echo '<br>';
echo "warna...." .$meja-> warna;


?>