<?php defined('SYSPATH') or die('No direct script access.');

// класс страницы главной, наследуется от общего контроллера
class Controller_Page extends Controller_Common {

// Главная страница
    public function action_index()
    {
// отображаем новости
    // объявляем массив с новостями, пока пустой
        $articles = array();
    // вызываем страничку show и передаём ей содержимое массива новостей
        $content = View::factory('/pages/show')
            ->bind('articles', $articles);
    // благодоря модели Article вытягиваем из базы все новости
        $articles = Model::factory('Article')->get_all();

    // содержимое странички теперь берём из переменной $content
        $this->template->content = $content;
    // устанавливаем актовиной страничку текущую с новостями (для подсветки пункта меню)
        $this->template->active = '/';
    }
}