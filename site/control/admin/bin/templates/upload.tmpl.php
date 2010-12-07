<?=$tabs?>
<?=$sidebar?>
<div class="adminContents">
<br />
<?=iconv("CP1251", "UTF-8", "Здесь вы можете загрузить лог-файл сгенерированный аддоном WebDKP.")?>
<br />
<br />

<form name="uploadLog" enctype="multipart/form-data"  action="<?=$basedir?>Upload" method="post">
<input type='hidden' name='event' value='uploadLog'>
<input type="file" name="userfile" class="formInput" >
<input type="submit" value="<?=iconv("CP1251", "UTF-8", "Загрузить")?>" class="mediumButton" onclick="this.disable();this.value='Uploading...';Util.Submit('uploadLog');">
<br />
<br />
<div class="noticeMessage"><?=iconv("CP1251", "UTF-8", "Вы можете найти лог-файл по следующему пути: <b>WTF\Account\USERNAME\SavedVariables\WebDKP.lua")?></b></div>
</form>

<?php if(isset($eventResult)){ ?>
<div class="<?=($eventResult?"message":"errorMessage")?>"><?=$eventMessage?></div>
<?php } ?>
<?php if(isset($log)) { ?>
<div class="message">
<b>Log file uploaded!</b>
<br />
<br />
<?=$log?>
</div>
<?php } ?>

</div>