<?php
class PesawatTerbang{
    
    public $warnaPesawat;
	public function __construct($warnaAwal){ //methond yang akan di jalankan ketika pertama dibuat 
        $this->warnaPesawat = $warnaAwal;
    }
	public function gantiWarna($warnaBaru){
		$this->warnaPesawat=$warnaBaru;
		return  $this->warnaPesawat;
	}
    public function setWarna($warnaBaru){
        $this->warnaPesawat = $warnaBaru;
    }
    public function getWarna(){
        return $this->warnaPesawat;
    }
}

class Mobil{
    protected $warnaMobil;
    protected $kecepatanMobil;

    public function __construct($warnaAwalMobil)
    {
        $this->warnaMobil = $warnaAwalMobil;
        $this->kecepatanMobil = 0;
    }
    public function tambahKecepatan($kecepatan)
    {
        $this->kecepatanMobil = $kecepatan+$this->kecepatanMobil;
    }

    public function setWarna($warnaBaru)
    {
        $this->warnaMobil = $warnaBaru;
    }
    public function getWarna()
    {
        return $this->warnaMobil;
    }
    public function getKecepatan()
    {
        return $this->kecepatanMobil;
    }
}
class MobilBalap extends Mobil
{
    public function tambahKecepatan($kecepatan)
    {
        $this->kecepatanMobil = (2*$kecepatan)+$this->kecepatanMobil;
    }

}

?>