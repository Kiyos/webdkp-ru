<?=$tabs?>
<?=$sidebar?>

<div class="adminContents">

<br />
<?=iconv("CP1251", "UTF-8", "Здесь вы можете синхронизировать ваши таблицы DKP со списком игроков вашей гильдии из ")?>
<a href="http://eu.wowarmory.com/"><?=iconv("CP1251", "UTF-8", "Оружейной World of Warcraft")?></a>.
<?=iconv("CP1251", "UTF-8", "Это для того, чтобы все нужные игроки гильдии оказались в вашей таблице. Если ")?>
<?=iconv("CP1251", "UTF-8", "какого-то игрока в таблице еще нет, то он будет автоматически добавлен, получив ноль DKP.")?>
<br />
<br />
<?=iconv("CP1251", "UTF-8", "Ниже вы должны указать имя гильдии и сервера точно так, как они указаны в Оружейной. ")?>
<?=iconv("CP1251", "UTF-8", "Эти данные могут отличаться от тех, которые вы указали при первичной настройке WebDKP.")?>
<br />
<br />
<form action="<?=$baseurl?>Admin/Armory" method="post" name="armory">
<input type="hidden" name="event" value="sync">
<table class="dkpForm">
<tr>
	<td class="label" style="width:200px"><?=iconv("CP1251", "UTF-8", "Гильдия:")?></td>
	<td><input name="guild" type="text" value="<?=$guild->name?>"></td>
</tr>
<tr>
	<td class="label" style="width:200px"><?=iconv("CP1251", "UTF-8", "Игровой мир:")?></td>
	<td><input name="server" type="text" value="<?=$guild->server?>" ></td>
</tr>
<tr>
	<td class="label" style="width:200px"><?=iconv("CP1251", "UTF-8", "Минимальный уровень игрока:")?></td>
	<td><input name="level" type="text" value="80"></td>
</tr>
<tr>
	<td class="label" style="width:200px"><?=iconv("CP1251", "UTF-8", "Синхронизировать с:")?></td>
	<td>
		<select name="table">
			<option value="0"><?=iconv("CP1251", "UTF-8", "всеми таблицами DKP")?></option>
			<?php foreach($dkptables as $table) { ?>
			<option value="<?=$table->tableid?>"><?=$table->name?></option>
			<?php } ?>
		</select>
	</td>
</tr>
<tr>
	<td class="label" style="width:200px"><?=iconv("CP1251", "UTF-8", "Сервер Оружейной:")?></td>
	<td>
		<select name="wowserver">
			<option value="<?=armory::AMERICAN?>"><?=iconv("CP1251", "UTF-8", "американский")?></option>
			<option value="<?=armory::EURO?>"><?=iconv("CP1251", "UTF-8", "европейский (в т.ч. русский)")?></option>
		</select>
	</td>
</tr>
<tr>
	<td colspan="2"><p align="center"><input type="submit" value="<?=iconv("CP1251", "UTF-8", "Загрузить список!")?>"></p></td>
</tr>
</table>
<?php if(isset($eventResult)){ ?>
<div class="<?=($eventResult?"message":"errorMessage")?>"><?=$eventMessage?></div>
<?php } ?>

</form>

<br />
<br />
<br />

</div>
