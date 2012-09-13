<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Common {

    // Страница о сайте
    public function action_about()
    {
        $content = View::factory('/pages/static')
            ->bind('article', $article);

        $article = Model::factory('Static')->get_static('about');
        $tehprom = '<img src="public/images/logo-rd.jpg" width="268" height="98" />';
        $this->template->content = $content;
        $this->template->active = 'about';
    }

    // Страница контактов    
    public function action_contacts()
    {
        $content = View::factory('/pages/static')
            ->bind('article', $article);

        $article = Model::factory('Static')->get_static('contacts');
        $tehprom = '<img src="public/images/logo-bl.jpg" width="268" height="98" />';
        $this->template->content = $content;
        $this->template->active = 'contacts';
    }

} // End Page