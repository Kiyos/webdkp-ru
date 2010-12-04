<?=$tabs?>
<?=$sidebar?>

<div class="adminContents">

<br />
Здесь вы можете синхронизировать ваши DKP-таблицы со списком вашей гильдии
<!--Here you can synchronize your DKP table with your guild roster from the-->
из <a href="http://www.wowarmory.com/">World of Warcraft Armory</a>. Это позволит
<!--<a href="http://www.wowarmory.com/">World of Warcraft Armory</a>. This will-->
убедиться что все из гильдии появятся в таблице. Если игрока ещё нет в таблице,
<!--make sure everyone in you're guild appears in your table. If a player-->
то он будет добавлен с нулевым DKP.
<!-- isn't in the table yet, they are added automatically with 0 DKP.-->
<br />
<br />
Ниже вы должны указать имя гильдии и сервера, точно так, как они указанны в "Оружейной".
<!--Below you must enter your guild's name and server, exactly as it is used on The Armory.-->
Данные могут отличаться от тех, которые вы указывали при регистрации в WebDKP
<!--This can be different then the guild and server you used when you registered
with WebDKP.-->
<br />
<br />
<form action="<?=$baseurl?>Admin/Armory" method="post" name="armory">
<input type="hidden" name="event" value="sync">
<table class="dkpForm" >
<tr>
	<td class="label" style="width:180px">Гильдия:</td>
	<td><input name="guild" type="text" value="<?=$guild->name?>" ></td>
</tr>
<tr>
	<td class="label" style="width:180px">Сервер:</td>
	<td><input name="server" type="text" value="<?=$guild->server?>" ></td>
</tr>
<tr>
	<td class="label" style="width:180px">Минимальный уровень игрока:</td>
	<td><input name="level" type="text" value="80"></td>
</tr>
<tr>
	<td class="label">Синхронизировать с:</td>
	<td>
		<select name="table">
			<option value="0">All DKP Tables</option>
			<?php foreach($dkptables as $table) { ?>
			<option value="<?=$table->tableid?>"><?=$table->name?></option>
			<?php } ?>
		</select>
	</td>
</tr>
<tr>
	<td class="label" style="width:180px">Сервер Оружейной:</td>
	<td>
		<select name="wowserver">
			<option value="<?=armory::EURO?>">European</option>
			<option value="<?=armory::AMERICAN?>">American</option>
		</select>
	</td>
</tr>
<tr>
	<td colspan=2><input type="submit" value="Загрузить список!"></td>
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
