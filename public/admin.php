<?php

/**
 * @license
 *
 * sabre/katana.
 * Copyright (C) 2015  fruux GmbH (https://fruux.com/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

require_once __DIR__ . '/../bootstrap.php';

use Sabre\Katana\Server\Installer;
use Sabre\Katana\Server\Server;
use Sabre\HTTP;

/**
 * This file logs the admnistrator in.
 *
 * @copyright Copyright (C) 2015 fruux GmbH (https://fruux.com/).
 * @author Ivan Enderlin
 * @license GNU Affero General Public License, Version 3.
 */

/**
* If the applications has not already been installed, redirect to install.php.
 */
if (false === Installer::isInstalled()) {

    $request  = HTTP\Sapi::getRequest();
    $response = new HTTP\Response();

    Installer::redirectToInstall($response, $request);
    HTTP\Sapi::sendResponse($response);

    return;

}

echo file_get_contents('katana://views/admin.html');
