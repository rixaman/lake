<? // из массива $catalog перём каждый элемент как $item и выводим его содержимое?>
	<?php foreach($catalog as $item): ?>

	<div style="padding:10px; margin-bottom:10px;">
	    <h2><strong><?php echo $item['title']; ?></strong></h2><br>
	    <p><?php echo $item['content']; ?></p>
	</div>

	<?php endforeach; ?>