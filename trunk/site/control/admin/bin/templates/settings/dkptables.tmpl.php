<?=$tabs?>
<?=$sidebar?>

<div class="adminContents">

<?php if(isset($eventResult)){ ?>
<div style="margin-left:70px;" class="<?=($eventResult?"message":"errorMessage")?>"><?=$eventMessage?></div>
<?php } ?>
<br />


<div class="adminSectionImage"><img src="<?=$siteRoot?>images/dkp/tables.gif"></div>
<div class="adminSection" style="padding-left:2px">
	<div class="title"><?=iconv("CP1251", "UTF-8", "DKP �������")?></div>

	<form action="<?=$baseurl?>Admin/DkpTables" method="post" name="createTable">
	<input type="hidden" name="event" value="createTable">
	<table class="dkp simpletable" id="tablelist" cellpadding="0" cellspacing="0">
		<tr class="header">
			<th><?=iconv("CP1251", "UTF-8", "��� �������")?></th>
			<th class="center">ID</th>
			<th class="center"><?=iconv("CP1251", "UTF-8", "��������")?></th>
		</tr>
		<?php foreach($tables as $table) { ?>
		<tr>
			<td><?=$table->name?></td>
			<td class="center" style="width:100px"><?=$table->tableid?></td>
			<td class="center middle" style="width:150px">

				<a class="dkpbutton" href="<?=$baseurl?>Admin/EditDkpTable?id=<?=$table->tableid?>"><img title="<?=iconv("CP1251", "UTF-8", "��������")?>" src="<?=$siteRoot?>images/buttons/edit.png"></a>
				<a class="dkpbutton" href="<?=$baseurl?>Admin/DeleteTable?id=<?=$table->tableid?>"
				onclick="return confirm('<?=iconv("CP1251", "UTF-8", "�� ������������� ������ ������� ��� �������?\n��� ������ ����� �Ҩ���!")?>')">
				<img title="<?=iconv("CP1251", "UTF-8", "�������")?>" src="<?=$siteRoot?>images/buttons/delete.png"></a>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan=2>
				<input name="name" type="text" style="width:300px">
			</td>
			<td class="center">
				<img src="<?=$siteRoot?>images/buttons/new.png">
				<a href="javascript:Util.Submit('createTable')"><?=iconv("CP1251", "UTF-8", "������� �������")?></a>
			</td>
		</tr>
	</table>
	</form>
</div>

<br />
<br />

<div class="adminSectionImage"><img src="<?=$siteRoot?>images/dkp/info.gif"></div>
<div class="adminSection" style="padding-left:2px">
	<div class="title"><?=iconv("CP1251", "UTF-8", "������������ DKP ������")?></div>
	<b><?=iconv("CP1251", "UTF-8", "�� ������ ��������� ���! ��� �� �������� �������� ������ :(")?></b>
	<br />
	<?=iconv("CP1251", "UTF-8", "����� �� ������ ������ DKP ������ ����� �������. ���� ������� ����� ����� ��������� ������,")?>
	<?=iconv("CP1251", "UTF-8", "������� ������� ��� ����� ��������� DKP. ��������, ��������� ������� ������ ��������")?>
	<?=iconv("CP1251", "UTF-8", "������� ��� 10 � 25 ��� ������, ������ ������� ��������� ������� ��� ������� ")?>
	<?=iconv("CP1251", "UTF-8", "���� ������. ��� �������� ���������� ������, �� ����� � � ������ �������� ���������� ")?>
	<?=iconv("CP1251", "UTF-8", "������, ������� �������� ��� ������� ������� � ������� �� ������ ��������.")?>
	<br />
	<br />
	<?=iconv("CP1251", "UTF-8", "�� ���� �������� �� ������ ��������, ������� ��� ������� DKP �������. ������ <b>����� ���������</b>")?>
	<?=iconv("CP1251", "UTF-8", "����� �������� �������. ���� �� ������� �������, �� ������� ��� ���������� � ��� ����!")?>

</div>



</div>
