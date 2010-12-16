<?=$tabs?>
<?=$sidebar?>

<div class="adminContents">

<br />

<div class="adminSectionImage"><img src="<?=$siteRoot?>images/dkp/info.gif"></div>
<div class="adminSection" style="padding-left:2px">
	<div class="title"><?=iconv("CP1251", "UTF-8", "Внимание!")?></div>

	<?=iconv("CP1251", "UTF-8", "Вы удаляете DKP таблицу с именем ")?> '<b><?=$table->name?></b>'. <?=iconv("CP1251", "UTF-8", "Если вы удалите эту таблицу, ВСЕ")?>
	<?=iconv("CP1251", "UTF-8", "ДАННЫЕ В НЕЙ БУДУТ УНИЧТОЖЕННЫ.")?>
	<br />
	<br /><?=iconv("CP1251", "UTF-8", "Вы хотите продолжить?")?>

	<br />
	<br />

	<form action="<?=$baseurl?>Admin/DkpTables" method="post">
	<input type="hidden" name="event" value="deleteTable">
	<input type="hidden" name="id" value="<?=$table->tableid?>">
	<input type="button" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "Отмена")?>" onclick="document.location='<?=$baseurl?>Admin/DkpTables'">
	<input type="submit" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "Удалить!")?>" onclick="return confirm('<?=iconv("CP1251", "UTF-8", "Последний шанс... Вы уверенны?")?>')">
	</form>

</div>

<br />
<br />



</div>
