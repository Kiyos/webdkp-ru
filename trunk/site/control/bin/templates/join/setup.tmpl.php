<?=iconv("CP1251", "UTF-8", "����� ���������� � WebDKP! ����� ��������� ��������� ���������, ����������, ������� ��������� ����������:")?>
<br />
<br />
<?php if(isset($eventResult)){ ?>
<div class="<?=($eventResult==user::REGISTER_OK?"message":"errorMessage")?>"><?=$eventMessage?></div>
<br />
<?php } ?>


<div class="roundedcornr_box">
<div class="roundedcornr_top"><div></div></div>
<div class="roundedcornr_content">


<form action="<?=$PHP_SELF?>" method="post" name="signup">
<input type="hidden" name="event" value="setup">

<table class="signup">
<tr>
	<td class="label" style="width:200px"><?=iconv("CP1251", "UTF-8", "��� ��������������:")?></td>
	<td><input name="username" type="text" value="<?=$username?>"></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "������:")?></td>
	<td><input name="password" type="password"></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "��� ��� ������:")?></td>
	<td><input name="password2" type="password"></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "�������:")?></td>
	<td><input name="guild" type="text"></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "������� ���:")?></td>
	<td><input name="server" type="text"></td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "�������:")?></td>
	<td>
		<select name="faction">
			<option value="Alliance"><?=iconv("CP1251", "UTF-8", "������")?></option>
			<option value="Horde" <?=($faction=="Horde"?"Selected":"")?>><?=iconv("CP1251", "UTF-8", "����")?></option>
		</select>
	</td>
</tr>
<tr>
	<td class="label"><?=iconv("CP1251", "UTF-8", "������������:")?></td>
	<td><input name="email" type="text" value="<?=$email?>"><?=iconv("CP1251", "UTF-8", " (������������ ��� ����������� ������)")?></td>
</tr>
<tr>
	<td><br></td>
	<td><br></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" style="width:500px" value="<?=iconv("CP1251", "UTF-8", "��������� ���������!")?>"></td>
</tr>
</table>

</form>

</div>
<div class="roundedcornr_bottom"><div></div></div>
</div>
