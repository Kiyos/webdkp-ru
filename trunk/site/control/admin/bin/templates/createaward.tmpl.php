<?=$tabs?>
<?=$sidebar?>
<?=$tableselect?>
<br />
<div class="adminContents">


<div id="AwardContent1" style="display:block">
<table class="dkpForm" >
<tr>
	<td><div class="dkpSubtitle"><?=iconv("CP1251", "UTF-8", "Выдача награды - Шаг 1")?></div></td>
</tr>
<tr>
	<td><?=iconv("CP1251", "UTF-8", "Наградить предметом или DKP?")?></td>
</tr>
<tr>
	<td>
	<input type="button" class="largeButton" onclick="document.location='<?=$baseurl?>Admin/Manage'" value="<?=iconv("CP1251", "UTF-8", "Отмена")?>" style="width:100px">
	<input type="button" class="largeButton" onclick="DKPManage.AwardItem()" value="<?=iconv("CP1251", "UTF-8", "Предмет")?>" style="width:100px">
	<input type="button" class="largeButton" onclick="DKPManage.AwardGeneral()" value="<?=iconv("CP1251", "UTF-8", "DKP")?>" style="width:100px">
	</td>
</tr>
</table>
</div>

<div id="AwardContent2Item" style="display:none">
<table class="dkpForm" >
<tr>
	<td colspan=2>
	<div class="dkpSubtitle"><?=iconv("CP1251", "UTF-8", "Выдача награды - Шаг 2")?>"</div>
	</td>
</tr>
<tr>
	<td colspan=2>
	<?=iconv("CP1251", "UTF-8", "Укажите некоторые детали о выдаваемой награде.")?>
	</td>
</tr>
<tr>
	<td class="label" style="width:180px"><?=iconv("CP1251", "UTF-8", "Название предмета")?></td>
	<td><input tabindex=1 name="itemname" id="item_name" type="text" value="" ></td>
</tr>
<tr>
	<!-- подсказка выводится белым цветом - надобы исправить -->
	<td class="label"><a href="javascript:;" class="tooltip" tooltip="<?=iconv("CP1251", "UTF-8", "Цена данного предмета в DKP. Только положительное число.")?>"><?=iconv("CP1251", "UTF-8", "Стоимость")?></a></td>
	<td><input tabindex=2 name="cost" id="item_cost" type="text" value=""></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "Выдать игроку")?></td>
	<td>
	<select tabindex=3 name="playerselect" id="userdropdown">
	</select>
	</td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "Место (подземелье)")?></td>
	<td><input tabindex=4 name="location" type="text" id="item_location" value="WebDKP"></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "Выдал")?></td>
	<td><input tabindex=5 name="awardedby" id="item_awardedby" type="text" value="<?=$siteUser->username?>"></td>
</tr>
<tr>
	<td colspan=2>
	<input type="button" class="largeButton" onclick="DKPManage.StartAward()" value="<?=iconv("CP1251", "UTF-8", "Назад")?>" style="width:100px">
	<!-- надо думать какие будут последсвия переименования кнопки -->
	<input tabindex=6 type="button" class="largeButton" onclick="DKPManage.AwardItemContinue()" value="<?=($settings->GetZerosumEnabled()?"Select Zerosum":"Award")?>" style="width:100px">
	</td>
</tr>
</table>
</div>

<div id="AwardContent2" style="display:none">
<table class="dkpForm" >
<tr>
	<td colspan=2>
	<div class="dkpSubtitle"><?=iconv("CP1251", "UTF-8", "Выдача награды - Шаг 2")?></div>
	</td>
</tr>
<tr>
	<td colspan=2>
	<?=iconv("CP1251", "UTF-8", "Укажите некоторые детали о выдаваемой награде.")?>
	</td>
</tr>
<tr>
	<td class="label" style="width:180px"><?=iconv("CP1251", "UTF-8", "Причина")?></td>
	<td><input tabindex=7 id="award_reason" type="text" value="" ></td>
</tr>
<tr>
	<td class="label"><a href="javascript:;" class="tooltip" tooltip="<?=iconv("CP1251", "UTF-8", "Положительное значение для награды. Отрицательное значение для штрафа")?>"><?=iconv("CP1251", "UTF-8", "Количество")?></a></td>
	<td><input tabindex=8 id="award_cost" type="text" value=""></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "Место (подземелье)")?></td>
	<td><input tabindex=9 id="award_location" type="text" value="WebDKP"></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "Выдал")?></td>
	<td><input tabindex=10 id="award_awardedby" type="text" value="<?=$siteUser->username?>"></td>
</tr>
<tr>
	<td colspan=2>
	<input type="button" class="largeButton" onclick="DKPManage.StartAward()" value="<?=iconv("CP1251", "UTF-8", "Назад")?>" style="width:100px">
	<input tabindex=11 type="button" class="largeButton" onclick="DKPManage.SelectRecipients()" value="<?=iconv("CP1251", "UTF-8", "Выбрать игроков")?>" style="width:150px">
	</td>
</tr>
</table>
</div>


<div id="AwardContent3" style="display:none">
<table class="dkpForm" >
<tr>
	<td>
	<div class="dkpSubtitle" id="selectPlayersTitle"><?=iconv("CP1251", "UTF-8", "Выдача награды - Шаг 3")?></div>
	</td>
</tr>
<tr>
	<td id="selectPlayersContent">
	<?=iconv("CP1251", "UTF-8", "Укажите игроков, которые получат эту награду, кликая на строку с именем.")?>
	<?=iconv("CP1251", "UTF-8", "Используйте фильтр для быстрого поиска игроков.")?>
	</td>
</tr>
<tr>
	<td colspan=2>
	<input type="button" class="largeButton" onclick="DKPManage.SelectPlayersBack()" value="<?=iconv("CP1251", "UTF-8", "Назад")?>" style="width:100px">
	<input type="button" class="largeButton" onclick="DKPManage.SelectPlayersForward()" value="<?=iconv("CP1251", "UTF-8", "Наградить")?>" style="width:100px">
	</td>
</tr>
<tr>
	<td>
	<table class="dkp" id="selecttable" cellpadding=0 cellspacing=0 >
		<thead>
		<tr class="header">
			<th class="link"><a><?=iconv("CP1251", "UTF-8", "Игроки")?></a></th>
		</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<script type="text/javascript">
	playertable = new SimplePlayerSelectTable("selecttable");
	playertable.EnablePaging(50);
	<?php foreach($data as $entry) { ?>
	playertable.Add(<?=(util::json($entry))?>);
	<?php } ?>
	playertable.Draw();
	DKPManage.Init(<?=($settings->GetZerosumEnabled()?'true':'false')?>);
	</script>
	</td>
</tr>
</table>
</div>

<div id="AwardContentFinished" style="display:none">
<table class="dkpForm" >
<tr>
	<td><div class="dkpSubtitle" id="awardFinishedTitle"><?=iconv("CP1251", "UTF-8", "Награда выдана")?></div></td>
</tr>
<tr>
	<td>
		<div class="message" id="awardFinishedOk">test</div>
		<div class="errorMessage" id="awardFinishedBad">test</div>
	</td>
</tr>
<tr>
	<td>
	<input type="button" class="largeButton" onclick="document.location='<?=$baseurl?>Admin/Manage'" value="<?=iconv("CP1251", "UTF-8", "Продолжить")?>" style="width:100px">
	</td>
</tr>
</table>
</div>
</div>

<br />
<br />
<br />

</div>
