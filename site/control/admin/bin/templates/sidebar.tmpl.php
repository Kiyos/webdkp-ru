<div id="adminlist">
<ul>
	<li><a href="#"><?=iconv("CP1251", "UTF-8", " ������")?></a>
		<ul id="subnavlist">
			<li <?=($self=="manage"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Manage"><?=iconv("CP1251", "UTF-8", "��������� DKP �������")?></a></li>
			<?php if($canUploadLog){ ?>
			<li <?=($self=="upload"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Upload"><?=iconv("CP1251", "UTF-8", "�������� ���-�����")?></a></li>
			<?php } ?>
			<li <?=($self=="download"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Download"><?=iconv("CP1251", "UTF-8", "���������� ���-�����")?></a></li>
			<?php if($canAddPlayer) { ?>
			<li <?=($self=="armory"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Armory"><?=iconv("CP1251", "UTF-8", "������������� � ���������")?></a></li>
			<?php } ?>
		</ul>
	</li>
	<li><a href="#"><?=iconv("CP1251", "UTF-8", " ��������� ��������")?></a>
		<ul id="subnavlist">
			<li <?=($self=="updateaccount"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/UpdateAccount"><?=iconv("CP1251", "UTF-8", "������� �������������")?></a></li>
			<?php if($canEditGuild){ ?>
			<li <?=($self=="updateguild"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/UpdateGuild"><?=iconv("CP1251", "UTF-8", "���������� � �������")?></a></li>
			<?php } ?>
			<?php if($canEditOfficers){ ?>
			<li <?=($self=="officeraccounts"||$self=="editofficeraccount"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/OfficerAccounts"><?=iconv("CP1251", "UTF-8", "������� ��������")?></a></li>
			<?php } ?>
		</ul>
	</li>
	<?php if($canChangeSettings || $canManageDKPTables || $canManageLootTable) { ?>
	<li><a href="#"><?=iconv("CP1251", "UTF-8", " ��������� �������")?></a>
		<ul id="subnavlist">
			<?php if($canChangeSettings) { ?>
			<li <?=($self=="settings"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Settings"><?=iconv("CP1251", "UTF-8", "�������� �����")?></a></li>
			<?php } ?>
			<?php if($canManageDKPTables) { ?>
			<li <?=($self=="dkptables" || $self=="editdkptable"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/DKPTables"><?=iconv("CP1251", "UTF-8", "������� DKP")?></a></li>
			<?php } ?>
			<?php if($canManageLootTable) { ?>
			<li <?=($self=="loottable" || $self=="editloottable"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/LootTable"><?=iconv("CP1251", "UTF-8", "������� ����")?></a></li>
			<?php } ?>
		</ul>
	</li>
	<?php } ?>
	<?php if($canBackup || $canRepair) { ?>
	<li><a href="#"><?=iconv("CP1251", "UTF-8", " ������������")?></a>
		<ul id="subnavlist">
			<?php if($canRepair) { ?>
			<li <?=($self=="repair"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Repair"><?=iconv("CP1251", "UTF-8", "������")?></a></li>
			<?php } ?>
			<?php if($canBackup){ ?>
			<li <?=($self=="backup"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Backup"><?=iconv("CP1251", "UTF-8", "��������� �����")?></a></li>
			<?php } ?>
		</ul>
	</li>
	<?php } ?>
</ul>
<br />
<br />
</div>

