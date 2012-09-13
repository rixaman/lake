<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-03 13:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-03 13:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-03 13:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-03 13:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-03 13:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-03 13:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#1 {main}
2012-06-03 13:04:17 --- ERROR: View_Exception [ 0 ]: The requested view /pages/articles could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-03 13:04:17 --- STRACE: View_Exception [ 0 ]: The requested view /pages/articles could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(137): Kohana_View->set_filename('/pages/articles')
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(30): Kohana_View->__construct('/pages/articles', NULL)
#2 Z:\home\yarik\teh-korm\application\classes\controller\articles.php(7): Kohana_View::factory('/pages/articles')
#3 [internal function]: Controller_Articles->action_index()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}
2012-06-03 13:04:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-03 13:04:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-03 13:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/11-site was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-03 13:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/11-site was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-03 13:05:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/11-site was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-03 13:05:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/11-site was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-03 13:05:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL articles/10-pig was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-06-03 13:05:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL articles/10-pig was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-03 14:33:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-03 14:33:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#3 {main}
2012-06-03 14:33:48 --- ERROR: View_Exception [ 0 ]: The requested view /pages/articles could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-03 14:33:48 --- STRACE: View_Exception [ 0 ]: The requested view /pages/articles could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(137): Kohana_View->set_filename('/pages/articles')
#1 Z:\home\yarik\teh-korm\system\classes\kohana\view.php(30): Kohana_View->__construct('/pages/articles', NULL)
#2 Z:\home\yarik\teh-korm\application\classes\controller\articles.php(7): Kohana_View::factory('/pages/articles')
#3 [internal function]: Controller_Articles->action_index()
#4 Z:\home\yarik\teh-korm\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Articles))
#5 Z:\home\yarik\teh-korm\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 Z:\home\yarik\teh-korm\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\yarik\teh-korm\index.php(111): Kohana_Request->execute()
#8 {main}