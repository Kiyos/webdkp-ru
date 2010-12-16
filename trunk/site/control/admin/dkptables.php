<?php
include_once("adminmain.php");
include_once("lib/dkp/dkpUpdater.php");
/*=================================================
Page allows users to create or delete the DKP tables
for their guild.

Warning! User can delete all their data here if they
don't know what they are doing!
=================================================*/
class pageDkpTables extends pageAdminMain {

	/*=================================================
	Main Page Content
	=================================================*/
	function area2()
	{
		global $siteRoot;

		$this->title = iconv("CP1251", "UTF-8", "������� DKP");
		$this->border = 1;

		$updater = new dkpUpdater($this->guild->id);
		$tables = $updater->GetTables(true);

		$this->addJavascriptHeader($siteRoot."js/dkpAdmin.js");

		//call the template
		$this->set("tables",$tables);
		return $this->fetch("settings/dkptables.tmpl.php");
	}

	/*=================================================
	EVENT - Creates a new table
	=================================================*/
	function eventCreateTable(){
		$name = util::getData("name");
		if($name == "")
			return $this->setEventResult(false, iconv("CP1251", "UTF-8", "��� ������� �� ����� ���� ������."));

		$updater = new dkpUpdater($this->guild->id);
		$result = $updater->CreateTable($name);

		if($result != dkpUpdater::UPDATE_OK)
			$this->setEventResult(false, dkpUpdater::GetErrorString($result));
		else
			$this->setEventResult(true, iconv("CP1251", "UTF-8", "������� �������!"));
	}

	/*=================================================
	EVENT - Deletes a table
	=================================================*/
	function eventDeleteTable(){
		$tableid = util::getData("id");

		$updater = new dkpUpdater($this->guild->id);
		$result = $updater->DeleteTable($tableid);

		if($result != dkpUpdater::UPDATE_OK)
			$this->setEventResult(false, dkpUpdater::GetErrorString($result));
		else {
			$tables = $updater->GetTables(false);
			//if they deleted their final table, a new empty one will be created for them later during the page load process
			if(sizeof($tables) == 0)
				$this->setEventResult(true, iconv("CP1251", "UTF-8","������� �������! ��������� ������ ������ ���, ��� ��� ������������� ������� �����."));
			else
				$this->setEventResult(true, iconv("CP1251", "UTF-8", "������� �������!"));
		}
	}

	/*=================================================
	AJAX - Updates the name of a table
	=================================================*/
	/*function ajaxUpdateTableName(){
		//get data
		$tableid = util::getData("tableid");
		$name = util::getData("tablename");

		//attempt to perform the update
		$updater = new dkpUpdater($this->guild->id);
		$result = $updater->UpdateTableName($tableid, $name);

		//send results back
		if($result != dkpUpdater::UPDATE_OK)
			$this->setAjaxResult(false, dkpUpdater::GetErrorString($result));
		else
			$this->setAjaxResult(true,"Table Created!");

	}*/
}
?>