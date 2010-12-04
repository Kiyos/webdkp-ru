<img src="<?=$directory?>images/cheer.jpg" style="float:right">

<?=iconv("CP1251", "UTF-8", "Ваш WebDKP-аккаунт готов для работы. Примите поздравления!")?>
<br />
<br />
<?=iconv("CP1251", "UTF-8", "Прежде чем перейти к вашим DKP-таблицам, вы можете загрузить список игроков вашей гильдии из ")?>
<a href="http://eu.wowarmory.com/"><?=iconv("CP1251", "UTF-8", "Оружейной World of Warcraft")?></a>.
<br />
<br />

<input type="button" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "Загрузить список!")?>" onclick='document.location="<?=($guildurl)?>/Armory"' style="width:200px">
<br />
<br />
<input type="button" class="largeButton" value="<?=iconv("CP1251", "UTF-8", "Вперед, к DKP!")?>" style="width:200px" onclick='document.location="<?=($guildurl)?>"'>
