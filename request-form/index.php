<?php
require_once('include/config.php');
$path = stream_resolve_include_path(CORE_VERSION);

set_include_path(get_include_path() . PATH_SEPARATOR . $path);


require_once('core/application.php');
application::run();

exit();
