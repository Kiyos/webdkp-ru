<?=$tabs?>
<div style="float:right"><?=$filter?></div>
<?=$tableselect?>
<br />
<?php if(sizeof($data) == 0) { ?>
<?=iconv("CP1251", "UTF-8", "��� ������� �����. ��������� ��� ���� ��� ������� �������� DKP �� ������ ����������.")?>
<?php } else { ?>
<table class="dkp" cellpadding=0 cellspacing=0 id="dkptable">
<thead>
<tr class="header">
	<th class="link" sorttype="player"><a><?=iconv("CP1251", "UTF-8", "�����")?></a></th>
	<th class="link center" style="width:200px" sorttype="guild"><a><?=iconv("CP1251", "UTF-8", "�������")?></a></th>
	<th class="link center" style="width:100px" sorttype="class"><a><?=iconv("CP1251", "UTF-8", "�����")?></th>
	<th class="link center" style="width:100px" sorttype="dkp"><a>Dkp</a></th>
	<?php if($settings->GetLifetimeEnabled()){ ?>
	<th class="link center" style="width:100px" sorttype="lifetime"><a><?=iconv("CP1251", "UTF-8", "�����")?></a></th>
	<?php } ?>
	<?php if($settings->GetTiersEnabled()){ ?>
	<th class="link center" style="width:100px" sorttype="tier"><a><?=iconv("CP1251", "UTF-8", "���")?></a></th>
	<?php } ?>
</tr>
</thead>
<tbody>

</tbody>
</table>

<script type="text/javascript">
table = new PointsTable("dkptable");
table.SetShowData(<?=($settings->GetLifetimeEnabled()?"true":"false")?>, <?=($settings->GetTiersEnabled()?"true":"false")?>);
table.SetPageData(<?=$page?>, <?=$maxpage?>);
table.SetSortData("<?=$sort?>", "<?=$order?>");
<?php foreach($data as $entry) { ?>
table.Add(<?=(util::json($entry))?>);
<?php } ?>
table.Draw();
</script>

<br />
<?php } ?>