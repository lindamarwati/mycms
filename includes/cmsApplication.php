<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
	//semua kode yang ada disini dapat diakses melalui fungsi utama dalam cms
		function addcontent()
		{
		echo 'disini akan dibuat fungsi untuk menambah konten';
		}
		
		function viewcontent()
		{
		echo 'disini akan dibuat fungsi untuk menampilkan konten';
		}
		
		function anyothertask()
		{
		echo 'disini akan ditulis fungsi yang lainnya';
		}
	}

?>