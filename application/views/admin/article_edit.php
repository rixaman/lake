<?php if($article): ?>

	<?php echo Form::open($url, array('id'=>'contact', 'enctype'=>'multipart/form-data'));?>
	
	<?php echo Form::label('title', 'Заголовок'); ?><br>
	<?php echo Form::input('title', $article['title']); ?><br>
	<br />
	<?php echo Form::label('url', 'Название в урл'); ?><br>
	<?php echo Form::input('url', $article['url']); ?><br>
	<br />
	<?php echo Form::label('content_short', 'Текст статьи'); ?><br>
	<?php echo Form::textarea('content_short', $article['content_short'], array('id'=>'content_full'));?><br>
	<br />
	<?php echo Form::label('content_full', 'Полный текст статьи'); ?><br>
	<?php echo Form::textarea('content_full', $article['content_full'], array('id'=>'content_full'));?>
	<br />
	<?php echo Form::submit('submit', __('Сохранить', array('id'=>'submit')));?>
	<?php echo Form::close();?>

<?php else: ?>
<div style="padding:10px; margin-bottom:10px;">
    Статья не найдена или не существует
</div>
<?php endif; ?>