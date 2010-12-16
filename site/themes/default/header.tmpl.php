<?php
global $guildset;
?>

<div id="header">
	<a href="<?=$SiteRoot?>"><img src="<?=$theme->getAbsDirectory()?>images/header/logo.jpg"></a>
</div>
<div id="bar">
	<?php if(!$guildset){ ?>
	<a class="barlink" href="<?=$SiteRoot?>Setup"><?=iconv("CP1251", "UTF-8", "Первичная настройка");?></a>
	<div class="barsep">&nbsp;</div>
	<?php } else { ?>
	<a class="barlink <?=($activetab=="dkp"?"activetab":"")?>" href="<?=$SiteRoot?>Dkp">DKP</a>
	<div class="barsep">&nbsp;</div>
  <a class="barlink <?=($activetab=="loot"?"activetab":"")?>" href="<?=$SiteRoot?>Loot"><?=iconv("CP1251", "UTF-8", "Лут");?></a>
	<div class="barsep">&nbsp;</div>
	<a class="barlink <?=($activetab=="awards"?"activetab":"")?>" href="<?=$SiteRoot?>Awards"><?=iconv("CP1251", "UTF-8", "Награды");?></a>
	<div class="barsep">&nbsp;</div>
		<?php if($settings && $settings->GetLootTableEnabled()) { ?>
	<a class="barlink <?=($activetab=="loottable"?"activetab":"")?>" href="<?=$SiteRoot?>LootTable"><?=iconv("CP1251", "UTF-8", "Таблица лута");?></a>
	<div class="barsep">&nbsp;</div>
	<?php } ?>
	<?php if($siteUser->visitor){ ?>
	<a class="barlink" href="<?=$SiteRoot?>Login"><?=iconv("CP1251", "UTF-8", "Вход с паролем");?></a>
	<div class="barsep">&nbsp;</div>
	<?php } else { ?>
	<a class="barlink <?=($activetab=="admin"?"activetab":"")?>" href="<?=$SiteRoot?>Admin"><?=iconv("CP1251", "UTF-8", "Управление");?></a>
	<div class="barsep">&nbsp;</div>
	<a class="barlink" href="<?=$SiteRoot?>login?siteUserEvent=logout"><?=iconv("CP1251", "UTF-8", "Выход");?></a>
	<div class="barsep">&nbsp;</div>
	<?php } ?>
	<?php } ?>
</div>