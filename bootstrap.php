<?php

/***
 * ss-panel v3 Bootstrap
 * @author orvice
 * @email sspanel@orx.me
 * @url https://github.com/orvice/ss-panel
 */

use App\Services\Boot;

//  BASE_PATH
define('BASE_PATH', __DIR__);

// Vendor Autoload
require BASE_PATH . '/vendor/autoload.php';

require BASE_PATH . '/config/.config.php';

Boot::setDebug();
// config time zone
Boot::setTimezone();
// Init db
Boot::bootDb();
