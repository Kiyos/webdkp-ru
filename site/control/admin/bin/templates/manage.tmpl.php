<?=$tabs?>
<?=$sidebar?>
<?=$tableselect?>
<div class="adminContents">

<?php if($canAddPoints){ ?>
<br />
<div style="float:right;padding-top:15px;"><?=$filter?></div>
<input type="button" class="mediumButton" id="AwardButton" onclick="document.location='<?=$baseurl?>Admin/CreateAward'" value="<?=iconv("CP1251", "UTF-8", "������ �������")?>">
<?php } else { ?>
<div style="float:right;padding-top:15px;"><?=$filter?></div>
<br />
<?php } ?>
<div id="TableContent">
<br />
<table class="dkp" id="manageTable" cellpadding=0 cellspacing=0 >
	<thead>
	<tr class="header">
		<th class="link" sorttype="player"><a><?=iconv("CP1251", "UTF-8", "�����")?></a></th>
		<th class="link center" sorttype="guild" style="width:150px" ><a><?=iconv("CP1251", "UTF-8", "�������")?></a></th>
		<th class="link center" sorttype="class" style="width:100px"><a><?=iconv("CP1251", "UTF-8", "�����")?></a></th>
		<th class="link center" sorttype="dkp" style="width:100px"><a>DKP</a></th>
		<th class="link center nosort" style="width:200px"><a><?=iconv("CP1251", "UTF-8", "��������")?></a></th>
	</tr>
	</thead>
	<tbody>
	</tbody>
</table>

<div style="text-align:center" id="TableLoading">
	<br />Loading Table...
	This works <i>much faster</i> in <a href="www.mozilla.com/firefox/">Firefox</a>.

</div>


<script type="text/javascript">
table = new ManageDKPTable("manageTable");
table.SetPageData(<?=$page?>, <?=$maxpage?>);
table.SetSortData("<?=$sort?>", "<?=$order?>");
table.SetDetails("<?=$guild->name?>", <?=($canDelete?"1":"0")?>, <?=($canEditPlayer?"1":"0")?>, <?=($canAddPlayer?"1":"0")?>, <?=($canAddPoints?"1":"0")?>);
<?php foreach($data as $entry) { ?>
table.Add(<?=(util::json($entry))?>);
<?php } ?>
table.Draw();
</script>

</div>
<br />


<br />
<br />

</div>
