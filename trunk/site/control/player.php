<?php
include_once("lib/dkp/dkpUtil.php");
include_once("lib/stats/wowstats.php");
include_once("dkpmain.php");
/*=================================================
The news page displays news to the user.
=================================================*/
class pagePlayer extends pageDkpMain {

	var $layout;
	var $pageurl;
	var $tab;
	
	// �����������
	function pagePlayer(){
		$playername = util::getData("player");
		$pageurl = "Player/".$playername;

		$this->layout = "Columns1";
		$this->pageurl = "Player";
		$this->tab = SiteTabs::DKP;
		
		pageDkpMain::pageDkpMain();
	}
	
	/*=================================================
	Shows a list of posts to the user. The user has
	links to skip to any page of the posts
	=================================================*/
	function area2()
	{
		global $sql;
		global $siteUser;

		$playername = util::getData("player");
		$player = $this->updater->GetPlayer($playername);
		$dkp = dkpUtil::GetPlayerDKP($this->guild->id, $this->tableid, $player->id);

		$this->pagetitle .= " - $playername";

		if($player->id == "") {
			$this->title = $this->guild->name." - ".iconv("CP1251", "UTF-8", "����������� �����");
			$this->border = 1;
			return "$playername".iconv("CP1251", "UTF-8", " ����������� � ������� ���� �������.");
		}

		$this->title = $this->guild->name." - ".$player->name;
		$this->border = 1;


		$loot = dkpUtil::GetPlayerLootHistory($this->guild->id, $this->tableid, $player->id);
		$lootAwards = array();
		foreach($loot as $award) {
			$simple = new SimpleAward($award);
			$lootAwards[] = $simple;
		}

		$this->LoadPageVars("player");
		$completeAwards = dkpUtil::GetPlayerHistory($this->guild->id, $this->tableid, $player->id,
												   $this->sort, $this->order, $this->page,
												  $this->maxpage, 25, $dkp);
		$awards = array();
		foreach($completeAwards as $award) {
			$simple = new SimpleAward($award);
			$awards[] = $simple;
		}

		$this->set("canedit", $this->HasPermission("TableEditHistory", $this->tableid));
		$this->set("loot", $lootAwards);
		$this->set("awards", $awards);
		$this->set("dkp", $dkp);
		$this->set("player", $player);
		return $this->fetch("player.tmpl.php");
	}
}

class SimpleAward {
	var $name;
	var $id;
	var $points;
	var $players;
	var $date;
	var $datestring;
	var $historyid;
	var $foritem;

	function SimpleAward(&$award)
	{
		if($award->foritem)
			$this->name = wowstats::GetTextLink($award->reason);
		else
			$this->name = $award->reason;
		$this->id = $award->id;
		$this->points = $award->points;
		$this->points = str_replace(".00", "", $this->points);
		$this->players = $award->players;
		$this->date = date("U",strtotime($award->date));
		$this->datestring = date("M j, Y g:i A", strtotime($award->date));
		$this->historyid = $award->historyid;
		$this->foritem = $award->foritem;
	}
}
?>