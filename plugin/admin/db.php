<?php 
/*VERİTABANI BİLGİLERİ*/
$dbkullanici='root'; // veritabanı kullanıcı adı
$dbpassword=''; //  veritabanı şifresi
$host= 'localhost'; //  host
$logindb= 'u9069360_servis_marsteknoloji'; //  veritabani ismi


class dbconn {
	public $dblocal;
	public function __construct()
	{
		global $host, $logindb, $dbkullanici, $dbpassword;
	}
	public function initDBO()
	{
		global $host, $logindb, $dbkullanici, $dbpassword;
		try {
			$dblocal = new PDO("mysql:host=$host;dbname=$logindb;charset=utf8",$dbkullanici,$dbpassword,array(PDO::ATTR_PERSISTENT => true));
			$dblocal->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			die("Veritabanı Bağlantısı Sağlanamadı");
		}
	}
}
try {
	global $host, $logindb, $dbkullanici, $dbpassword;
	$db=new PDO("mysql:host=".$host.";dbname=".$logindb.";charset=utf8",$dbkullanici,$dbpassword);
} catch (PDOExpception $e) {
	echo $e->getMessage();
}
?>

<?php 
$isletmeadi="Mars Teknoloji Sistemleri";
$logoyolu="http://hotspot.marsteknoloji.net/img/Mars-Logo.png";
?>