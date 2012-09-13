<h1 class="crimson">Каталог</h1><br><br>
    <?php foreach($catalog as $item): ?>
        <h2><strong><?php echo $item['title']; ?></strong></h2><br>
        <i>Дата публикации: <?php echo $item['date']; ?></i><br><br>
        <p><?php echo $item['content']; ?></p>
        <div style="float:right">
            <a href="<?php echo URL::site('admin/catalog/edit/'. $item['id'] .'-'. $item['url']); ?>">Редактировать</a><br>
            <a href="<?php echo URL::site('admin/catalog/delete/'. $item['id'] .'-'. $item['url']); ?>">Удалить</a>
        </div><br><br><br>
    <?php endforeach; ?>
<h1 class="crimson">Новости</h1><br><br>
    <?php foreach($articles as $article): ?>
        <h2><strong><?php echo $article['title']; ?></strong></h2><br>
        <i>Дата публикации: <?php echo $article['date']; ?></i><br><br>
        <div style="float:right">
            <a href="<?php echo URL::site('articles/'. $article['id'] .'-'. $article['url']); ?>">Подробнее</a><br>
            <a href="<?php echo URL::site('admin/articles/edit/'. $article['id'] .'-'. $article['url']); ?>">Редактировать</a><br>
            <a href="<?php echo URL::site('admin/articles/delete/'. $article['id'] .'-'. $article['url']); ?>">Удалить</a>
        </div><br><br><br>
    <?php endforeach; ?>