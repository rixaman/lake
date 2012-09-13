<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-11 12:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-11 12:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-11 12:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-11 12:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-11 12:21:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-11 12:21:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-11 12:21:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Article::get_article_by_static() ~ APPPATH\classes\controller\static.php [ 12 ]
2012-06-11 12:21:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Article::get_article_by_static() ~ APPPATH\classes\controller\static.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-11 12:25:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Article::get_article_by_static() ~ APPPATH\classes\controller\admin\static.php [ 10 ]
2012-06-11 12:25:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Article::get_article_by_static() ~ APPPATH\classes\controller\admin\static.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-11 12:38:26 --- ERROR: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\views\pages\article.php [ 10 ]
2012-06-11 12:38:26 --- STRACE: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\views\pages\article.php [ 10 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\article.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 10, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:40:37 --- ERROR: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\views\pages\article.php [ 10 ]
2012-06-11 12:40:37 --- STRACE: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\views\pages\article.php [ 10 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\article.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 10, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:40:38 --- ERROR: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\views\pages\article.php [ 10 ]
2012-06-11 12:40:38 --- STRACE: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\views\pages\article.php [ 10 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\article.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 10, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:40:39 --- ERROR: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\views\pages\article.php [ 10 ]
2012-06-11 12:40:39 --- STRACE: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\views\pages\article.php [ 10 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\article.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 10, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:41:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: static ~ APPPATH\views\pages\static.php [ 1 ]
2012-06-11 12:41:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: static ~ APPPATH\views\pages\static.php [ 1 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 1, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:41:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\pages\static.php [ 10 ]
2012-06-11 12:41:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH\views\pages\static.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-11 12:41:43 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 12:41:43 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:43:03 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 12:43:03 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:43:04 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 12:43:04 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:43:06 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 12:43:06 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:43:07 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 12:43:07 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 12:43:11 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 12:43:11 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(27): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:03:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'static' in 'where clause' [ SELECT * FROM articles where `static` is NULL order by `id` desc ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:03:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'static' in 'where clause' [ SELECT * FROM articles where `static` is NULL order by `id` desc ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\article.php(13): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\page.php(16): Model_Article->get_all()
#3 [internal function]: Controller_Page->action_index()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:06:40 --- ERROR: ErrorException [ 8 ]: Undefined index: alt_title ~ APPPATH\views\pages\show.php [ 7 ]
2012-06-11 14:06:40 --- STRACE: ErrorException [ 8 ]: Undefined index: alt_title ~ APPPATH\views\pages\show.php [ 7 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\show.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 7, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(28): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Page))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:07:06 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\article.php [ 6 ]
2012-06-11 14:07:06 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\article.php [ 6 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\article.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 6, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(28): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Articles))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:08:36 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\admin\show.php [ 17 ]
2012-06-11 14:08:36 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\admin\show.php [ 17 ]
--
#0 Z:\home\yarik\teh-korm\application\views\admin\show.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 17, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(28): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:09:17 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\admin\show.php [ 17 ]
2012-06-11 14:09:17 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\admin\show.php [ 17 ]
--
#0 Z:\home\yarik\teh-korm\application\views\admin\show.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 17, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(28): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:10:12 --- ERROR: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\classes\controller\admin\static.php [ 11 ]
2012-06-11 14:10:12 --- STRACE: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\classes\controller\admin\static.php [ 11 ]
--
#0 Z:\home\yarik\teh-korm\application\classes\controller\admin\static.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 11, Array)
#1 [internal function]: Controller_Admin_Static->action_get()
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Static))
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#6 {main}
2012-06-11 14:10:15 --- ERROR: ErrorException [ 8 ]: Undefined index: url ~ APPPATH\views\admin\article_edit.php [ 9 ]
2012-06-11 14:10:15 --- STRACE: ErrorException [ 8 ]: Undefined index: url ~ APPPATH\views\admin\article_edit.php [ 9 ]
--
#0 Z:\home\yarik\teh-korm\application\views\admin\article_edit.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 9, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(28): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Articles))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/12- was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-11 14:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/12- was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-11 14:29:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/12- was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-11 14:29:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/12- was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-11 14:32:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/13- was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-11 14:32:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/13- was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-11 14:36:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/13 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-11 14:36:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/13 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-11 14:45:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-11 14:45:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-11 14:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-11 14:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-11 14:45:48 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 14:45:48 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(28): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:45:50 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 14:45:50 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(28): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:45:53 --- ERROR: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
2012-06-11 14:45:53 --- STRACE: ErrorException [ 8 ]: Undefined index: author ~ APPPATH\views\pages\static.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\static.php(5): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(28): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Static))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-11 14:50:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `static` = :url' at line 1 [ SELECT * FROMstaticWHERE `static` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:50:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `static` = :url' at line 1 [ SELECT * FROMstaticWHERE `static` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROMst...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(12): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:51:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `url` = :static' at line 1 [ SELECT * FROMstaticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:51:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `url` = :static' at line 1 [ SELECT * FROMstaticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROMst...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(12): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:51:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `url` = :static' at line 1 [ SELECT * FROMstaticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:51:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `url` = :static' at line 1 [ SELECT * FROMstaticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROMst...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(12): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:51:28 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `url` = :static' at line 1 [ SELECT * FROMstaticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:51:28 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `url` = :static' at line 1 [ SELECT * FROMstaticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROMst...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(12): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:53:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `url` = :url' at line 1 [ SELECT * FROMstaticWHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:53:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstaticWHERE `url` = :url' at line 1 [ SELECT * FROMstaticWHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROMst...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:54:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstatic' at line 1 [ SELECT * FROMstatic ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:54:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROMstatic' at line 1 [ SELECT * FROMstatic ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROMst...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:54:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:54:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:54:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:54:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:54:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:54:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:54:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :static' at line 1 [ SELECT * FROM staticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:54:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :static' at line 1 [ SELECT * FROM staticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:55:02 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :static' at line 1 [ SELECT * FROM staticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:55:02 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :static' at line 1 [ SELECT * FROM staticWHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:55:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `static` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:55:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `static` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:55:14 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `static` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:55:14 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= :url' at line 1 [ SELECT * FROM staticWHERE `static` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:55:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ SELECT * FROM static WHERE `static` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:55:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ SELECT * FROM static WHERE `static` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:55:50 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ SELECT * FROM static WHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:55:50 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ SELECT * FROM static WHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:55:53 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ SELECT * FROM static WHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:55:53 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ SELECT * FROM static WHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:56:35 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':static' at line 1 [ select * from static WHERE `static` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:56:35 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':static' at line 1 [ select * from static WHERE `static` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:57:08 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':static' at line 1 [ select * from static WHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:57:08 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':static' at line 1 [ select * from static WHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#3 [internal function]: Controller_Static->action_contacts()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:57:11 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':static' at line 1 [ select * from static WHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:57:11 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':static' at line 1 [ select * from static WHERE `url` = :static ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:58:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'about' in 'where clause' [ select * from static WHERE `url` = about ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:58:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'about' in 'where clause' [ select * from static WHERE `url` = about ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:58:19 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ select * from static WHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:58:19 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ select * from static WHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 14:58:22 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ select * from static WHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-11 14:58:22 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ':url' at line 1 [ select * from static WHERE `url` = :url ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'select * from s...', false, Array)
#1 Z:\home\yarik\teh-korm\application\classes\model\static.php(38): Kohana_Database_Query->execute()
#2 Z:\home\yarik\teh-korm\application\classes\controller\static.php(11): Model_Static->get_article_by_static('about')
#3 [internal function]: Controller_Static->action_about()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-11 15:02:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-11 15:02:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-11 15:03:39 --- ERROR: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\classes\controller\admin\static.php [ 11 ]
2012-06-11 15:03:39 --- STRACE: ErrorException [ 8 ]: Undefined index: content_full ~ APPPATH\classes\controller\admin\static.php [ 11 ]
--
#0 Z:\home\yarik\teh-korm\application\classes\controller\admin\static.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\yarik\t...', 11, Array)
#1 [internal function]: Controller_Admin_Static->action_get()
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Static))
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#6 {main}