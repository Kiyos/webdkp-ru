<?=$tabs?>
<?=$tableselect?>
<br />
<?php if(sizeof($awards)==0){ ?>
<?=iconv("CP1251", "UTF-8", "���� ����� �� ����� ������� Dkp � ���� �������.")?>
<?php } else { ?>
<span class="dkpSubtitle"><?=iconv("CP1251", "UTF-8", "������� Dkp")?></span>
<table class="dkp" cellpadding=0 cellspacing=0 id="dkptable2">
<thead>
<tr class="header">
	<th class="link" sorttype="date" style="width:200px"><a><?=iconv("CP1251", "UTF-8", "����")?></a></th>
	<th class="link" sorttype="award"><a><?=iconv("CP1251", "UTF-8", "�������")?></th>
	<th class="link center" sorttype="dkp" style="width:100px"><a>+</a></th>
	<th class="link center" sorttype="dkp" style="width:100px"><a>-</a></th>
	<th class="link center nosort" style="width:100px"><a><?=iconv("CP1251", "UTF-8", "�����")?></a></th>
	<?php if($canedit){ ?>
	<th class="link center nosort" style="width:100px"><a><?=iconv("CP1251", "UTF-8", "��������")?></a></th>
	<?php } ?>
</tr>
</thead>
<tbody>
</tbody>
</table>

<script type="text/javascript">
table = new PlayerHistoryTable("dkptable2");
table.SetCanEdit(<?=($canedit?"1":"0")?>);
table.SetPlayerInfo("<?=$player->name?>", <?=$player->id?>, <?=$dkp?>);
table.SetPageData(<?=$page?>, <?=$maxpage?>);
table.SetSortData("<?=$sort?>", "<?=$order?>");
<?php foreach($awards as $entry) { ?>
table.Add(<?=(util::json($entry,false))?>);
<?php } ?>
table.Draw();
</script>
<?php } ?>

<br />
<br />
<?php if(sizeof($loot)>0){ ?>
<span class="dkpSubtitle">Loot</span>
<table class="dkp" cellpadding=0 cellspacing=0 id="dkptable">
<thead>
<tr class="header">
	<th class="link" style="width:200px"><a><?=iconv("CP1251", "UTF-8", "����")?></a></th>
	<th class="link"><a>Loot</th>
	<th class="link center" style="width:100px" sort="number"><a><?=iconv("CP1251", "UTF-8", "���������")?></a></th>
</tr>
</thead>
<tbody>

</tbody>
</table>

<script type="text/javascript">
table = new PlayerLootTable("dkptable");
<?php foreach($loot as $entry) { ?>
table.Add(<?=(util::json($entry,false))?>);
<?php } ?>
table.Draw();
</script>
<br />
<br />
<?php } ?>