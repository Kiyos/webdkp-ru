<?php
include_once("lib/dkp/dkpPointsTable.php");
include_once("lib/dkp/dkpUpdater.php");
include_once("lib/wow/armory.php");
include_once("dkpmain.php");

class SimpleEntry {
	var $userid;
	var $dkp;
	var $lifetime;
	var $player;
	var $playerguild;
	var $playerclass;


	function SimpleEntry($entry = ""){
	
		$className2class = array(
			'����' => 'Warrior',
			'�������' => 'Paladin',
			'�������' => 'Hunter',
			'���������' => 'Rogue',
			'����' => 'Priest',
			'������ ������' => 'Death Knight',
			'�����' => 'Shaman',
			'���' => 'Mage',
			'������������' => 'Warlock',
			'�����' => 'Druid'
		);

		if($entry != "") {
			$this->userid = $entry->user->id;
			$this->dkp = $entry->points;
			$this->lifetime = $entry->lifetime;
			$this->player = $entry->user->name;
			$this->playerguild = $entry->user->guild->name;
			//$this->playerclass = $entry->user->class;
			$this->playerclass  = $className2class[iconv("UTF-8", "CP1251", $entry->user->class)];
		}
	}
}

class pageDkp extends pageDkpMain {
	var $layout = "Columns1";
	var $pageurl = "Dkp";
	var $tab = SiteTabs::DKP;

	function area2()
	{
		global $sql;

		$this->pagetitle .= " - DKP ";
		$this->title = $this->guild->name." &mdash; DKP";
		$this->border = 1;

		$filters = $this->CombineDKPFilters("main");

		$this->LoadPageVars("main");
		$fulldata = dkpUtil::GetDKPTable($this->guild->id, $this->tableid, $count, $this->sort, $this->order, $this->page, $this->maxpage, $filters );
		
		$data = array();
		$useTiers = $this->settings->GetTiersEnabled();
		$tierSize = $this->settings->GetTierSize();
		foreach($fulldata as $entry) {
			$temp = new SimpleEntry($entry);
			if($tierSize == 0)
				$tierSize = 1;
			if($useTiers)
				$temp->tier = floor( ($temp->dkp - 1 ) / $tierSize )."";
			$data[] = $temp;
		}

		$this->set("filter",$this->GetDKPFilterUI("main"));
		$this->set("table", $table);
		$this->set("data", $data);
		return $this->fetch("dkp.tmpl.php");
				
	}
	
	function eventSetFilter()
	{
		$this->SetDKPFilter("main");
	}

	function eventClearFilter()
	{
		$this->ClearDKPFilter("main");
	}
}
?>