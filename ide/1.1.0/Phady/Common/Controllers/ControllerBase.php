<?php
/*
+------------------------------------------------------------------------+
| Phady Framework                                                        |
+------------------------------------------------------------------------+
| Copyright (c) 2015                                                     |
+------------------------------------------------------------------------+
| Phady Framework is a complement of Phalcon Framework                   |
|                                                                        |
+------------------------------------------------------------------------+
| Authors: Alien fernandez Fuentes <alienfernandez85@gmail.com>          |
+------------------------------------------------------------------------+
*/

namespace Phady\Common\Controllers;

use Phalcon\Mvc\Controller as ControllerMVC;

/**
 * Phady\Common\Entities\ModelBase
 *
 * Base Model
 */
class ControllerBase extends ControllerMVC
{

    const LOGIN_URI = "login";

    const PORTAL_URI = "portal";

    /**
     * initialize the class.
     * @name initialize
     * @return NULL
     */
    public function initialize() {}

}
