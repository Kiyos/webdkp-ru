<?=$tabs?>
<?=$sidebar?>

<div class="adminContents">

<br />

<div class="adminSectionImage"><img src="<?=$siteRoot?>images/dkp/info.gif"></div>
<div class="adminSection" style="padding-left:2px">
	<div class="title"><?=iconv("CP1251", "UTF-8", "��������!")?></div>

	<?=iconv("CP1251", "UTF-8", "�� �������� DKP ������� � ������ ")?> '<b><?=$table->name?></b>'. <?=iconv("CP1251", "UTF-8", "���� �� ������� ��� �������, ���")?>
	<?=iconv("CP1251", "UTF-8", "������ � ��� ����� �����������.")?>
	<br />
	<br /><?=iconv("CP1251", "UTF-8", "�� ������ ����������?")?>

	<br />
	<br />

	<form action="<?=$baseurl?>Admin/DkpTables" method="post">
	<input type="hidden" name="event" value="deleteTable">
	<input type="hidden" name="id" value="<?=$table->tableid?>">
	<input type="button" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "������")?>" onclick="document.location='<?=$baseurl?>Admin/DkpTables'">
	<input type="submit" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "�������!")?>" onclick="return confirm('<?=iconv("CP1251", "UTF-8", "��������� ����... �� ��������?")?>')">
	</form>

</div>

<br />
<br />



</div>
