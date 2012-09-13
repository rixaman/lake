<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Catalog extends Controller_Access {

    public function action_edit()
    {
    	$id = $this->request->param('id');

        $content = View::factory('/admin/item_edit')
            ->bind('item', $item)
            ->bind('url', $url);
            
		$item = Model::factory('Catalog')->get_item($id);
		
		$url = 'admin/catalog/save/'. $item['id'] .'-'.$item['url'];
        
		$this->template->content = $content;
    }
    public function action_save()
    {
    	$id = $this->request->param('id');
    	if($this->request->post('content') != NULL)
		{
			$item = array();
			$item['title'] = $this->request->post('title');
			$item['url'] = $this->request->post('url');
			$item['content'] = $this->request->post('content');

			Model::factory('Catalog')->save_item($item, $id);			
		}

			 $this->request->redirect(Route::get('admin')->uri());

    }
    public function action_new()
    {
    	$content = View::factory('/admin/item_edit')
            ->bind('item', $item)
            ->bind('url', $url);
        $url = 'admin/catalog/save/';
        $item = array(
        	'title'=>'',
        	'url'=>'item',
        	'title'=>'',
        	'content'=>'',
        );
		$this->template->content = $content;
    }
    public function action_delete()
    {
    	$id = $this->request->param('id');
    	Model::factory('Catalog')->delete_item($id);			
    	$this->request->redirect(Route::get('admin')->uri());

    }
} // End Main