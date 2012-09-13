<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Static extends Controller_Access {
	
	public function action_get()
	{
		$content = View::factory('/admin/static')
			->bind('title', $title)
			->bind('body', $body);
		$article = Model::factory('Static')->get_static(Request::current()->param('static'));
		$body = $article['content'];
		$title = $article['title'];
        $this->template->content = $content;
	}
	public function action_set()
	{
		if($this->request->post('content') != NULL)
		{
					Model::factory('Static')->set_static(Request::current()->param('static'), $this->request->post('title'), $this->request->post('content'));			
		}
		$this->action_get();
	}
}
?>