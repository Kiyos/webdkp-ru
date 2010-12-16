<?=$tabs?>
<?=$sidebar?>

<div class="adminContents">

<?php if(isset($eventResult)){ ?>
<div style="margin-left:70px;" class="<?=($eventResult?"message":"errorMessage")?>"><?=$eventMessage?></div>
<?php } ?>
<br />


<div class="adminSectionImage"><img src="<?=$siteRoot?>images/dkp/tables.gif"></div>
<div class="adminSection" style="padding-left:2px">
	<div class="title"><?=iconv("CP1251", "UTF-8", "DKP таблицы")?></div>

	<form action="<?=$baseurl?>Admin/DkpTables" method="post" name="createTable">
	<input type="hidden" name="event" value="createTable">
	<table class="dkp simpletable" id="tablelist" cellpadding="0" cellspacing="0">
		<tr class="header">
			<th><?=iconv("CP1251", "UTF-8", "Имя таблицы")?></th>
			<th class="center">ID</th>
			<th class="center"><?=iconv("CP1251", "UTF-8", "Действие")?></th>
		</tr>
		<?php foreach($tables as $table) { ?>
		<tr>
			<td><?=$table->name?></td>
			<td class="center" style="width:100px"><?=$table->tableid?></td>
			<td class="center middle" style="width:150px">

				<a class="dkpbutton" href="<?=$baseurl?>Admin/EditDkpTable?id=<?=$table->tableid?>"><img title="<?=iconv("CP1251", "UTF-8", "Изменить")?>" src="<?=$siteRoot?>images/buttons/edit.png"></a>
				<a class="dkpbutton" href="<?=$baseurl?>Admin/DeleteTable?id=<?=$table->tableid?>"
				onclick="return confirm('<?=iconv("CP1251", "UTF-8", "Вы действительно хотите удалить эту таблицу?\nВСЕ ДАННЫЕ БУДУТ СТЁРТЫ!")?>')">
				<img title="<?=iconv("CP1251", "UTF-8", "Удалить")?>" src="<?=$siteRoot?>images/buttons/delete.png"></a>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan=2>
				<input name="name" type="text" style="width:300px">
			</td>
			<td class="center">
				<img src="<?=$siteRoot?>images/buttons/new.png">
				<a href="javascript:Util.Submit('createTable')"><?=iconv("CP1251", "UTF-8", "Создать таблицу")?></a>
			</td>
		</tr>
	</table>
	</form>
</div>

<br />
<br />

<div class="adminSectionImage"><img src="<?=$siteRoot?>images/dkp/info.gif"></div>
<div class="adminSection" style="padding-left:2px">
	<div class="title"><?=iconv("CP1251", "UTF-8", "Относительно DKP таблиц")?></div>
	<b><?=iconv("CP1251", "UTF-8", "Вы должны прочитать это! Или вы рискуете потерять данные :(")?></b>
	<br />
	<?=iconv("CP1251", "UTF-8", "Здесь вы видите список DKP таблиц вашей гильдии. Ваша гильдия может иметь несколько таблиц,")?>
	<?=iconv("CP1251", "UTF-8", "которые помогут вам легче управлять DKP. Например, некоторые гильдии хранят отдельно")?>
	<?=iconv("CP1251", "UTF-8", "таблицы для 10 и 25 ппл рейдов, другие гильдии разделяют таблицы для каждого ")?>
	<?=iconv("CP1251", "UTF-8", "типа рейдов. При создании нескольких таблиц, на сайте и в аддоне появится выпадающий ")?>
	<?=iconv("CP1251", "UTF-8", "список, который позволит вам выбрать таблицу с которой вы хотите работать.")?>
	<br />
	<br />
	<?=iconv("CP1251", "UTF-8", "На этой странице вы можете изменить, удалить или создать DKP таблицу. Будьте <b>очень осторожны</b>")?>
	<?=iconv("CP1251", "UTF-8", "когда удаляете таблицы. Если вы удалите таблицу, вы удалите всю информацию в ней тоже!")?>

</div>



</div>
