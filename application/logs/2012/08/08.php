<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-08-08 20:13:22 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'tehkorm' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-08-08 20:13:22 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'tehkorm' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 Z:\home\pr\tecor\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('tehkorm')
#1 Z:\home\pr\tecor\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 Z:\home\pr\tecor\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM a...', false, Array)
#3 Z:\home\pr\tecor\application\classes\model\article.php(14): Kohana_Database_Query->execute()
#4 Z:\home\pr\tecor\application\classes\controller\page.php(16): Model_Article->get_all()
#5 [internal function]: Controller_Page->action_index()
#6 Z:\home\pr\tecor\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Page))
#7 Z:\home\pr\tecor\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 Z:\home\pr\tecor\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\pr\tecor\index.php(109): Kohana_Request->execute()
#10 {main}
2012-08-08 20:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-08 20:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pr\tecor\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-08 20:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-08 20:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pr\tecor\index.php(109): Kohana_Request->execute()
#1 {main}
2012-08-08 20:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-08-08 20:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 Z:\home\pr\tecor\index.php(109): Kohana_Request->execute()
#1 {main}