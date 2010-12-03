<?=$tabs?>
<?=$sidebar?>

<div class="adminContents">

<br />
����� �� ������ ���������������� ���� DKP-������� �� ������� ����� �������
<!--Here you can synchronize your DKP table with your guild roster from the-->
�� <a href="http://www.wowarmory.com/">World of Warcraft Armory</a>. ��� ��������
<!--<a href="http://www.wowarmory.com/">World of Warcraft Armory</a>. This will-->
��������� ��� ��� �� ������� �������� � �������. ���� ������ ��� ��� � �������,
<!--make sure everyone in you're guild appears in your table. If a player-->
�� �� ����� �������� � ������� DKP.
<!-- isn't in the table yet, they are added automatically with 0 DKP.-->
<br />
<br />
���� �� ������ ������� ��� ������� � �������, ����� ���, ��� ��� �������� � "���������".
<!--Below you must enter your guild's name and server, exactly as it is used on The Armory.-->
������ ����� ���������� �� ���, ������� �� ��������� ��� ����������� � WebDKP
<!--This can be different then the guild and server you used when you registered
with WebDKP.-->
<br />
<br />
<form action="<?=$baseurl?>Admin/Armory" method="post" name="armory">
<input type="hidden" name="event" value="sync">
<table class="dkpForm" >
<tr>
	<td class="label" style="width:180px">�������:</td>
	<td><input name="guild" type="text" value="<?=iconv("UTF-8", "CP1251", $guild->name)?>" ></td>
</tr>
<tr>
	<td class="label" style="width:180px">������:</td>
	<td><input name="server" type="text" value="<?=$guild->server?>" ></td>
</tr>
<tr>
	<td class="label" style="width:180px">����������� ������� ������:</td>
	<td><input name="level" type="text" value="80"></td>
</tr>
<tr>
	<td class="label">���������������� �:</td>
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
	<td class="label" style="width:180px">������ ���������:</td>
	<td>
		<select name="wowserver">
			<option value="<?=armory::AMERICAN?>">American</option>
			<option value="<?=armory::EURO?>">European</option>
		</select>
	</td>
</tr>
<tr>
	<td colspan=2><input type="submit" value="��������� ������!"></td>
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
