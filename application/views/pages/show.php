<? // из массива $articles перём каждый элемент как $article ?>
<?php foreach($articles as $article): ?>

	<div>
	    <h2><strong><?php echo $article['title']; ?></strong></h2><br>
	    <p><?php echo $article['content_short']; ?></p>
	    <p style="text-align:right">
	        <a href="<?php echo URL::site('articles/'. $article['id'] .'-'. $article['url']); ?>">Подробнее >></a>
	    </p><br>
	</div>

<?php endforeach; ?>