<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-02 21:05:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ]
2012-06-02 21:05:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\template.php [ 6 ]
--
#0 Z:\home\yarik\teh-korm\application\views\template.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 6, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#9 {main}