<?php if($item): ?>

	<?php echo Form::open($url, array('id'=>'contact', 'enctype'=>'multipart/form-data'));?>
	
	<?php echo Form::label('title', 'Заголовок'); ?><br>
	<?php echo Form::input('title', $item['title']); ?><br>
	<br />
	<?php echo Form::label('url', 'Название в урл'); ?><br>
	<?php echo Form::input('url', $item['url']); ?><br>
	<br />
	<?php echo Form::label('content', 'Полный текст статьи'); ?><br>
	<?php echo Form::textarea('content', $item['content'], array('id'=>'content'));?>
	<br />
	<?php echo Form::submit('submit', __('Сохранить', array('id'=>'submit')));?>
	<?php echo Form::close();?>

<?php else: ?>
<div style="padding:10px; margin-bottom:10px;">
    Статья не найдена или не существует
</div>
<?php endif; ?>