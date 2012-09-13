<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Access {

    // Главная страница
    public function action_index()
    {
        $articles = array();

        $content = View::factory('/admin/show')
            ->bind('articles', $articles)
            ->bind('catalog', $catalog);

        $articles = Model::factory('Article')->get_all();
        $catalog = Model::factory('Catalog')->get_all();

        $this->template->content = $content;
    }

} // End Main