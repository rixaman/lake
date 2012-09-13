<?php defined('SYSPATH') or die('No direct script access.');

// общий класс контроллера, от него наследуются все другие контроллеры
abstract class Controller_Common extends Controller_Template {

    public function before()
    {
        // объявляем глобальные переменные и устанавливаем их
        parent::before();
        View::set_global('title', 'ООО "ТехКорм" склад Шадринск');
        View::set_global('description', 'ООО "ТехКорм" склад Шадринск, кормовые добавки');
        View::set_global('logo', 'ООО "ТехКорм" склад Шадринск, ИП Ермолаев В.А.');
        View::set_global('active', '/');
        
        $this->template->content = '';
        
        // подключаем файлы со стилями и скриптами
        $this->template->styles = array('public/css/main.css', 'public/css/typo.css');
        $this->template->scripts = array('public/js/jquery-1.7.2.min.js', 'public/js/html5.js', 'public/js/js.js');
    }

} 