<?=$tabs?>
<?=$sidebar?>

<div class="adminContents">

<br />
<?=iconv("CP1251", "UTF-8", "����� �� ������ ���������������� ���� ������� DKP �� ������� ������� ����� ������� �� ")?>
<a href="http://eu.wowarmory.com/"><?=iconv("CP1251", "UTF-8", "��������� World of Warcraft")?></a>.
<?=iconv("CP1251", "UTF-8", "��� ����� ��� ����, ����� ��� ������ ������ ������� ��������� � ����� �������. ���� ")?>
<?=iconv("CP1251", "UTF-8", "������-�� ������ � ������� ��� ���, �� �� ����� ������������� ��������, ������� ���� DKP.")?>
<br />
<br />
<?=iconv("CP1251", "UTF-8", "���� �� ������ ������� ��� ������� � �������� ���� ����� ���, ��� ��� ������� � ���������. ")?>
<?=iconv("CP1251", "UTF-8", "��� ������ ����� ���������� �� ���, ������� �� ������� ��� ��������� ��������� WebDKP.")?>
<br />
<br />
<form action="<?=$baseurl?>Admin/Armory" method="post" name="armory">
<input type="hidden" name="event" value="sync">
<table class="dkpForm">
<tr>
	<td class="label" style="width:300px"><?=iconv("CP1251", "UTF-8", "�������:")?></td>
	<td><input name="guild" type="text" value="<?=$guild->name?>"></td>
</tr>
<tr>
	<td class="label" style="width:300px"><?=iconv("CP1251", "UTF-8", "������� ���:")?></td>
	<td><input name="server" type="text" value="<?=$guild->server?>" ></td>
</tr>
<tr>
	<td class="label" style="width:300px"><?=iconv("CP1251", "UTF-8", "����������� ������� ������:")?></td>
	<td><input name="level" type="text" value="85"></td>
</tr>
<tr>
	<td class="label" style="width:300px"><?=iconv("CP1251", "UTF-8", "���������������� �:")?></td>
	<td>
		<select name="table">
			<option value="0"><?=iconv("CP1251", "UTF-8", "����� ��������� DKP")?></option>
			<?php foreach($dkptables as $table) { ?>
			<option value="<?=$table->tableid?>"><?=$table->name?></option>
			<?php } ?>
		</select>
	</td>
</tr>
<tr>
	<td colspan="2"><p align="center"><input type="submit" value="<?=iconv("CP1251", "UTF-8", "��������� ������!")?>"></p></td>
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
