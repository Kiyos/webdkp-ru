<?=$tabs?>
<?=$sidebar?>

<br />
<div class="adminContents">

<?=iconv("CP1251", "UTF-8", "Здесь вы можете скачать последние данные с сайта в виде лог-файла для аддона. ")?>
<?=iconv("CP1251", "UTF-8", "Это позволит вам иметь доступ к текущей информации о DKP прямо в игре. ")?>
<?=iconv("CP1251", "UTF-8", "Перед скачиванием удостоверьтесь, что информация на сайте отражает текущее состояние.")?>
<br />
<br />
<div class="noticeMessage"><?=iconv("CP1251", "UTF-8", "Вы должны сохранить скачиваемый файл WebDKP.lua в папку: 
<b>WTF\Account\ИМЯ_УЧЕТНОЙ_ЗАПИСИ\SavedVariables\</b>")?></div>
<br />
<input type="button" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "Скачать")?>" onclick="document.location='<?=$baseurl?>/log'">

</div>