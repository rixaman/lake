<?php defined('SYSPATH') or die('No direct script access.');

// класс доступа авторизованного пользователя к админке
class Controller_Access extends Controller_Common {

	public function before()	
	{
		$session = Session::instance();
		$session->set('auth_redirect', $_SERVER['REQUEST_URI']);
		
		$auth = Auth::instance();
		if($auth->logged_in() == 0)  Request::initial()->redirect('auth');
		return parent::before();
	}

	// переопределяем шаблон страницы для админа
	public $template = 'admin';
}
