<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Common {

    public function action_index()
    {
        $catalog = array();
        $content = View::factory('/pages/catalog')
            ->bind('catalog', $catalog);
        $catalog = Model::factory('Catalog')->get_all();
        $this->template->content = $content;
        $tehprom = '<img src="public/images/logo-rd.jpg" width="268" height="98" />';
        $this->template->active = 'catalog';
    }
} 