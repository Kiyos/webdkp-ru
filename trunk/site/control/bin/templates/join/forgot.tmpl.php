Если вы забыли ваш пароль, вы можете сбросить его здесь.
Для сброса пароля, пожалуйста введите ваше имя ниже. На ваш почтовый ящик
будут высланы инструкции. Если вы не указали e-mail при регистрации
аккаунта, you will need to submit a reset request on the
<a href="http://www.webdkp.com/phpBB2">Forums</a>.
<br />
<br />

<div class="roundedcornr_box">
<div class="roundedcornr_top"><div></div></div>
<div class="roundedcornr_content">


<form action="<?=$PHP_SELF?>" method="post" name="requestserver">
<input type="hidden" name="event" value="RequestReset">

<table class="signup">
<tr>
	<td class="label" style="width:150px">Username:</td>
	<td><input name="username" type="text" value="<?=$username?>"></td>
</tr>
<tr>
	<td></td>
	<td><input type="submit" value="Reset Password"></td>
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