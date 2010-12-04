<?=$tabs?>
<?php if($award->id == ""){ ?>
<?=iconv("CP1251", "UTF-8", "Не получается загрузить информацию о награде из базы: неверный идентификатор награды.")?>
<?php } else { ?>
<table class="dkpForm">
<tr>
	<td><b><?=($award->foritem?iconv("CP1251", "UTF-8", "Имя предмета"):iconv("CP1251", "UTF-8", "Повод"))?></b></td>
	<td><?=($award->foritem == 1?$award->points*-1:$award->points)?></td>
</tr>
<tr>
	<td style="width:120px"><b><?=($award->foritem?iconv("CP1251", "UTF-8", "Имя предмета"):iconv("CP1251", "UTF-8", "Повод"))?></b></td>
	<td><?=($award->foritem?wowstats::getItemLink($award->reason):$award->reason)?></td>
</tr>
<?php if($award->foritem == 1) { ?>
<tr>
	<td><b><?=iconv("CP1251", "UTF-8", "Награждается")?></b></td>
	<td><?=$award->player->name?></td>
</tr>
<?php } ?>
<tr>
	<td><b><?=iconv("CP1251", "UTF-8", "География события")?></b></td>
	<td><?=$award->location?></td>
</tr>
<tr>
	<td><b><?=iconv("CP1251", "UTF-8", "Дата события")?></b></td>
	<td><?=$award->dateDate?> - <?=$award->dateTime?></td>
</tr>
<tr>
	<td><b><?=iconv("CP1251", "UTF-8", "Кто наградил")?></b></td>
	<td><?=$award->awardedby?></td>
</tr>
<?php if($award->foritem == 0) { ?>
<tr>
	<td><b><?=iconv("CP1251", "UTF-8", "Кол-во игроков")?></b></td>
	<td><?=$award->playercount?></td>
</tr>
<?php } ?>
<?php if($canedit) { ?>
<tr>
	<td colspan=2>
		<input type="button" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "Изменить награду")?>" onclick="document.location='<?=$baseurl?>/Admin/EditAward/<?=$award->id?>?b=e&aid=<?=$award->id?>'" style="width:100px">
	</td>
</tr>
<?php } ?>
</table>
<br />
<?php if(sizeof($award->players) > 0 && $award->foritem == 0 ) { ?>
<table class="dkp simpletable" cellpadding=0 cellspacing=0 id="table">
<thead>
<tr class="header">
	<th class="link nosort" colspan=5><a><?=iconv("CP1251", "UTF-8", "Игроков")?></a></th>
</tr>
</thead>
<tbody>
	<tr>
	<?php
	$i = 0;
	foreach($award->players as $player) {
		if( $i%5 == 0 && $i != 0) {
			echo("</tr>\r\n</tr>");
		}
	 ?>
	<td style="width:200px">
		<a href="<?=$baseurl?>Player/<?=$player->name?>"><?=$player->name?></a>
	</td>
	<?php $i++;	} ?>
	<?php while($i%5!=0) {echo("<td style='width:200px'></td>\r\n"); $i++; } ?>
	</tr>
</tbody>
</table>
<?php } ?>

<?php } ?>

<br />
<br />