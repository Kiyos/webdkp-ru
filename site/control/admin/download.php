<?php
include_once("adminmain.php");
include_once("lib/dkp/dkpUploader.php");

/*=================================================
The news page displays news to the user.
=================================================*/
class pageDownload extends pageAdminMain {

	/*=================================================
	Shows a list of posts to the user. The user has
	links to skip to any page of the posts
	=================================================*/
	function area2()
	{
		global $sql;

		$this->title = iconv("CP1251", "UTF-8", "������� ���-����");
		$this->border = 1;

		$this->set("log", $this->log);
		return $this->fetch("download.tmpl.php");
	}
}
?>