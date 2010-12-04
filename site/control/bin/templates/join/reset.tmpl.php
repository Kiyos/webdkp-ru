<?php if($resetok) { ?>

<div class="message">
<?=iconv("CP1251", "UTF-8", "Вы успешно изменили свой пароль и можете теперь ")?><a href="<?=$siteRoot?>Login"><?=iconv("CP1251", "UTF-8", "зайти с ним")?></a>.
</div>
<br />
<br />
<input type="button" class="largeButton" onclick="document.location='<?=$siteRoot?>Login'" value="<?=iconv("CP1251", "UTF-8", "Зайти с паролем!")?>">
<?php } else { ?>
<?=iconv("CP1251", "UTF-8", "Пожалуйста, введите новый пароль для ")?><b><?=$user->username?></b><?=iconv("CP1251", "UTF-8", " ниже.")?>
<br />

<div class="roundedcornr_box">
<div class="roundedcornr_top"><div></div></div>
<div class="roundedcornr_content">


<form action="<?=$PHP_SELF?>" method="post" name="requestserver">
<input type="hidden" name="event" value="reset">
<input type="hidden" name="uid" value="<?=$user->id?>">
<input type="hidden" name="key" value="<?=$key?>">
<table class="signup">
<tr>
	<td class="label" style="width:175px"><?=iconv("CP1251", "UTF-8", "Пароль:")?></td>
	<td><input name="password" type="password"></td>
</tr>
<tr>
	<td class="label" style="width:175px"><?=iconv("CP1251", "UTF-8", "Еще раз пароль:")?></td>
	<td><input name="password2" type="password"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="<?=iconv("CP1251", "UTF-8", "Поменять пароль!")?>"></td>
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
<?php } ?>