<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\AutomatedOperations\AppInfo\Application::APP_ID, OCA\AutomatedOperations\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\AutomatedOperations\AppInfo\Application::APP_ID, OCA\AutomatedOperations\AppInfo\Application::APP_ID . '-main');

?>

<div id="automatedoperations"></div>
