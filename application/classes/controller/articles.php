<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Controller_Common {
    // мусор
    /*public function action_index()
    {
        $content = View::factory('/pages/articles');
        // постраничная навигация, сто страниц
        $content->pagination = Pagination::factory(array('total_items' => 100));

        $this->template->content = $content;
    }*/

        // подробная новость по Id
    public function action_article()
    {
        $id = $this->request->param('id');

        $content = View::factory('/pages/article')
            ->bind('article', $article);

        $article = Model::factory('Article')->get_article($id);

        $this->template->content = $content;
    }

} 