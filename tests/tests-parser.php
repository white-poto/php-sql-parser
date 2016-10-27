<?php

/**
 * execute all tests
 */
require dirname(__FILE__) . '/../vendor/autoload.php';
$start = microtime(true);

require_once(dirname(__FILE__) . '/tests/parser/aliases.php');
require_once(dirname(__FILE__) . '/tests/parser/allcolumns.php');
require_once(dirname(__FILE__) . '/tests/parser/backtick.php');
require_once(dirname(__FILE__) . '/tests/parser/delete.php');
require_once(dirname(__FILE__) . '/tests/parser/from.php');
require_once(dirname(__FILE__) . '/tests/parser/gtltop.php');
require_once(dirname(__FILE__) . '/tests/parser/inlist.php');
require_once(dirname(__FILE__) . '/tests/parser/insert.php');
require_once(dirname(__FILE__) . '/tests/parser/issue11.php');
require_once(dirname(__FILE__) . '/tests/parser/issue12.php');
require_once(dirname(__FILE__) . '/tests/parser/issue15.php');
require_once(dirname(__FILE__) . '/tests/parser/issue21.php');
require_once(dirname(__FILE__) . '/tests/parser/issue25.php');
require_once(dirname(__FILE__) . '/tests/parser/issue30.php');
require_once(dirname(__FILE__) . '/tests/parser/issue31.php');
require_once(dirname(__FILE__) . '/tests/parser/issue32.php');
require_once(dirname(__FILE__) . '/tests/parser/issue34.php');
require_once(dirname(__FILE__) . '/tests/parser/issue36.php');
require_once(dirname(__FILE__) . '/tests/parser/issue37.php');
require_once(dirname(__FILE__) . '/tests/parser/issue38.php');
require_once(dirname(__FILE__) . '/tests/parser/issue39.php');
require_once(dirname(__FILE__) . '/tests/parser/issue40.php');
require_once(dirname(__FILE__) . '/tests/parser/issue41.php');
require_once(dirname(__FILE__) . '/tests/parser/issue42.php');
require_once(dirname(__FILE__) . '/tests/parser/issue43.php');
require_once(dirname(__FILE__) . '/tests/parser/issue44.php');
require_once(dirname(__FILE__) . '/tests/parser/issue45.php');
require_once(dirname(__FILE__) . '/tests/parser/issue46.php');
require_once(dirname(__FILE__) . '/tests/parser/issue50.php');
require_once(dirname(__FILE__) . '/tests/parser/issue51.php');
require_once(dirname(__FILE__) . '/tests/parser/issue52.php');
require_once(dirname(__FILE__) . '/tests/parser/issue53.php');
require_once(dirname(__FILE__) . '/tests/parser/issue54.php');
require_once(dirname(__FILE__) . '/tests/parser/issue55.php');
require_once(dirname(__FILE__) . '/tests/parser/issue56.php');
require_once(dirname(__FILE__) . '/tests/parser/issue60.php');
require_once(dirname(__FILE__) . '/tests/parser/issue61.php');
require_once(dirname(__FILE__) . '/tests/parser/issue62.php');
require_once(dirname(__FILE__) . '/tests/parser/issue65.php');
require_once(dirname(__FILE__) . '/tests/parser/issue68.php');
require_once(dirname(__FILE__) . '/tests/parser/issue67.php');
require_once(dirname(__FILE__) . '/tests/parser/issue69.php');
require_once(dirname(__FILE__) . '/tests/parser/issue70.php');
require_once(dirname(__FILE__) . '/tests/parser/issue71.php');
require_once(dirname(__FILE__) . '/tests/parser/issue72.php');
require_once(dirname(__FILE__) . '/tests/parser/issue74.php');
require_once(dirname(__FILE__) . '/tests/parser/left.php');
require_once(dirname(__FILE__) . '/tests/parser/nested.php');
require_once(dirname(__FILE__) . '/tests/parser/positions.php');
require_once(dirname(__FILE__) . '/tests/parser/select.php');
require_once(dirname(__FILE__) . '/tests/parser/subselect.php');
require_once(dirname(__FILE__) . '/tests/parser/union.php');
require_once(dirname(__FILE__) . '/tests/parser/update.php');
require_once(dirname(__FILE__) . '/tests/parser/zero.php');
echo "processing tests within: " .  (microtime(true) - $start) . " seconds\n";