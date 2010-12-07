<?php
include_once("adminmain.php");
include_once("lib/dkp/dkpUploader.php");

/*=================================================
The news page displays news to the user.
=================================================*/
class pageUpload extends pageAdminMain {

	/*=================================================
	Shows a list of posts to the user. The user has
	links to skip to any page of the posts
	=================================================*/
	function area2()
	{
		global $sql;

		$this->title = iconv("CP1251", "UTF-8", "Загрузка лог-файла");
		$this->border = 1;

		$this->set("log", $this->log);
		return $this->fetch("upload.tmpl.php");
	}

	function eventUploadLog(){

		if(!$this->canUploadLog ) {
			return $this->setEventResult(false, iconv("CP1251", "UTF-8", "У вас нет прав загружать лог-файл."));
		}
		$uploader = new dkpUploader();
		$this->log = $uploader->UploadLog($this->guild->id);
	}

}
?>