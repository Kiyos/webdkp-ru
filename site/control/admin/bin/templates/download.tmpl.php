<?=$tabs?>
<?=$sidebar?>

<br />
<div class="adminContents">

<?=iconv("CP1251", "UTF-8", "Здесь вы можете скачать последние WebDKP данные в .lua файл для аддона. ")?>
<?=iconv("CP1251", "UTF-8", "Это позволит вам иметь доступ к последней DKP информации прямо в игре. ")?>
<?=iconv("CP1251", "UTF-8", "Удостоверьтесь, что загрузили последнюю игровую информацию перед скачиванием новых данных.")?>
<br />
<br />
<div class="noticeMessage"><?=iconv("CP1251", "UTF-8", "Вы должны сохранить .lua файл в папку:")?>
<b>World of Warcraft\WTF\Account\USERNAME\SavedVariables\WebDKP.lua</b></div>
<br />
<input type="button" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "Скачать")?>" onclick="document.location='<?=$baseurl?>/log'">

</div>