<?php if($article): ?>
<div style="padding:10px; margin-bottom:10px;">
    <h2 class="right"><strong><?php echo $article['title']; ?></strong></h2><br><br><br>
    <p><?php echo $article['content_full']; ?></p>
</div>

<?php else: ?>

<div style="padding:10px; margin-bottom:10px;">
    Статья не найдена или не существует
</div>
<?php endif; ?>