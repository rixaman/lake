<h1>Изменяем страницу</h1><br>
<?php echo Form::open('admin/'.Request::current()->param('static').'/set', array('id'=>'contact', 'enctype'=>'multipart/form-data'));?>
<?php echo Form::label('title', 'Заголовок'); ?><br>
<?php echo Form::input('title', $title); ?><br>
<br />
<?php echo Form::label('content', 'Текст'); ?><br>
<?php echo Form::textarea('content', $body, array('id'=>'content'));?>
<br />
<?php echo Form::submit('submit', __('Сохранить', array('id'=>'submit')));?>
<?php echo Form::close();?>

