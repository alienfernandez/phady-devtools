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

namespace Phady\Security\Http\Logout;

use Phalcon\Http\Request;

/**
 * @class Phady\Security\Http\\Logout\ChannelListener
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class DefaultLogoutSuccessHandler extends \Phalcon\Di\Injectable implements LogoutSuccessHandlerInterface
{
    /**
     * @param string    targetUrl
     */
    public function __construct($targetUrl = "/") {}

    /**
     * Creates a Response object to send upon a successful logout.
     *
     * @param Request request
     *
     * @return Response never null
     */
    public function onLogoutSuccess(Request $request) {}
}
