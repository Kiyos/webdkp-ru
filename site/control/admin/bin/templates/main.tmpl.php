<?=$tabs?>

<div class="adminArea">
<div class="adminTitle"><img src="<?=$siteRoot?>images/dkp/tasks.gif"><?=iconv("CP1251", "UTF-8", " ������")?></div>
<div class="adminLinks">
	<a href="<?=$baseurl?>Admin/Manage"><?=iconv("CP1251", "UTF-8", "��������� DKP �������")?></a> <br />
	<?php if($canUploadLog){ ?>
	<a href="<?=$baseurl?>Admin/Upload"><?=iconv("CP1251", "UTF-8", "�������� ���-�����")?></a> <br />
	<?php } ?>
	<a href="<?=$baseurl?>Admin/Download"><?=iconv("CP1251", "UTF-8", "���������� ���-�����")?></a> <br />
	<?php if($canAddPlayer) { ?>
	<a href="<?=$baseurl?>Admin/Armory"><?=iconv("CP1251", "UTF-8", "������������� � ���������")?></a>
	<?php } ?>
</div>
</div>



<div class="adminArea">
<div class="adminTitle"><img src="<?=$siteRoot?>images/dkp/account.gif"><?=iconv("CP1251", "UTF-8", " ��������� ��������")?></div>
<div class="adminLinks">
	<a href="<?=$baseurl?>Admin/UpdateAccount"><?=iconv("CP1251", "UTF-8", "������� �������������")?></a> <br />
	<?php if($canEditGuild){ ?>
	<a href="<?=$baseurl?>Admin/UpdateGuild"><?=iconv("CP1251", "UTF-8", "���������� � �������")?></a> <br />
	<?php } ?>
	<?php if($canEditOfficers){ ?>
	<a href="<?=$baseurl?>Admin/OfficerAccounts"><?=iconv("CP1251", "UTF-8", "������� ��������")?></a> <br />
	<?php } ?>
	<br />
</div>
</div>


<?php if($canChangeSettings || $canManageDKPTables || $canManageLootTable) { ?>
<div class="adminArea">
<div class="adminTitle"><img src="<?=$siteRoot?>images/dkp/settings.gif"><?=iconv("CP1251", "UTF-8", " ��������� �������")?></div>
<div class="adminLinks">
	<?php if($canChangeSettings) { ?>
	<a href="<?=$baseurl?>Admin/Settings"><?=iconv("CP1251", "UTF-8", "�������� �����")?></a> <br />
	<?php } ?>
	<?php if($canManageDKPTables) { ?>
	<a href="<?=$baseurl?>Admin/DKPTables"><?=iconv("CP1251", "UTF-8", "������� DKP")?></a> <br />
	<?php } ?>
	<?php if($canManageLootTable) { ?>
	<a href="<?=$baseurl?>Admin/LootTable"><?=iconv("CP1251", "UTF-8", "������� ����")?></a> <br />
	<?php } ?>
	<br />
</div>
</div>
<?php } ?>

<?php if($canBackup || $canRepair){ ?>
<div class="adminArea">
<div class="adminTitle"><img src="<?=$siteRoot?>images/dkp/maintain.gif"><?=iconv("CP1251", "UTF-8", " ������������")?></div>
<div class="adminLinks">
	<?php if($canRepair){ ?>
	<a href="<?=$baseurl?>Admin/Repair"><?=iconv("CP1251", "UTF-8", "������")?></a> <br />
	<?php } ?>
	<?php if($canBackup){ ?>
	<a href="<?=$baseurl?>Admin/Backup"><?=iconv("CP1251", "UTF-8", "��������� �����")?></a> <br />
	<?php } ?>
</div>
</div>
<?php } ?>


<div style="clear:both"></div>