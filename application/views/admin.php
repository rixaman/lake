<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php foreach($styles as $style): ?>
    <?echo HTML::style($style);?>
    <?php endforeach; ?>
    <?php foreach($scripts as $script): ?>
    <?echo HTML::script($script);?>
    <?php endforeach; ?>
</head>
<body>
<div class="wrapper">
    <nav id="adminnav" style="top: 215px">
        <ul>
            <li <?= (($active === '/') ? 'class="active"' : NULL); ?> 
                style="border-top: none">
                <a href="<?php echo URL::site(); ?>">Новости</a></li>
            <li <?= (($active === 'catalog') ? 'class="active"' : NULL); ?> >
                <a href="<?php echo URL::site('catalog'); ?>">Каталог</a></li>
            <li <?= (($active === 'about') ? 'class="active"' : NULL); ?> >
                <a href="<?php echo URL::site('about'); ?>">О компании</a></li>
            <li <?= (($active === 'contacts') ? 'class="active"' : NULL); ?>class="contacts" style="border-bottom: none">
                <a href="<?php echo URL::site('contacts'); ?>">Контакты</a></li>
        </ul>
    </nav>
    <div id="adminka">
        <ul>
            <li style="border-top: none"><a href="<?php echo URL::site('admin/articles/new/'); ?>">Добавить свежую новость</a></li>
            <li><a href="<?php echo URL::site('admin/catalog/new/'); ?>">Добавить новый товар</a></li>
            <li><a href="<?php echo URL::site('admin/about'); ?>">Изменить страницу о нас</a></li>
            <li><a href="<?php echo URL::site('admin/contacts'); ?>">Изменить страницу контактов</a></li>
            <li><a href="<?php echo URL::site('admin/'); ?>">Главная админка</a></li>
            <li style="border-bottom: none"><a href="<?php echo URL::site('auth/logout'); ?>">Выйти</a></li>
        </ul>
    </div>
    <div class="content" style="float:none; margin: 0 auto"><?php echo $content; ?></div>
    <a href="/auth"><div id="admin" style="position: absolute; top: 455px; left: 15px"></div></a>
</div>
</body>
</html>