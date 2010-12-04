<?=iconv("CP1251", "UTF-8", "Если вы забыли свой пароль, вы можете его здесь сбросить.")?>
<?=iconv("CP1251", "UTF-8", "Чтобы сбросить пароль, введите ниже свое имя. Вам придет электронное письмо")?>
<?=iconv("CP1251", "UTF-8", "с подробной инструкцией. Если вы не указывали нигде адрес электропочты,")?>
<?=iconv("CP1251", "UTF-8", "свяжитесь с ")?><a href="mailto:arnisakalev@mail.ru"><?=iconv("CP1251", "UTF-8", "администратором сайта")?></a>.
<br />
<br />

<div class="roundedcornr_box">
<div class="roundedcornr_top"><div></div></div>
<div class="roundedcornr_content">


<form action="<?=$PHP_SELF?>" method="post" name="requestserver">
<input type="hidden" name="event" value="RequestReset">

<table class="signup">
<tr>
	<td class="label" style="width:150px"><?=iconv("CP1251", "UTF-8", "Имя пользователя:")?></td>
	<td><input name="username" type="text" value="<?=$username?>"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="<?=iconv("CP1251", "UTF-8", "Сбросить пароль")?>"></td>
</tr>
</table>

</form>

</div>
<div class="roundedcornr_bottom"><div></div></div>
</div>
<br />
<br />
<?php if(isset($eventResult)){ ?>
<div class="<?=($eventResult?"message":"errorMessage")?>"><?=$eventMessage?></div>
<?php } ?>