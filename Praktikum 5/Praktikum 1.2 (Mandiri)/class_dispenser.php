<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public function isi($vol)
    {
        $this->volume = $vol;
    }

    public function isi_ulang($vol)
    {
        $this->volume = $this->volume + $vol;
    }

    public function harga($harga)
    {
        $this->hargaSegelas = $harga;

        echo "<br>Harga Segelas Rp.".$this->hargaSegelas.",-";
    }

    public function beli($nama, $vol)
    {
        $this->namaMinuman = $nama;
        $this->volumeGelas = $vol;
        $this->volume = $this->volume - $this->volumeGelas;
        echo "<br>Nama Minuman: ".$this->namaMinuman;
        echo "<br>Volume Minuman: ".$this->volumeGelas;
    }

    public function isi_dispenser(){
        echo "Isi Dispenser ".$this->volume."ml";
    }
}

$dispenser = new Dispenser();
echo "<br><b>ISI AWAL DISPENSER 250ML</b><br>";
$dispenser->isi(250);
$dispenser->isi_dispenser();
echo "<br><br><b>BELI MINUMAN</b>";
$dispenser->beli("AQUA", 100);
$dispenser->harga(5000);
echo "<br><br><b>ISI DISPENSER SETELAH DIBELI</b><br>";
$dispenser->isi_dispenser();
echo "<br><br><b>DISPENSER DIISI ULANG 200ML</b><br>";
$dispenser->isi_ulang(200);
$dispenser->isi_dispenser();
?>