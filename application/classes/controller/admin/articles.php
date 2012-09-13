<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Articles extends Controller_Access {

    public function action_edit()
    {
    	$id = $this->request->param('id');

        $content = View::factory('/admin/article_edit')
            ->bind('article', $article)
            ->bind('url', $url);
		$article = Model::factory('Article')->get_article($id);
		
		$url = 'admin/articles/save/'. $article['id'] .'-'.$article['url'];
        
		$this->template->content = $content;
    }
    public function action_save()
    {
    	$id = $this->request->param('id');
    	if($this->request->post('content_full') != NULL)
		{
			$article = array();
			$article['title'] = $this->request->post('title');
			$article['url'] = $this->request->post('url');
			$article['author'] = $this->request->post('author');
			$article['content_short'] = $this->request->post('content_short');
			$article['content_full'] = $this->request->post('content_full');

			Model::factory('Article')->save_article($article, $id);			
		}
		if($id != NULL)
		{
			$this->action_edit();
		}
		else
		{
			 $this->request->redirect(Route::get('admin')->uri());

		}
    }
    public function action_new()
    {
    	$content = View::factory('/admin/article_edit')
            ->bind('article', $article)
            ->bind('url', $url);
        $url = 'admin/articles/save/';
        $article = array(
        	'title'=>'',
        	'author'=>'',
        	'url'=>'new',
        	'author_title'=>'',
        	'content_short'=>'',
        	'content_full'=>'',

        );
		$this->template->content = $content;
    }
    public function action_delete()
    {
    	$id = $this->request->param('id');
    	Model::factory('Article')->delete_article($id);			
    	$this->request->redirect(Route::get('admin')->uri());

    }
} // End Main