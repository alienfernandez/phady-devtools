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

namespace Phady\Security\Http\Firewall;

use Phady\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Phady\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Phady\Security\Http\Logout\LogoutHandlerInterface;
use Phady\Security\Http\AccessMapInterface;

/**
 * @class Phady\Security\Http\Firewall\LogoutListener
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class LogoutListener extends \Phalcon\Di\Injectable implements ListenerInterface
{


    /**
     * Constructor.
     *
     * @param TokenStorageInterface         tokenStorage
     * @param LogoutSuccessHandlerInterface successHandler   A LogoutSuccessHandlerInterface instance
     * @param array                         options          An array of options to process a logout attempt
     */
    public function __construct(TokenStorageInterface $tokenStorage, LogoutSuccessHandlerInterface $successHandler, $options = []) {}


    /**
     * Adds a logout handler.
     *
     * @param LogoutHandlerInterface handler
     */
    public function addHandler(LogoutHandlerInterface $handler) {}


    /**
     * Whether this request is asking for logout.
     *
     * The default implementation only processed requests to a specific path,
     * but a subclass could change this to logout requests where
     * certain parameters is present.
     *
     * @param Request request
     *
     * @return bool
     */
    protected function requiresLogout(Request $request) {}

    /**
     * This interface must be implemented by firewall listeners.
     */
    public function handle() {}
    
}
