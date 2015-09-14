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

use Phady\Security\Core\Authentication\Token\TokenInterface;
use Phady\Security\Http\AccessMapInterface;

/**
 * @class Phady\Security\Http\Firewall\ContextListener
 *
 * @author  Alien Fernández Fuentes <alienfernandez85@gmail.com>
 * @package Core
 * @copyright (c) 2015
 * @version 1.0.0
 */
class ContextListener extends \Phalcon\Di\Injectable implements ListenerInterface
{

    public function __construct($contextKey, $userProviders) {}

    /**
     * Refreshes the user by reloading it from the user provider.
     *
     * @param TokenInterface token
     *
     * @return TokenInterface|null
     *
     * @throws \RuntimeException
     */
    protected function refreshUser(TokenInterface $token) {}

    /**
     * This interface must be implemented by firewall listeners.
     */
    public function handle() {}
    
}
