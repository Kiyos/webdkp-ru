Добро пожаловать в WebDKP! Для окончания настройки, пожалуйста укажите следующую информацию:
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
	<td class="label" style="width:170px">Администратор:</td>
	<td><input name="username" type="text" value="<?=$username?>"></td>
</tr>
<tr>
	<td class="label">Пароль:</td>
	<td><input name="password" type="password"></td>
</tr>
<tr>
	<td class="label">Подтверждение:</td>
	<td><input name="password2" type="password"></td>
</tr>
<tr>
	<td class="label">Гильдия:</td>
	<td><input name="guild" type="text"></td>
</tr>
<tr>
	<td class="label">Сервер:</td>
	<td><input name="server" type="text"></td>
</tr>
<tr>
	<td class="label">Фракция:</td>
	<td>
		<select name="faction">
			<option value="Alliance">Альянс</option>
			<option value="Horde" <?=($faction=="Horde"?"Selected":"")?>>Орда</option>
		</select>
	</td>
</tr>
<tr>
	<td class="label">Email:</td>
	<td><input name="email" type="text" value="<?=$email?>"> ( Используется для напоминания пароля )</td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="Закончить настройку!"></td>
</tr>
</table>

</form>

</div>
<div class="roundedcornr_bottom"><div></div></div>
</div>





