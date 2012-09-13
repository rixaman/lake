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
    <header class="header">
        <div class="right">
            <h3 class="cyan left">
                <span>  - Прямо со склада города Шадринска<br>
                        - По приемлемым ценам<br>
                        - Быстро<br>
                </span></h3>
            <h1><span class="brown left">ИП Ермолаев В.А.</span></h1>
        </div>
        <div>
            <h2 class="cyan">
                <span>Мы предлагаем вам продукцию</span><br>
            </h2>
        </div>
        <figure>
            <div id="logo"></div>
        </figure>
    </header>
    <div id="container">
        <nav>
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
        <div class="content"><?php echo $content; ?></div>
        <a href="/auth"><div id="admin"></div></a>
    </div>
</div>
</body>
</html>