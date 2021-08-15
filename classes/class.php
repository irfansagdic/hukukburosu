<?php 



/*
class clsAnasayfa()
{
	function clsAnasayfa()
	{
		echo "yapıcı sınıf";
	}
	function slogan()
	{
		$Bilgiler=SelectFetch("tblAnasayfa","id",1,$baglan);
		echo $Bilgiler["bannerSlogan"];
	}
	
	
	
}*/


class clsAnasayfa {
	private $host;
	private $user;
	private $pass;
	private $db;
	private $baglan;
	
   function clsAnasayfa() {
	   
	$this->host="localhost";
	$this->user="coskune1_admin";
	$this->pass="Y^5h}ehb&5*R";
	$this->db="coskune1_hukuk";
	
	//$this->sloganYazdir("SELECT * FROM tblAdmin WHERE id=1","","",$this->baglan);
	
   }
   
   private function baglantiAc()
   {
	   $this->baglan=new PDO("mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8;",$this->user,$this->pass);
   }
      private function baglantiKapat() {
        $this->baglan = null;
    }
   
   function sloganYazdir()
   {
	
	   $this->baglantiAc();
	   $sql=$this->baglan->query("SELECT * FROM tblAnasayfa WHERE id=1");
	   $sonuc=$sql->fetch();
	   $this->baglantiKapat();
	    echo $sonuc["bannerSlogan"];
   }
      function yaziYazdir()
   {
	
	   $this->baglantiAc();
	   $sql=$this->baglan->query("SELECT * FROM tblAnasayfa WHERE id=1");
	   $sonuc=$sql->fetch();
	   $this->baglantiKapat();
	    echo $sonuc["bannerYazi"];
   }
     function Banner()
   {
	
	   $this->baglantiAc();
	   $sql=$this->baglan->query("SELECT * FROM tblAnasayfa WHERE id=1");
	   $sonuc=$sql->fetch();
	   $this->baglantiKapat();
	    return $sonuc["bannerResim"];
   }
   function bannerYazdir()
   {
	    $this->baglantiAc();
	   $sql=$this->baglan->query("SELECT * FROM tblAnasayfa WHERE id=1");
	   $sonuc=$sql->fetch();
	   $this->baglantiKapat();
	    echo $sonuc["bannerResim"];
   }
   function ilkUcHizmet()
   {
	    $this->baglantiAc();
		$sql=$this->baglan->query('SELECT * FROM tblHizmetler ORDER BY hizmetId DESC LIMIT 3 ',PDO::FETCH_ASSOC);
		return $sql;
		$this->baglantiKapat();
   }
     function hizmetleriYazdir()
   {
	    $this->baglantiAc();
		$sql=$this->baglan->query('SELECT * FROM tblHizmetler ORDER BY hizmetId DESC ',PDO::FETCH_ASSOC);
		return $sql;
		$this->baglantiKapat();
   }
    function ilkBesReferans()
   {
	    $this->baglantiAc();
		$sql=$this->baglan->query('SELECT * FROM tblReferanslar ORDER BY referansId DESC LIMIT 10 ',PDO::FETCH_ASSOC);
		return $sql;
		$this->baglantiKapat();
   }
       function referanslariYazdir()
   {
	    $this->baglantiAc();
		$sql=$this->baglan->query('SELECT * FROM tblReferanslar ORDER BY referansId DESC ',PDO::FETCH_ASSOC);
		return $sql;
		$this->baglantiKapat();
   }
   function ilkUcTakim()
   {
	  
	   
	    $this->baglantiAc();
		$sql=$this->baglan->query('SELECT * FROM tblTakım ORDER BY takimId DESC LIMIT 3 ',PDO::FETCH_ASSOC);
		return $sql;
		$this->baglantiKapat();
   }
   function takimUyeSayisi()
   {
	   $this->baglantiAc();
		$sorgu1 = $this->baglan->prepare("SELECT COUNT(*) FROM tblTakım");
		$sorgu1->execute();
		$uzunluk1 = $sorgu1->fetchColumn();
		return $uzunluk1;
		$this->baglantiKapat();
   }
    function hizmetSayisi()
   {
	   $this->baglantiAc();
		$sorgu1 = $this->baglan->prepare("SELECT COUNT(*) FROM tblHizmetler");
		$sorgu1->execute();
		$uzunluk1 = $sorgu1->fetchColumn();
		return $uzunluk1;
		$this->baglantiKapat();
   }
       function referansSayisi()
   {
	   $this->baglantiAc();
		$sorgu1 = $this->baglan->prepare("SELECT COUNT(*) FROM tblReferanslar");
		$sorgu1->execute();
		$uzunluk1 = $sorgu1->fetchColumn();
		return $uzunluk1;
		$this->baglantiKapat();
   }
   
    function sliderResimleri()
   {
	   $this->baglantiAc();
		$sql=$this->baglan->query('SELECT * FROM anasayfaSlider ORDER BY sliderId DESC LIMIT 5 ',PDO::FETCH_ASSOC);
		return $sql;
		$this->baglantiKapat();
   }
}
 

 

?>
