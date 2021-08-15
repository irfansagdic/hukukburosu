<?php 
	function s($par){
		return $_SESSION[$par];
	}
	function p($par){
				
	$q = htmlspecialchars(addslashes(trim($_POST[$par])));
			$q = str_replace("script", "blocked", $q);
			$q = str_replace("'"," ",$q);
			$q = str_replace("("," ",$q);
			$q = str_replace(")"," ",$q);
			$q = str_replace(";"," ",$q);
			$q = str_replace(":"," ",$q);
			$q = str_replace("<"," ",$q);
			$q = str_replace("'"," ",$q);
			$q = str_replace("("," ",$q);
			$q = str_replace(")"," ",$q);
			$q = str_replace(";"," ",$q);
			$q = str_replace(":"," ",$q);
			$q = str_replace("<"," ",$q);
			return $q;
	}
	function g($par){
				
	$q = htmlspecialchars(addslashes(trim($_GET[$par])));
			$q = str_replace("script", "blocked", $q);

			$q = str_replace("'"," ",$q);
			$q = str_replace("("," ",$q);
			$q = str_replace(")"," ",$q);
			$q = str_replace(";"," ",$q);
			$q = str_replace(":"," ",$q);
			$q = str_replace("<"," ",$q);
			$q = str_replace("'"," ",$q);
			$q = str_replace("("," ",$q);
			$q = str_replace(")"," ",$q);
			$q = str_replace(";"," ",$q);
			$q = str_replace(":"," ",$q);
			$q = str_replace("<"," ",$q);
			return $q;
	}

	function update($tablo,$sutun,$deger,$sutun2,$deger2,$baglan)
		{
				$sql=$baglan->query("UPDATE ".$tablo." SET ".$sutun." = ".$deger." WHERE ".$sutun2." = "." $deger2");
				if($sql)
				{
					return true;
				}
				else{
					return false;
				}
		}
		
	function del($tablo,$sutun,$deger,$baglan)
	{
		$sql=$baglan->exec("DELETE FROM ".$tablo." WHERE ".$sutun."=".$deger."");
		if($sql)
			{
				return true;
			}
			else
			{
				return false;		
			}
			return $sql;
	}
	
	function SelectAll($tablo,$baglan)
	{
		$sql=$baglan->query('SELECT * FROM '.$tablo.' ',PDO::FETCH_ASSOC);
		return $sql;
	}
	
	function SelectAllW($tablo,$sutun,$deger,$baglan)
	{
		$sql=$baglan->query("SELECT * FROM ".$tablo." WHERE ".$sutun."=".$deger." ",PDO::FETCH_ASSOC);
		return $sql;
		//foreach için
	}
		function s_count($tablo,$baglan)
	{
		$sorgu1 = $baglan->prepare("SELECT COUNT(*) FROM ".$tablo);
		$sorgu1->execute();
		$uzunluk1 = $sorgu1->fetchColumn();
		return $uzunluk1;
	}
	function s_count_w_th($tablo,$sutun,$deger,$sutun2,$deger2,$sutun3,$deger3,$baglan)
	{
		$sorgu1 = $baglan->prepare("SELECT COUNT(*) FROM ".$tablo." WHERE ".$sutun." = ".$deger." && ".$sutun2." = ".$deger2." && ".$sutun3." = ".$deger3." ");
		$sorgu1->execute();
		$uzunluk1 = $sorgu1->fetchColumn();
		return $uzunluk1;
	}
	function s_count_w($tablo,$sutun,$deger,$baglan)
	{
		$sorgu1 = $baglan->prepare("SELECT COUNT(*) FROM ".$tablo." WHERE ".$sutun."=".$deger." ");
		$sorgu1->execute();
		$uzunluk1 = $sorgu1->fetchColumn();
		return $uzunluk1;
	}
	function s_count_w_t($tablo,$sutun,$deger,$sutun2,$deger2,$baglan)
	{
		$sorgu1 = $baglan->prepare("SELECT COUNT(*) FROM ".$tablo." WHERE ".$sutun."=".$deger." AND ".$sutun2."=".$deger2);
		$sorgu1->execute();
		$uzunluk1 = $sorgu1->fetchColumn();
		return $uzunluk1;
	}
		
	function SelectFetch($tablo,$sutun,$deger,$baglan)
	{
		$sql=$baglan->query("SELECT * FROM ".$tablo." WHERE ".$sutun."=".$deger." ");
		$array=$sql->fetch();
		return $array;
	}
		function SelectFetch2($tablo,$sutun,$deger,$sutun2,$deger2,$baglan)
	{
		$sql=$baglan->query("SELECT * FROM ".$tablo." WHERE ".$sutun."=".$deger." AND ".$sutun2."=".$deger2);
		$array=$sql->fetch();
		return $array;
	}
	
		function Insertdata($tablo,$sutun,$deger,$baglan)
		{
				$sutunlar= implode(',',$sutun);
				$degerler=implode("','",$deger);
				$sql=$baglan->exec("INSERT INTO $tablo (".$sutunlar.") 
				VALUES ('".$degerler."') ");
				if($sql)
				{
					return true;
				}
				else
				{
					return false;		
				}
		}
		
		function post($deger)
		{
			return $_POST[$deger];
		}
		
		function get($deger)
		{
			return $_GET[$deger];	
		}
		
		function SessionTime($deger)
		{
			$dondur=session_cache_expire($deger);
			return $dondur;
		}
			function go($par, $time = 0){
		if ($time == 0){
			header("Location: {$par}");
		}else {
			header("Refresh: {$time}; url={$par}");
		}
			}
		function replace_tr($text) {
   $text = trim($text);
   $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
   $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
} 	
function kadi($ad,$soyad){
	$hata=0;
	$ad=replace_tr($ad);
	$soyad=replace_tr($soyad);
	$kadi=$ad."".$soyad."".rand(2258,2259);

	return $kadi;
}
function file_upload($name,$yol){
	
	
			  if(@$_FILES[$name]["name"] != "")
            {
            $isim = $_FILES[$name]["name"];
                $tur =  pathinfo($isim, PATHINFO_EXTENSION);
                $sadeIsim = basename($isim, ".$tur");
                $sadeIsim=isimDuzelt($sadeIsim).'-'.rand(1,10000);
                $isim=$sadeIsim.'.'.$tur;       
                
                    move_uploaded_file($_FILES[$name]["tmp_name"],$yol.'/'.$isim);
                    
                    
               
				return $isim;
            }
			else{
				return false;
			}
	
}
function image_upload($name,$yol){
	
	
			  if(@$_FILES[$name]["name"] != "")
            {
            $isim = $_FILES[$name]["name"];
                $tur =  pathinfo($isim, PATHINFO_EXTENSION);
                $sadeIsim = basename($isim, ".$tur");
                $sadeIsim=isimDuzelt($sadeIsim).'-'.rand(1,10000);
                $isim=$sadeIsim.'.'.$tur;       
                if($tur == "png" || $tur=="jpg" || $tur=="jpeg" || $tur=="gif" || $tur=="PNG")
				{
                    move_uploaded_file($_FILES[$name]["tmp_name"],$yol.'/'.$isim);
					return $isim;
				}
				else{
					return "tur_hata";
				}
                    
                    
               
				
            }
			else{
				return false;
			}
	
}
	function isimDuzelt($deger) {
	$turkce=array("ş","Ş","ı","(",")","'","ü","Ü","ö","Ö","ç","Ç"," ","/","*","?","ş","Ş","ı","ğ","Ğ","İ","ö","Ö","Ç","ç","ü","Ü");
	$duzgun=array("s","S","i","","","","u","U","o","O","c","C","-","-","-","","s","S","i","g","G","I","o","O","C","c","u","U");
	$deger=str_replace($turkce,$duzgun,$deger);
	//$deger = preg_replace("@[^A-Za-z0-9\-_]+@i","",$deger);
	return $deger;
	}
// tüm boşlukları silme
			function bosluk_sil($veri)
			{
			$veri = str_replace("/s+/","",$veri);
			$veri = str_replace(" ","",$veri);
			$veri = str_replace(" ","",$veri);
			$veri = str_replace(" ","",$veri);
			$veri = str_replace("/s/g","",$veri);
			$veri = str_replace("/s+/g","",$veri);		
			$veri = trim($veri);
			return $veri; 
			}
	//X ZAMAN ÖNCE PAYLAŞILDI
	function timeConvert ( $zaman ){
	$zaman=str_replace(".","-",$zaman);
	$zaman =  strtotime($zaman);
	$zaman_farki = time() - $zaman;
	$saniye = $zaman_farki;
	$dakika = round($zaman_farki/60);
	$saat = round($zaman_farki/3600);
	$gun = round($zaman_farki/86400);
	$hafta = round($zaman_farki/604800);
	$ay = round($zaman_farki/2419200);
	$yil = round($zaman_farki/29030400);
	if( $saniye < 60 ){
		if ($saniye == 0){
			return "az önce";
		} else {
			return $saniye .' saniye önce';
		}
	} else if ( $dakika < 60 ){
		return $dakika .' dakika önce';
	} else if ( $saat < 24 ){
		return $saat.' saat önce';
	} else if ( $gun < 7 ){
		return $gun .' gün önce';
	} else if ( $hafta < 4 ){
		return $hafta.' hafta önce';
	} else if ( $ay < 12 ){
		return $ay .' ay önce';
	} else {
		return $yil.' yıl önce';
	}
}
function replaceSpace($string)
{
	for($i=0; $i<count($string);$i++)
	{
		if($string[$i] ==" ")
		{
			str_replace(" ","\n",$string[$i]);
		}
	}
	return $string;
}
function seflink($text)
{
$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
$text = strtolower(str_replace($find, $replace, $text));
$text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
$text = trim(preg_replace('/\s+/', ' ', $text));
$text = str_replace(' ', '-', $text);
return $text;
}
function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 20; $i++) {
            $randstring .= $characters[rand(0,60)];
        }
        return $randstring;
    }
function substrirfn($yazi,$bas,$bitis)
{
	return substr($yazi,$bas,$bitis);
	
}
?>
