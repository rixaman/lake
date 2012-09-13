<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-13 00:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 00:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 00:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 00:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 00:16:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 00:16:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 00:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 00:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 01:50:32 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Попытка установить соединение была безуспешной, т.к. от другого  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-06-13 01:50:32 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] Попытка установить соединение была безуспешной, т.к. от другого  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\mysql.php(432): Kohana_Database_MySQL->connect()
#1 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database.php(473): Kohana_Database_MySQL->escape('contacts')
#2 [internal function]: Kohana_Database->quote('contacts')
#3 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(189): array_map(Array, Array)
#4 Z:\home\yarik\teh-korm\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query->compile(Object(Database_MySQL))
#5 Z:\home\yarik\teh-korm\application\classes\model\static.php(39): Kohana_Database_Query->execute()
#6 Z:\home\yarik\teh-korm\application\classes\controller\static.php(24): Model_Static->get_article_by_static('contacts')
#7 [internal function]: Controller_Static->action_contacts()
#8 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Static))
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#12 {main}
2012-06-13 01:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 01:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 01:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 01:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 03:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 03:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 03:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 03:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 03:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 03:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 04:00:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 04:00:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 08:01:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: side ~ APPPATH\classes\controller\common.php [ 17 ]
2012-06-13 08:01:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: side ~ APPPATH\classes\controller\common.php [ 17 ]
--
#0 Z:\home\yarik\teh-korm\application\classes\controller\common.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 17, Array)
#1 [internal function]: Controller_Common->before()
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Page))
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#6 {main}
2012-06-13 08:02:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: side ~ APPPATH\classes\controller\page.php [ 21 ]
2012-06-13 08:02:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: side ~ APPPATH\classes\controller\page.php [ 21 ]
--
#0 Z:\home\yarik\teh-korm\application\classes\controller\page.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 21, Array)
#1 [internal function]: Controller_Page->action_index()
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#6 {main}
2012-06-13 08:22:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
2012-06-13 08:22:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\side.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(42): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Page))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-13 08:22:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
2012-06-13 08:22:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\side.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(42): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Page))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-13 08:22:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
2012-06-13 08:22:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\side.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(42): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Page))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-13 08:22:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
2012-06-13 08:22:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\side.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(42): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Page))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-13 08:22:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
2012-06-13 08:22:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: tehprom ~ APPPATH\views\pages\side.php [ 5 ]
--
#0 Z:\home\yarik\teh-korm\application\views\pages\side.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\yarik\t...', 5, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#2 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#3 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(228): Kohana_View->render()
#4 Z:\home\yarik\teh-korm\application\views\template.php(42): Kohana_View->__toString()
#5 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(61): include('Z:\home\yarik\t...')
#6 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(343): Kohana_View::capture('Z:\home\yarik\t...', Array)
#7 Z:\home\yarik\teh-korm\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Page))
#10 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#13 {main}
2012-06-13 08:23:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 22 ]
2012-06-13 08:23:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-13 08:24:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 24 ]
2012-06-13 08:24:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-13 08:24:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 24 ]
2012-06-13 08:24:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-13 08:25:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 24 ]
2012-06-13 08:25:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-13 08:25:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 24 ]
2012-06-13 08:25:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\page.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-13 09:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 09:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 14:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:48:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 14:48:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:49:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 14:49:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:50:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 14:50:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:51:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 14:51:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:53:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 14:53:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 14:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 14:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 14:57:20 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 14:57:20 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'catalog', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('catalog')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('catalog', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/catalog', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 14:57:57 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 14:57:57 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'catalog', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('catalog')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('catalog', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/catalog', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 14:58:10 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 14:58:10 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'catalog', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('catalog')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('catalog', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/catalog', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 14:58:32 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 14:58:32 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'catalog', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('catalog')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('catalog', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/catalog', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 14:58:36 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 14:58:36 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'catalog', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('catalog')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('catalog', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/catalog', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 14:59:49 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 14:59:49 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'catalog', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('catalog')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('catalog', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/catalog', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 15:00:37 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 15:00:37 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'catalog', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('catalog')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('catalog', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/catalog', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 15:00:41 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 15:00:41 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'about', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('about')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('about', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/about', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 15:00:48 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 15:00:48 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'contacts', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('contacts')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('contacts', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/contacts', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 15:00:51 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 15:00:51 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', '', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 15:01:22 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2012-06-13 15:01:22 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 85 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'Z:\home\yarik\t...', 392, Array)
#1 Z:\home\yarik\teh-korm\system\classes\kohana\route.php(392): preg_match('#^(?P<controlle...', 'about', NULL)
#2 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(567): Kohana_Route->matches('about')
#3 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(785): Kohana_Request::process_uri('about', Array)
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(198): Kohana_Request->__construct('/about', NULL)
#5 Z:\home\yarik\teh-korm\index.php(110): Kohana_Request::factory()
#6 {main}
2012-06-13 15:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 15:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 15:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 15:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 15:02:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 15:02:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 15:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 15:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 16:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 16:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 16:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 16:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 16:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 16:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 16:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 16:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 16:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-13 16:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-13 16:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 16:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 16:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 16:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 16:06:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 16:06:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 16:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 16:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-13 16:19:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 16:19:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-13 16:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/11 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-13 16:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/11 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-13 17:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 17:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-13 17:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/114pig was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-13 17:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/114pig was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-13 18:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-13 18:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL catalog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(109): Kohana_Request->execute()
#3 {main}