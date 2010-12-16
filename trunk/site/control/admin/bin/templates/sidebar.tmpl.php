<div id="adminlist">
<ul>
	<li><a href="#"><?=iconv("CP1251", "UTF-8", " Задачи")?></a>
		<ul id="subnavlist">
			<li <?=($self=="manage"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Manage"><?=iconv("CP1251", "UTF-8", "Редактирование таблиц DKP")?></a></li>
			<?php if($canUploadLog){ ?>
			<li <?=($self=="upload"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Upload"><?=iconv("CP1251", "UTF-8", "Загрузка лог-файла")?></a></li>
			<?php } ?>
			<li <?=($self=="download"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Download"><?=iconv("CP1251", "UTF-8", "Скачивание лог-файла")?></a></li>
			<?php if($canAddPlayer) { ?>
			<li <?=($self=="armory"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Armory"><?=iconv("CP1251", "UTF-8", "Синхронизация с Оружейной")?></a></li>
			<?php } ?>
		</ul>
	</li>
	<li><a href="#"><?=iconv("CP1251", "UTF-8", " Настройка профилей")?></a>
		<ul id="subnavlist">
			<li <?=($self=="updateaccount"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/UpdateAccount"><?=iconv("CP1251", "UTF-8", "Профили пользователей")?></a></li>
			<?php if($canEditGuild){ ?>
			<li <?=($self=="updateguild"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/UpdateGuild"><?=iconv("CP1251", "UTF-8", "Информация о гильдии")?></a></li>
			<?php } ?>
			<?php if($canEditOfficers){ ?>
			<li <?=($self=="officeraccounts"||$self=="editofficeraccount"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/OfficerAccounts"><?=iconv("CP1251", "UTF-8", "Профили офицеров")?></a></li>
			<?php } ?>
		</ul>
	</li>
	<?php if($canChangeSettings || $canManageDKPTables || $canManageLootTable) { ?>
	<li><a href="#"><?=iconv("CP1251", "UTF-8", " Настройка системы")?></a>
		<ul id="subnavlist">
			<?php if($canChangeSettings) { ?>
			<li <?=($self=="settings"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Settings"><?=iconv("CP1251", "UTF-8", "Основные опции")?></a></li>
			<?php } ?>
			<?php if($canManageDKPTables) { ?>
			<li <?=($self=="dkptables" || $self=="editdkptable"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/DKPTables"><?=iconv("CP1251", "UTF-8", "Создание и удаление таблиц DKP")?></a></li>
			<?php } ?>
			<?php if($canManageLootTable) { ?>
			<li <?=($self=="loottable" || $self=="editloottable"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/LootTable"><?=iconv("CP1251", "UTF-8", "Таблица лута")?></a></li>
			<?php } ?>
		</ul>
	</li>
	<?php } ?>
	<?php if($canBackup || $canRepair) { ?>
	<li><a href="#"><?=iconv("CP1251", "UTF-8", " Обслуживание")?></a>
		<ul id="subnavlist">
			<?php if($canRepair) { ?>
			<li <?=($self=="repair"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Repair"><?=iconv("CP1251", "UTF-8", "Ремонт")?></a></li>
			<?php } ?>
			<?php if($canBackup){ ?>
			<li <?=($self=="backup"?"class='active'":"")?>><a href="<?=$baseurl?>Admin/Backup"><?=iconv("CP1251", "UTF-8", "Резервные копии")?></a></li>
			<?php } ?>
		</ul>
	</li>
	<?php } ?>
</ul>
<br />
<br />
</div>

