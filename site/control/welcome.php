<?php
/*=================================================
The news page displays news to the user.
=================================================*/
class pageWelcome extends page {

	var $layout;
	var $pagetitle;
	
	// конструктор
	function pageWelcome()
	{
		$this->layout = "Columns1";
		$this->pagetitle = iconv("CP1251", "UTF-8", "Добро пожаловать");
	}
	/*=================================================
	Shows a list of posts to the user. The user has
	links to skip to any page of the posts
	=================================================*/
	function area2()
	{
		global $guildset;
		$this->title = iconv("CP1251", "UTF-8", "Добро пожаловать!");
		$this->border = 1;

		$guildurl = dkpUtil::GetGuildUrl($siteUser->guild)."Admin";
		$this->set("guildurl",$guildurl);
		return $this->fetch("join/welcome.tmpl.php");
	}
}
?>